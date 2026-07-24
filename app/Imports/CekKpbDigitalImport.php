<?php

namespace App\Imports;

use App\Models\CekKpbDigital;
use App\Models\CekKpbDigitalProgress;
use App\Models\KpbKriteria;
use App\Models\RekapKpb;
use App\Models\AstraWebc;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\WithMultipleSheets;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class CekKpbDigitalImport implements ToCollection, WithMultipleSheets, WithHeadingRow
{
    protected $context;
    protected $fileName;
    protected $job_id;
    protected $user_id;
    protected $duplicateEngines = [];
    protected $messages = [];
    protected $kpbKriteriaCache;
    protected $rekapKpbCache;

    public function __construct($context = null, $fileName = null, $job_id = null, $user_id = null)
    {
        $this->context  = $context;
        $this->fileName = $fileName;
        $this->job_id   = $job_id;
        $this->user_id  = $user_id;
        $this->kpbKriteriaCache = KpbKriteria::all()->keyBy(fn ($item) => $item->kode_nosin . '|' . $item->kpb_type);
        if ($this->job_id !== null) {
            CekKpbDigitalProgress::updateOrCreate(
                ['job_id' => $this->job_id],
                [
                    'file_name' => $this->fileName,
                    'progress'  => 0,
                    'status'    => 'processing',
                ]
            );
        }
    }

    /** Baca sheet pertama (index 0) */
    public function sheets(): array
    {
        return [0 => $this];
    }

    public function collection(Collection $rows)
    {
        $noEngineArray = $rows->pluck('no_engine')->filter()->toArray();

        $this->rekapKpbCache = RekapKpb::select('engine', 'km', 'service_date', 'service_id', 'buy_date')
            ->whereIn('engine', $noEngineArray)
            ->orderBy('service_id', 'DESC')
            ->get()
            ->groupBy('engine');

        $rowNum = 0;

        $rows->chunk(500)->each(function ($chunk) use (&$rowNum) {
            foreach ($chunk as $row) {
                $rowNum++;
                $data = $row->toArray();
                if (is_numeric($data['service_ke'])) {
                    $tgl_beli           = isset($data['bulan_beli'])
                        ? $data['tgl_beli'] . '/' . $data['bulan_beli'] . '/' . $data['tahun_beli']
                        : $data['tgl_beli'];
                    $formattedTglBeli    = $this->formatTanggalExcel($tgl_beli);
                    $formattedTglService = $this->formatTanggalExcel($data['tgl_service']);

                    $cekKpbDigital = $this->checkDuplicateImage($data, $rowNum, $formattedTglBeli, $formattedTglService);
                    if ($cekKpbDigital) {
                        $this->checkDateMismatch($cekKpbDigital, $rowNum, $formattedTglBeli, $formattedTglService);
                    }
                }
            }
        });

        $this->log("✅ Total baris dibaca: " . $rowNum);
    }

    protected function formatTanggalExcel($value)
    {
        try {
            if (is_numeric($value)) {
                $timestamp = \PhpOffice\PhpSpreadsheet\Shared\Date::excelToTimestamp($value);
                return date('Y-m-d', $timestamp);
            }
            $formats = ['d/m/Y', 'd-m-Y', 'm/d/Y', 'Y-m-d'];
            foreach ($formats as $fmt) {
                $dt = \DateTime::createFromFormat($fmt, trim($value));
                if ($dt !== false) return $dt->format('Y-m-d');
            }
            return date('Y-m-d', strtotime($value));
        } catch (\Exception $e) {
            return null;
        }
    }

    protected function log($message, $level = 'warn')
    {
        if ($this->context instanceof Command) {
            match ($level) {
                'warn'  => $this->context->warn($message),
                'error' => $this->context->error($message),
                default => $this->context->info($message),
            };
        } else {
            match ($level) {
                'warn'  => Log::warning($message),
                'error' => Log::error($message),
                default => Log::info($message),
            };
        }
    }

    // -------------------------------------------------------------------------
    // Helper untuk simpan ke cek_kpb_digitals
    // -------------------------------------------------------------------------

    private function upsert(array $data, string $message): CekKpbDigital
    {
        $record = CekKpbDigital::updateOrCreate(
            [
                'engine'     => $data['no_engine'],
                'service_id' => $data['service_ke'],
                'file_name'  => $this->fileName,
            ],
            [
                'buy_date'     => $data['_buy_date'],
                'service_date' => $data['_service_date'],
                'km'           => $data['km'],
                'user_id'      => $this->user_id,
            ]
        );
        $record->notes()->updateOrCreate(['message' => $message]);
        return $record;
    }

    // -------------------------------------------------------------------------
    // Check Functions
    // -------------------------------------------------------------------------

    /**
     * Untuk mengecek foto speedometer yang duplikat / sama
     */
    private function checkDuplicateImage($data, $rowNum, $formattedTglBeli, $formattedTglService)
    {
        $noEngine  = $data['no_engine'];
        $serviceKe = $data['service_ke'];

        // Selalu catat record ini ke dalam cek_kpb_digitals
        $cekKpbDigital = CekKpbDigital::updateOrCreate(
            [
                'engine'     => $noEngine,
                'service_id' => $serviceKe,
                'file_name'  => $this->fileName,
            ],
            [
                'buy_date'     => $formattedTglBeli,
                'service_date' => $formattedTglService,
                'km'           => $data['km'],
                'user_id'      => $this->user_id,
            ]
        );

        // Cari record astra_webc yang cocok berdasarkan nomor_mesin dan kpb_type
        $a = AstraWebc::where('nomor_mesin', $noEngine)
            ->where('kpb_type', 'KPB' . $serviceKe)
            ->first();
        
        if (!$a) {
            $cekKpbDigital->notes()->updateOrCreate([
                'message' => "⚠️ Baris {$rowNum}: Tidak ditemukan data claim padanan di AstraWebc.",
            ]);
            return $cekKpbDigital;
        }

        if (!$a->phash) {
            $cekKpbDigital->notes()->updateOrCreate([
                'message' => "⚠️ Baris {$rowNum}: Data claim padanan ditemukan tetapi tidak memiliki foto (pHash kosong).",
            ]);
            return $cekKpbDigital;
        }

        // Cari duplikat photo berdasarkan phash di AstraWebc
        $duplicates = AstraWebc::where('phash', $a->phash)->get();

        if ($duplicates->count() > 1) {
            $otherDuplicates = $duplicates->where('id', '!=', $a->id);

            if ($otherDuplicates->count() > 0) {
                $cekKpbDigital->notes()->updateOrCreate([
                    'message' => "⚠️ Baris {$rowNum}: Foto Speedometer Duplicate.",
                ]);
            }
        }
        
        return $cekKpbDigital;
    }

    /**
     * Memeriksa kesesuaian tanggal beli dan tanggal service dengan data WebC
     */
    private function checkDateMismatch($cekKpbDigital, $rowNum, $formattedTglBeli, $formattedTglService)
    {
        $a = AstraWebc::where('nomor_mesin', $cekKpbDigital->engine)
            ->where('kpb_type', 'KPB' . $cekKpbDigital->service_id)
            ->first();
        
        if (!$a) {
            $cekKpbDigital->notes()->updateOrCreate([
                'message' => "⚠️ Data Webc tidak ditemukan",
            ]);
            return;
        }

        if (!$a->phash) {
            $cekKpbDigital->notes()->updateOrCreate([
                'message' => "⚠️ Baris {$rowNum}: Gambar belum ada phash di AstraWebc.",
            ]);
        }
        $webcTglBeli = $a->tanggal_beli ? $this->formatTanggalExcel($a->tanggal_beli) : null;
        $webcTglService = $a->tanggal_claim ? $this->formatTanggalExcel($a->tanggal_claim) : null;

        if ($formattedTglBeli && $webcTglBeli && $formattedTglBeli !== $webcTglBeli) {
            $cekKpbDigital->notes()->updateOrCreate([
                'message' => "⚠️ Baris {$rowNum}: Tanggal Beli tidak sesuai dengan Webconsole (Excel: {$formattedTglBeli}, WebC: {$webcTglBeli}).",
            ]);
        }

        if ($formattedTglService && $webcTglService && $formattedTglService !== $webcTglService) {
            $cekKpbDigital->notes()->updateOrCreate([
                'message' => "⚠️ Baris {$rowNum}: Tanggal Service tidak sesuai dengan Webconsole (Excel: {$formattedTglService}, WebC: {$webcTglService}).",
            ]);
        }
    }
}