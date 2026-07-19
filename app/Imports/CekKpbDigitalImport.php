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

                    $this->checkDuplicateImage($data, $rowNum, $formattedTglBeli, $formattedTglService);
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
    private function checkDuplicateImage($data, $rowNum, $formattedTglBeli, $formattedTglService){
        $duplikasi = [];
        $noEngine = $data['no_engine'];
        $serviceKe = $data['service_ke'];

        $a = AstraWebc::where('nomor_mesin', $noEngine)
            ->where('kpb_type', 'KPB' . $serviceKe)
            ->first();
        
        $duplicates = AstraWebc::where('phash', $a->phash)
            // ->where('km', $km)
            ->get();

        if ($duplicates->count() > 1) {
            // Ambil semua duplikat KECUALI record utama ($a)
            $otherDuplicates = $duplicates->where('id', '!=', $a->id);

            if ($otherDuplicates->count() > 0) {  // pastikan masih ada yang lain setelah di-exclude
                $duplikasi[] = [
                    'nomor_mesin'     => $a->nomor_mesin,
                    'kpb_type'        => $a->kpb_type,
                    'km'              => $a->km,
                    'jumlah_duplikat' => $otherDuplicates->count(),  // hitung yang lain saja
                    'phash'           => $a->phash,
                    'filename'        => $a->filename,
                    'detail'          => $otherDuplicates->map(function ($w) {
                        return "{$w->nomor_mesin} / {$w->filename} / tgl_service: {$w->tanggal_claim} / km: {$w->km}";
                    })->toArray(),
                ];
            }
        }

        foreach ($duplikasi as $i => $item) {
            $cekKpbDigital = CekKpbDigital::updateOrCreate(
                [
                    'engine' => $data['no_engine'],
                    'service_id' => $data['service_ke'],
                    'file_name' => $this->fileName,
                ],
                [
                    'buy_date' => $formattedTglBeli,
                    'service_date' => $formattedTglService,
                    'km' => $data['km'],
                    'user_id' => $this->user_id,
                ]
            );
            $cekKpbDigital->notes()->updateOrCreate([
                'message' => "⚠️ Baris {$rowNum}: No Engine {$data['no_engine']} - {$data['service_ke']} - Foto Speedometer Duplicate.",
            ]);
        }
    }
}