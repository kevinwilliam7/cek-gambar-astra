<?php

namespace App\Imports;

use App\Models\CekKpbDigital;
use App\Models\CekKpbDigitalProgress;
use App\Models\KpbKriteria;
use App\Models\RekapKpb;
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

                    $this->checkKpbCompareRekap($data, $rowNum, $formattedTglBeli, $formattedTglService);
                    $this->checkDuplicateEngine($data, $rowNum, $formattedTglBeli, $formattedTglService);
                    $this->checkEngineLength($data, $rowNum, $formattedTglBeli, $formattedTglService);
                    $this->checkBuyDateEqualsServiceDate($data, $rowNum, $formattedTglBeli, $formattedTglService);
                    $this->checkServiceDateExceedsMaxLimit($data, $rowNum, $formattedTglBeli, $formattedTglService);
                    $this->checkKmExceedsMaxLimit($data, $rowNum, $formattedTglBeli, $formattedTglService);
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

    protected function checkEngineLength($data, $rowNum, $formattedTglBeli, $formattedTglService)
    {
        if (strlen($data['no_engine']) !== 12) {
            $message = "⚠️ Baris {$rowNum}: No Engine {$data['no_engine']} - {$data['service_ke']} - No Engine " . strlen($data['no_engine']) . " karakter.";
            if ($this->context instanceof Command) {
                $this->log($message);
                return;
            }
            $this->upsert(array_merge($data, ['_buy_date' => $formattedTglBeli, '_service_date' => $formattedTglService]), $message);
        }
    }

    protected function checkDuplicateEngine($data, $rowNum, $formattedTglBeli, $formattedTglService)
    {
        $engineKey = strtoupper(trim($data['no_engine']));
        $serviceId = (int) $data['service_ke'];
        $km        = (int) $data['km'];

        $this->duplicateEngines[$engineKey][$serviceId] = [
            'tgl_service' => $formattedTglService,
            'tgl_beli'    => $formattedTglBeli,
            'service_id'  => $serviceId,
            'km'          => $km,
            'row'         => $rowNum,
        ];

        $sorted = collect($this->duplicateEngines[$engineKey])->sortBy('service_id')->values();
        $prev   = null;

        foreach ($sorted as $curr) {
            if ($prev) {
                // 1️⃣ Tgl Beli berbeda
                if ($curr['tgl_beli'] !== $prev['tgl_beli']) {
                    $msg = "⚠️ Baris {$curr['row']}: No Engine {$engineKey} Tgl Beli berbeda dgn sebelumnya. Excel: {$curr['tgl_beli']}, Sebelumnya: {$prev['tgl_beli']}";
                    if ($this->context instanceof Command) { $this->log($msg); }
                    else { $this->upsert(array_merge(['no_engine' => $engineKey, 'service_ke' => $curr['service_id'], 'km' => $curr['km'], '_buy_date' => $curr['tgl_beli'], '_service_date' => $curr['tgl_service']]), $msg); }
                }
                // 2️⃣ KM turun
                if ($curr['km'] <= $prev['km']) {
                    $msg = "⚠️ Baris {$curr['row']}: No Engine {$engineKey} - KM {$curr['km']} lebih kecil atau sama dengan sebelumnya ({$prev['km']}) pada Service ID {$prev['service_id']}";
                    if ($this->context instanceof Command) { $this->log($msg); }
                    else { $this->upsert(array_merge(['no_engine' => $engineKey, 'service_ke' => $curr['service_id'], 'km' => $curr['km'], '_buy_date' => $curr['tgl_beli'], '_service_date' => $curr['tgl_service']]), $msg); }
                }
                // 3️⃣ Tgl Service mundur
                if ($curr['tgl_service'] <= $prev['tgl_service']) {
                    $msg = "⚠️ Baris {$curr['row']}: No Engine {$engineKey} - Tgl Service {$curr['tgl_service']} lebih kecil atau sama dengan sebelumnya ({$prev['tgl_service']}) pada Service ID {$prev['service_id']}";
                    if ($this->context instanceof Command) { $this->log($msg); }
                    else { $this->upsert(array_merge(['no_engine' => $engineKey, 'service_ke' => $curr['service_id'], 'km' => $curr['km'], '_buy_date' => $curr['tgl_beli'], '_service_date' => $curr['tgl_service']]), $msg); }
                }
                // 4️⃣ Duplikat Service ID
                if ($curr['service_id'] === $prev['service_id']) {
                    $msg = "⚠️ No Engine {$engineKey} memiliki duplikat Service ID {$curr['service_id']} (baris {$curr['row']} dan {$prev['row']})";
                    if ($this->context instanceof Command) { $this->log($msg); }
                    else { $this->upsert(array_merge(['no_engine' => $engineKey, 'service_ke' => $curr['service_id'], 'km' => $curr['km'], '_buy_date' => $curr['tgl_beli'], '_service_date' => $curr['tgl_service']]), $msg); }
                }
            }
            $prev = $curr;
        }
    }

    protected function checkBuyDateEqualsServiceDate($data, $rowNum, $formattedTglBeli, $formattedTglService)
    {
        if ($data['tgl_service'] === $formattedTglBeli) {
            $message = "⚠️ Baris {$rowNum}: No Engine {$data['no_engine']} - {$data['service_ke']} - Tgl Service sama dengan Tgl Beli.";
            if ($this->context instanceof Command) { $this->log($message); return; }
            $this->upsert(array_merge($data, ['_buy_date' => $formattedTglBeli, '_service_date' => $formattedTglService]), $message);
        }
    }

    protected function checkKpbCompareRekap($data, $rowNum, $formattedTglBeli, $formattedTglService)
    {
        $rekap_kpbs = $this->rekapKpbCache->get($data['no_engine'] ?? null)[0] ?? null;
        if ($rekap_kpbs === null && $data['service_ke'] > 1) {
            if ($this->context instanceof Command) {
                $this->log("⚠️ Baris {$rowNum}: No Engine {$data['no_engine']} - {$data['service_ke']} - Tidak ada data rekap KPB di database.");
            }
        }

        if (isset($rekap_kpbs) && $rekap_kpbs->buy_date !== $formattedTglBeli) {
            $message = "⚠️ Baris {$rowNum}: No Engine {$data['no_engine']} - {$data['service_ke']} - Tgl Beli tidak sesuai (DB: {$rekap_kpbs->buy_date}, Excel: {$formattedTglBeli})";
            if ($this->context instanceof Command) { $this->log($message); }
            else { $this->upsert(array_merge($data, ['_buy_date' => $formattedTglBeli, '_service_date' => $formattedTglService]), $message); }
        }

        foreach ($this->rekapKpbCache->get($data['no_engine'], collect())->toArray() as $rekapOnly) {
            if ($rekapOnly['service_id'] > $data['service_ke']) {
                if ($data['km'] > $rekapOnly['km']) {
                    $message = "⚠️ Baris {$rowNum}: No Engine {$data['no_engine']} - {$data['service_ke']} - KM Excel ({$data['km']}) lebih besar dari KM KPB setelahnya ({$rekapOnly['km']}) pada KPB {$rekapOnly['service_id']}";
                    if ($this->context instanceof Command) { $this->log($message); }
                    else { $this->upsert(array_merge($data, ['_buy_date' => $formattedTglBeli, '_service_date' => $formattedTglService]), $message); }
                }
                if ($formattedTglService > $rekapOnly['service_date']) {
                    $message = "⚠️ Baris {$rowNum}: No Engine {$data['no_engine']} - {$data['service_ke']} - Tgl Service Excel ({$formattedTglService}) lebih besar dari Tgl Service setelahnya ({$rekapOnly['service_date']}) pada KPB {$rekapOnly['service_id']}";
                    if ($this->context instanceof Command) { $this->log($message); }
                    else { $this->upsert(array_merge($data, ['_buy_date' => $formattedTglBeli, '_service_date' => $formattedTglService]), $message); }
                }
            } else {
                if ($data['km'] <= $rekapOnly['km'] && $data['service_ke'] > 1) {
                    $message = "⚠️ Baris {$rowNum}: No Engine {$data['no_engine']} - {$data['service_ke']} - KM Excel ({$data['km']}) lebih kecil atau sama dengan KM sebelumnya ({$rekapOnly['km']})";
                    if ($this->context instanceof Command) { $this->log($message); }
                    else { $this->upsert(array_merge($data, ['_buy_date' => $formattedTglBeli, '_service_date' => $formattedTglService]), $message); }
                }
                if ($formattedTglService <= $rekapOnly['service_date'] && $data['service_ke'] > 1) {
                    $message = "⚠️ Baris {$rowNum}: No Engine {$data['no_engine']} - {$data['service_ke']} - Tgl Service Excel ({$formattedTglService}) lebih kecil atau sama dengan Tgl Service sebelumnya ({$rekapOnly['service_date']})";
                    if ($this->context instanceof Command) { $this->log($message); }
                    else { $this->upsert(array_merge($data, ['_buy_date' => $formattedTglBeli, '_service_date' => $formattedTglService]), $message); }
                }
            }
        }
    }

    private function checkServiceDateExceedsMaxLimit($data, $rowNum, $formattedTglBeli, $formattedTglService)
    {
        $enginePrefix = substr($data['no_engine'], 0, 5);
        $kriteriaKpb  = $this->kpbKriteriaCache->get($enginePrefix . '|' . 'KPB ' . $data['service_ke']);
        $selisihObj   = (new \DateTime($formattedTglBeli))->diff(new \DateTime($formattedTglService));
        $selisihHari  = $selisihObj->days * ($selisihObj->invert ? -1 : 1) + 1;

        if ($kriteriaKpb === null) {
            $message = "⚠️ Baris {$rowNum}: No Engine {$data['no_engine']} - {$data['service_ke']} - Kriteria KPB tidak ditemukan untuk pengecekan Tanggal Service maksimum.";
            if ($this->context instanceof Command) { $this->log($message); }
            else { $this->upsert(array_merge($data, ['_buy_date' => $formattedTglBeli, '_service_date' => $formattedTglService]), $message); }
            return;
        }

        if ($selisihHari <= 0) {
            $message = "⚠️ Baris {$rowNum}: No Engine {$data['no_engine']} - {$data['service_ke']} - Tgl Service ({$formattedTglService}) lebih kecil atau sama dengan Tgl Beli ({$formattedTglBeli})";
            if ($this->context instanceof Command) { $this->log($message); }
            else { $this->upsert(array_merge($data, ['_buy_date' => $formattedTglBeli, '_service_date' => $formattedTglService]), $message); }
        } elseif ($selisihHari > $kriteriaKpb->hari_maksimum) {
            $message = "⚠️ Baris {$rowNum}: No Engine {$data['no_engine']} - {$data['service_ke']} - Selisih Hari ({$selisihHari} hari) melebihi batas maksimum ({$kriteriaKpb->hari_maksimum} hari)";
            if ($this->context instanceof Command) { $this->log($message); }
            else { $this->upsert(array_merge($data, ['_buy_date' => $formattedTglBeli, '_service_date' => $formattedTglService]), $message); }
        }
    }

    private function checkKmExceedsMaxLimit($data, $rowNum, $formattedTglBeli, $formattedTglService)
    {
        $enginePrefix = substr($data['no_engine'], 0, 5);
        $kriteriaKpb  = $this->kpbKriteriaCache->get($enginePrefix . '|' . 'KPB ' . $data['service_ke']);

        if ($kriteriaKpb === null) {
            $message = "⚠️ Baris {$rowNum}: No Engine {$data['no_engine']} - {$data['service_ke']} - Kriteria KPB tidak ditemukan untuk pengecekan KM maksimum.";
            if ($this->context instanceof Command) { $this->log($message); }
            else { $this->upsert(array_merge($data, ['_buy_date' => $formattedTglBeli, '_service_date' => $formattedTglService]), $message); }
            return;
        }

        if ($data['km'] > $kriteriaKpb->km_maksimum) {
            $message = "⚠️ Baris {$rowNum}: No Engine {$data['no_engine']} - {$data['service_ke']} - KM ({$data['km']}) melebihi batas maksimum ({$kriteriaKpb->km_maksimum} KM)";
            if ($this->context instanceof Command) { $this->log($message); }
            else { $this->upsert(array_merge($data, ['_buy_date' => $formattedTglBeli, '_service_date' => $formattedTglService]), $message); }
        } elseif ($data['km'] <= 1) {
            $message = "⚠️ Baris {$rowNum}: No Engine {$data['no_engine']} - {$data['service_ke']} - KM ({$data['km']}) tidak valid.";
            if ($this->context instanceof Command) { $this->log($message); }
            else { $this->upsert(array_merge($data, ['_buy_date' => $formattedTglBeli, '_service_date' => $formattedTglService]), $message); }
        }
    }
}