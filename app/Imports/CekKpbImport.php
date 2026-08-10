<?php

namespace App\Imports;

use App\Models\CekKpb;
use App\Models\CekKpbProgress;
use App\Models\KpbKriteria;
use App\Models\RekapKpb;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\WithMultipleSheets;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Carbon\Carbon;

class CekKpbImport implements ToCollection, WithMultipleSheets, WithHeadingRow
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
        $this->context = $context;
        $this->fileName = $fileName;
        $this->job_id = $job_id;
        $this->user_id = $user_id;
        $this->kpbKriteriaCache = KpbKriteria::all()->keyBy(fn ($item) => $item->kode_nosin . '|' . $item->kpb_type);
        if ($this->job_id !== null) {
            CekKpbProgress::updateOrCreate(
                ['job_id' => $this->job_id],
                [
                    'file_name' => $this->fileName,
                    'progress' => 0,
                    'status' => 'processing',
                ]
            );
        }
    }

    /**
     * Tentukan sheet yang ingin dibaca.
     * Index dimulai dari 0 → 0 = sheet pertama, 1 = sheet kedua
     */
    public function sheets(): array
    {
        return [
            0 => $this, // langsung baca sheet kedua
        ];
    }

    /**
     * Proses data di sheet ke-2
     */
    public function collection(Collection $rows)
    {
        $noEngineArray = $rows->pluck('no_engine')->filter()->toArray();

        $this->rekapKpbCache = RekapKpb::select('engine', 'km', 'service_date', 'service_id', 'buy_date')
            ->whereIn('engine', $noEngineArray)
            ->orderBy('service_id', 'DESC')
            ->get()
            ->groupBy('engine');
        $rowNum = 0;

        // Chunking untuk menghindari out of shared memory
        $rows->chunk(500)->each(function($chunk) use (&$rowNum) {
            foreach ($chunk as $row) {
                $rowNum++;
                $data = $row->toArray();
                if(is_numeric($data['service_ke'])) {
                    $tgl_beli = isset($data['bulan_beli']) ? $data['tgl_beli'].'/'.$data['bulan_beli'].'/'.$data['tahun_beli'] : $data['tgl_beli'];
                    $formattedTglBeli = $this->formatTanggalExcel($tgl_beli);
                    $formattedTglService = $this->formatTanggalExcel($data['tgl_service']);

                    // Panggil semua check function
                    $this->checkKpbCompareRekap($data, $rowNum, $formattedTglBeli, $formattedTglService);
                    $this->checkDuplicateEngine($data, $rowNum, $formattedTglBeli, $formattedTglService);
                    $this->checkEngineLength($data, $rowNum, $formattedTglBeli, $formattedTglService);
                    $this->checkBuyDateEqualsServiceDate($data, $rowNum, $formattedTglBeli, $formattedTglService);
                    $this->checkServiceDateExceedsMaxLimit($data, $rowNum, $formattedTglBeli, $formattedTglService);
                    $this->checkKmExceedsMaxLimit($data, $rowNum, $formattedTglBeli, $formattedTglService);
                    $this->checkExpiredDate($data, $rowNum, $formattedTglBeli, $formattedTglService);
                }
            }
        });

        $this->log("✅ Total baris dibaca: " . $rowNum);
    }

    /**
     * Format tanggal dari Excel ke format Y-m-d
     * Mendukung format serial date Excel dan string tanggal umum
     */
    protected function formatTanggalExcel($value)
    {
        try {
            // Jika Excel menyimpan sebagai angka (serial date)
            if (is_numeric($value)) {
                $timestamp = \PhpOffice\PhpSpreadsheet\Shared\Date::excelToTimestamp($value);
                return date('Y-m-d', $timestamp);
            }

            // Jika string format d/m/Y atau d-m-Y
            $formats = ['d/m/Y', 'd-m-Y', 'm/d/Y', 'Y-m-d'];
            foreach ($formats as $fmt) {
                $dt = \DateTime::createFromFormat($fmt, trim($value));
                if ($dt !== false) {
                    return $dt->format('Y-m-d');
                }
            }

            // Jika sudah format benar, langsung kembalikan
            return date('Y-m-d', strtotime($value));
        } catch (\Exception $e) {
            return null; // jika error parsing
        }
    }

    /**
     * Logger yang aman untuk Command & Controller
     */
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

    //========================================================================================================================================

    /**
     * Untuk mengecek nosin yang lebih atau kurang dari 12 karakter
     */
    protected function checkEngineLength($data, $rowNum, $formattedTglBeli, $formattedTglService) {
        if(strlen($data['no_engine']) !== 12) {
            if ($this->context instanceof Command) {
                $this->log("⚠️ Baris {$rowNum}: No Engine {$data['no_engine']} - {$data['service_ke']} - No Engine ".strlen($data['no_engine'])." karakter.");
                return;
            } else {
                $cekKpb = CekKpb::updateOrCreate(
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
                $cekKpb->notes()->updateOrCreate([
                    'message' => "⚠️ Baris {$rowNum}: No Engine {$data['no_engine']} - {$data['service_ke']} - No Engine ".strlen($data['no_engine'])." karakter.",
                ]);
            }
        }
    }

    /**
     * Untuk mengecek engine duplikat yang memiliki tanggal beli berbeda
     */
    protected function checkDuplicateEngine($data, $rowNum, $formattedTglBeli, $formattedTglService)
    {
        $engineKey = strtoupper(trim($data['no_engine']));
        $serviceId = (int) $data['service_ke'];
        $km = (int) $data['km'];

        // Simpan data saat ini
        $this->duplicateEngines[$engineKey][$serviceId] = [
            'tgl_service' => $formattedTglService,
            'tgl_beli'    => $formattedTglBeli,
            'service_id'  => $serviceId,
            'km'          => $km,
            'row'         => $rowNum,
        ];

        // Ambil semua KPB untuk engine ini dan urutkan berdasarkan service_id
        $sorted = collect($this->duplicateEngines[$engineKey])
            ->sortBy('service_id') // pastikan KPB1 -> KPB2 -> KPB3
            ->values();

        $prev = null;
        foreach ($sorted as $curr) {
            if ($prev) {
                // ----------- 1️⃣ TGL BELI ----------
                if ($curr['tgl_beli'] !== $prev['tgl_beli']) {
                    $message = "⚠️ Baris {$curr['row']}: No Engine {$engineKey} Tgl Beli berbeda dgn sebelumnya. Excel: {$curr['tgl_beli']}, Sebelumnya: {$prev['tgl_beli']}";
                    if ($this->context instanceof Command) {
                        $this->log($message);
                    } else {
                        $cekKpb = CekKpb::updateOrCreate(
                            [
                                'engine' => $engineKey,
                                'service_id' => $curr['service_id'],
                                'file_name' => $this->fileName,
                            ],
                            [
                                'buy_date' => $curr['tgl_beli'],
                                'service_date' => $curr['tgl_service'],
                                'km' => $curr['km'],
                                'user_id' => $this->user_id,
                            ]
                        );
                        $cekKpb->notes()->updateOrCreate(['message' => $message]);
                    }
                }

                // ----------- 2️⃣ KM ----------
                if ($curr['km'] <= $prev['km']) {
                    $message = "⚠️ Baris {$curr['row']}: No Engine {$engineKey} - KM {$curr['km']} lebih kecil atau sama dengan sebelumnya ({$prev['km']}) pada Service ID {$prev['service_id']}";
                    if ($this->context instanceof Command) {
                        $this->log($message);
                    } else {
                        $cekKpb = CekKpb::updateOrCreate(
                            [
                                'engine' => $engineKey,
                                'service_id' => $curr['service_id'],
                                'file_name' => $this->fileName,
                            ],
                            [
                                'buy_date' => $curr['tgl_beli'],
                                'service_date' => $curr['tgl_service'],
                                'km' => $curr['km'],
                                'user_id' => $this->user_id,
                            ]
                        );
                        $cekKpb->notes()->updateOrCreate(['message' => $message]);
                    }
                }

                // ----------- 3️⃣ TGL SERVICE ----------
                if ($curr['tgl_service'] <= $prev['tgl_service']) {
                    $message = "⚠️ Baris {$curr['row']}: No Engine {$engineKey} - Tgl Service {$curr['tgl_service']} lebih kecil atau sama dengan sebelumnya ({$prev['tgl_service']}) pada Service ID {$prev['service_id']}";
                    if ($this->context instanceof Command) {
                        $this->log($message);
                    } else {
                        $cekKpb = CekKpb::updateOrCreate(
                            [
                                'engine' => $engineKey,
                                'service_id' => $curr['service_id'],
                                'file_name' => $this->fileName,
                            ],
                            [
                                'buy_date' => $curr['tgl_beli'],
                                'service_date' => $curr['tgl_service'],
                                'km' => $curr['km'],
                                'user_id' => $this->user_id,
                            ]
                        );
                        $cekKpb->notes()->updateOrCreate(['message' => $message]);
                    }
                }

                // ----------- 4️⃣ DUPLIKAT SERVICE ID ----------
                if ($curr['service_id'] === $prev['service_id']) {
                    $message = "⚠️ No Engine {$engineKey} memiliki duplikat Service ID {$curr['service_id']} (baris {$curr['row']} dan {$prev['row']})";
                    if ($this->context instanceof Command) {
                        $this->log($message);
                    } else {
                        $cekKpb = CekKpb::updateOrCreate(
                            [
                                'engine' => $engineKey,
                                'service_id' => $curr['service_id'],
                                'file_name' => $this->fileName,
                            ],
                            [
                                'buy_date' => $curr['tgl_beli'],
                                'service_date' => $curr['tgl_service'],
                                'km' => $curr['km'],
                                'user_id' => $this->user_id,
                            ]
                        );
                        $cekKpb->notes()->updateOrCreate(['message' => $message]);
                    }
                }
            }

            $prev = $curr; // set current sebagai previous untuk iterasi selanjutnya
        }
    }

    /**
     * Untuk mengecek tanggal beli yang sama dengan tanggal service
     */
    protected function checkBuyDateEqualsServiceDate($data, $rowNum, $formattedTglBeli, $formattedTglService) {
        if($data['tgl_service'] === $formattedTglBeli) {
            if ($this->context instanceof Command) {
                $this->log("⚠️ Baris {$rowNum}: No Engine {$data['no_engine']} - {$data['service_ke']} - Tgl Service sama dengan Tgl Beli.");
            } else {
                $cekKpb = CekKpb::updateOrCreate(
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
                $cekKpb->notes()->updateOrCreate([
                    'message' => "⚠️ Baris {$rowNum}: No Engine {$data['no_engine']} - {$data['service_ke']} - Tgl Service sama dengan Tgl Beli.",
                ]);
            }
        }
    }

    /**
     * Untuk mengecek KPB 2, 3, 4 untuk dicompare dengan database rekap
     */
    protected function checkKpbCompareRekap($data, $rowNum, $formattedTglBeli, $formattedTglService) {
        $rekap_kpbs = $this->rekapKpbCache->get($data['no_engine'] ?? null)[0] ?? null;
        if($rekap_kpbs === null && $data['service_ke'] > 1) {
            if ($this->context instanceof Command) {
                $this->log("⚠️ Baris {$rowNum}: No Engine {$data['no_engine']} - {$data['service_ke']} - Tgl Beli Excel {$formattedTglBeli} - Tidak ada data rekap KPB di database.");
            }
        }

        if(isset($rekap_kpbs) && $rekap_kpbs->buy_date !== $formattedTglBeli) {
            if ($this->context instanceof Command) {
                $this->log("⚠️ Baris {$rowNum}: No Engine {$data['no_engine']} - {$data['service_ke']} - Tgl Beli tidak sesuai (DB: {$rekap_kpbs->buy_date}, Excel: {$formattedTglBeli})");
            } else {
                $cekKpb = CekKpb::updateOrCreate(
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

                $enginePrefix = substr($data['no_engine'], 0, 5);
                $kriteriaKpb = $this->kpbKriteriaCache->get($enginePrefix . '|' . 'KPB '.$data['service_ke']);
                $selisihObj = (new \DateTime($rekap_kpbs->buy_date))->diff(new \DateTime($formattedTglService));
                $selisihHari = $selisihObj->days * ($selisihObj->invert ? -1 : 1);
                $selisihHari = $selisihHari + 1; // Tambahkan 1 hari untuk menghitung inklusif
                if($selisihHari > $kriteriaKpb->hari_maksimum) {
                    $cekKpb->notes()->updateOrCreate([
                        'message' => "⚠️ Baris {$rowNum}: No Engine {$data['no_engine']} - {$data['service_ke']} - Tgl Beli tidak sesuai (DB: {$rekap_kpbs->buy_date}, Excel: {$formattedTglBeli})
                        *Jika menggunakan tgl beli {$rekap_kpbs->buy_date} maka Selisih Hari ($selisihHari hari) melebihi batas maksimum ({$kriteriaKpb->hari_maksimum} hari)",
                    ]);
                } else {
                    $cekKpb->notes()->updateOrCreate([
                        'message' => "⚠️ Baris {$rowNum}: No Engine {$data['no_engine']} - {$data['service_ke']} - Tgl Beli tidak sesuai (DB: {$rekap_kpbs->buy_date}, Excel: {$formattedTglBeli})",
                    ]);
                }
            }
        }

        //cek km excel jika lebih kecil dari list km yang ada diarray
        foreach ($this->rekapKpbCache->get($data['no_engine'], collect())->toArray() as $rekapOnly) {
            //Buat cek KM untuk service sekarang apakah KM lebih besar dari service setelahnya
            if($rekapOnly['service_id'] > $data['service_ke']) {
                if($data['km'] > $rekapOnly['km']) {
                    if($this->context instanceof Command) {
                        $this->log("⚠️ Baris {$rowNum}: No Engine {$data['no_engine']} - {$data['service_ke']} - KM Service di Excel ({$data['km']}) lebih besar dari KM Service setelahnya di database ".$rekapOnly['km']." pada KPB ".$rekapOnly['service_id']);
                    } else {
                        $cekKpb = CekKpb::updateOrCreate(
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
                        $cekKpb->notes()->updateOrCreate([
                            'message' => "⚠️ Baris {$rowNum}: No Engine {$data['no_engine']} - {$data['service_ke']} - KM Service di Excel ({$data['km']}) lebih besar dari KM Service setelahnya di database ".$rekapOnly['km']." pada KPB ".$rekapOnly['service_id'],
                        ]);
                    }
                }
            }
            //Buat cek KM untuk service sekarang apakah KM lebih kecil dari service sebelumnya
            else {
                if($data['km'] <= $rekapOnly['km'] && $data['service_ke'] > 1) {
                    if ($this->context instanceof Command) {
                        $this->log("⚠️ Baris {$rowNum}: No Engine {$data['no_engine']} - {$data['service_ke']} - KM Service di Excel ({$data['km']}) lebih kecil atau sama dengan KM Service sebelumnya di database ".$rekapOnly['km']);
                    } else {
                        $cekKpb = CekKpb::updateOrCreate(
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
                        $cekKpb->notes()->updateOrCreate([
                            'message' => "⚠️ Baris {$rowNum}: No Engine {$data['no_engine']} - {$data['service_ke']} - KM Service di Excel ({$data['km']}) lebih kecil atau sama dengan KM Service sebelumnya di database ".$rekapOnly['km'],
                        ]);
                    }
                }
            }

            //Buat cek Tanggal service untuk service sekarang apakah Tanggal service lebih besar dari service setelahnya
            if($rekapOnly['service_id'] > $data['service_ke']) {
                if($formattedTglService > $rekapOnly['service_date']) {
                    if($this->context instanceof Command) {
                        $this->log("⚠️ Baris {$rowNum}: No Engine {$data['no_engine']} - {$data['service_ke']} - Tgl Service di Excel ($formattedTglService) lebih besar dari Tgl Service setelahnya di database ".$this->formatTanggalExcel($rekapOnly['service_date'])." pada KPB ".$rekapOnly['service_id']);
                    } else {
                        $cekKpb = CekKpb::updateOrCreate(
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
                        $cekKpb->notes()->updateOrCreate([
                            'message' => "⚠️ Baris {$rowNum}: No Engine {$data['no_engine']} - {$data['service_ke']} - Tgl Service di Excel (".$this->formatTanggalExcel($data['tgl_service']).") lebih besar dari Tgl Service setelahnya di database ".$this->formatTanggalExcel($rekapOnly['service_date'])." pada KPB ".$rekapOnly['service_id'],
                        ]);
                    }
                }
            }
            //Buat cek Tanggal service untuk service sekarang apakah Tanggal service lebih kecil dari service sebelumnya
            else {
                if($formattedTglService <= $rekapOnly['service_date'] && $data['service_ke'] > 1) {
                    if ($this->context instanceof Command) {
                        $this->log("⚠️ Baris {$rowNum}: No Engine {$data['no_engine']} - {$data['service_ke']} - Tgl Service di Excel ($formattedTglService) lebih kecil atau sama dengan Tgl Service sebelumnya di database ".$this->formatTanggalExcel($rekapOnly['service_date']));
                    } else {
                        $cekKpb = CekKpb::updateOrCreate(
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
                        $cekKpb->notes()->updateOrCreate([
                            'message' => "⚠️ Baris {$rowNum}: No Engine {$data['no_engine']} - {$data['service_ke']} - Tgl Service di Excel (".$this->formatTanggalExcel($data['tgl_service']).") lebih kecil atau sama dengan Tgl Service sebelumnya di database ".$this->formatTanggalExcel($rekapOnly['service_date']),
                        ]);
                    }
                }
            }
        }
    }

    /**
     * Untuk mengecek tanggal service yang melebihi batas maksimal
     */
    private function checkServiceDateExceedsMaxLimit($data, $rowNum, $formattedTglBeli, $formattedTglService){
        $enginePrefix = substr($data['no_engine'], 0, 5);
        $kriteriaKpb = $this->kpbKriteriaCache->get($enginePrefix . '|' . 'KPB '.$data['service_ke']);
        $selisihObj = (new \DateTime($formattedTglBeli))->diff(new \DateTime($formattedTglService));
        $selisihHari = $selisihObj->days * ($selisihObj->invert ? -1 : 1);
        $selisihHari = $selisihHari + 1; // Tambahkan 1 hari untuk menghitung inklusif
        if($kriteriaKpb === null) {
            if($this->context instanceof Command) {
                $this->log("⚠️ Baris {$rowNum}: No Engine {$data['no_engine']} - {$data['service_ke']} - Kriteria KPB tidak ditemukan untuk pengecekan Tanggal Service maksimum.");
            } else {
                $cekKpb = CekKpb::updateOrCreate(
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
                $cekKpb->notes()->updateOrCreate([
                    'message' => "⚠️ Baris {$rowNum}: No Engine {$data['no_engine']} - {$data['service_ke']} - Kriteria KPB tidak ditemukan untuk pengecekan Tanggal Service maksimum.",
                ]);
            }
        } else {
            if($selisihHari <= 0) {
                if ($this->context instanceof Command) {
                    $this->log("⚠️ Baris {$rowNum}: No Engine {$data['no_engine']} - {$data['service_ke']} - Tgl Service di Excel ({$formattedTglService}) lebih kecil atau sama dengan Tgl Beli ({$formattedTglBeli})");
                } else {
                    $cekKpb = CekKpb::updateOrCreate(
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
                    $cekKpb->notes()->updateOrCreate([
                        'message' => "⚠️ Baris {$rowNum}: No Engine {$data['no_engine']} - {$data['service_ke']} - Tgl Service di Excel ({$formattedTglService}) lebih kecil atau sama dengan Tgl Beli ({$formattedTglBeli})",
                    ]);
                }
            } else {
                if($selisihHari > $kriteriaKpb->hari_maksimum) {
                    if ($this->context instanceof Command) {
                        $this->log("⚠️ Baris {$rowNum}: No Engine {$data['no_engine']} - {$data['service_ke']} - Selisih Hari ($selisihHari hari) melebihi batas maksimum ({$kriteriaKpb->hari_maksimum} hari)");
                    } else {
                        $cekKpb = CekKpb::updateOrCreate(
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
                        $cekKpb->notes()->updateOrCreate([
                            'message' => "⚠️ Baris {$rowNum}: No Engine {$data['no_engine']} - {$data['service_ke']} - Selisih Hari ($selisihHari hari) melebihi batas maksimum ({$kriteriaKpb->hari_maksimum} hari)",
                        ]);
                    }
                }
            }
        }
    }

    /**
     * Untuk mengecek km yang melebihi batas maksimal
     */
    private function checkKmExceedsMaxLimit($data, $rowNum, $formattedTglBeli, $formattedTglService){
        $enginePrefix = substr($data['no_engine'], 0, 5);
        $kriteriaKpb = $this->kpbKriteriaCache->get($enginePrefix . '|' . 'KPB '.$data['service_ke']);
        if($kriteriaKpb === null) {
            if($this->context instanceof Command) {
                $this->log("⚠️ Baris {$rowNum}: No Engine {$data['no_engine']} - {$data['service_ke']} - Kriteria KPB tidak ditemukan untuk pengecekan KM maksimum.");
            } else {
                $cekKpb = CekKpb::updateOrCreate(
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
                $cekKpb->notes()->updateOrCreate([
                    'message' => "⚠️ Baris {$rowNum}: No Engine {$data['no_engine']} - {$data['service_ke']} - Kriteria KPB tidak ditemukan untuk pengecekan KM maksimum.",
                ]);
            }
        } else {
            if($data['km'] > $kriteriaKpb->km_maksimum) {
                if ($this->context instanceof Command) {
                    $this->log("⚠️ Baris {$rowNum}: No Engine {$data['no_engine']} - {$data['service_ke']} - KM Service di Excel ({$data['km']}) melebihi batas maksimum ({$kriteriaKpb->km_maksimum} KM)");
                } else {
                    $cekKpb = CekKpb::updateOrCreate(
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
                    $cekKpb->notes()->updateOrCreate([
                        'message' => "⚠️ Baris {$rowNum}: No Engine {$data['no_engine']} - {$data['service_ke']} - KM Service di Excel ({$data['km']}) melebihi batas maksimum ({$kriteriaKpb->km_maksimum} KM)",
                    ]);
                }
            } else if($data['km'] <= 1) {
                if ($this->context instanceof Command) {
                    $this->log("⚠️ Baris {$rowNum}: No Engine {$data['no_engine']} - {$data['service_ke']} - KM Service di Excel ({$data['km']}) tidak valid.");
                } else {
                    $cekKpb = CekKpb::updateOrCreate(
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
                    $cekKpb->notes()->updateOrCreate([
                        'message' => "⚠️ Baris {$rowNum}: No Engine {$data['no_engine']} - {$data['service_ke']} - KM Service di Excel ({$data['km']}) tidak valid.",
                    ]);
                }
            }
        }
    }

    /**
     * Untuk mengecek KPB yang sudah melewati tanggal penagihan / expired
     */
    private function checkExpiredDate($data, $rowNum, $formattedTglBeli, $formattedTglService)
    {
        $enginePrefix = substr($data['no_engine'], 0, 5);
        $kriteriaKpb  = $this->kpbKriteriaCache->get($enginePrefix . '|' . 'KPB ' . $data['service_ke']);

        // Cek null DULU, sebelum mengakses properti $kriteriaKpb
        if ($kriteriaKpb === null) {
            if ($this->context instanceof Command) {
                $this->log("⚠️ Baris {$rowNum}: No Engine {$data['no_engine']} - {$data['service_ke']} - Kriteria KPB tidak ditemukan untuk pengecekan tanggal penagihan melebihi batas waktu / expired.");
            } else {
                $cekKpb = CekKpb::updateOrCreate(
                    [
                        'engine'     => $data['no_engine'],
                        'service_id' => $data['service_ke'],
                        'file_name'  => $this->fileName,
                    ],
                    [
                        'buy_date'     => $formattedTglBeli,
                        'service_date' => $formattedTglService,
                        'km'           => $data['km'],
                        'user_id'      => $this->user_id,
                    ]
                );
                $cekKpb->notes()->updateOrCreate([
                    'message' => "⚠️ Baris {$rowNum}: No Engine {$data['no_engine']} - {$data['service_ke']} - Kriteria KPB tidak ditemukan untuk pengecekan tanggal penagihan melebihi batas waktu / expired.",
                ]);
            }

            return;
        }

        // hari_maksimum di DB sudah ditambah buffer 15 hari saat disimpan -> kurangi dulu
        $hariMaksimumAsli = $kriteriaKpb->hari_maksimum - 15;
        $bulanMaksimumAsli = ($hariMaksimumAsli / 30);

        // Buffer tetap (4 bulan + bulan maks dari kriteria_kpbs) yang selalu ditambahkan ke semua KPB
        $tanggalExp = Carbon::now()
            ->subMonthsNoOverflow(4+$bulanMaksimumAsli);

        if (Carbon::parse($formattedTglBeli)->format('Y-m') <= $tanggalExp->format('Y-m')) {
            if ($this->context instanceof Command) {
                $this->log("⚠️ Baris {$rowNum}: No Engine {$data['no_engine']} - {$data['service_ke']} - KPB sudah mencapai batas akhir penagihan periode {$tanggalExp->format('M')} tahun {$tanggalExp->format('Y')} (KPB EXPIRED).");
            } else {
                $cekKpb = CekKpb::updateOrCreate(
                    [
                        'engine'     => $data['no_engine'],
                        'service_id' => $data['service_ke'],
                        'file_name'  => $this->fileName,
                    ],
                    [
                        'buy_date'     => $formattedTglBeli,
                        'service_date' => $formattedTglService,
                        'km'           => $data['km'],
                        'user_id'      => $this->user_id,
                    ]
                );
                $cekKpb->notes()->updateOrCreate([
                    'message' => "⚠️ Baris {$rowNum}: No Engine {$data['no_engine']} - {$data['service_ke']} - KPB sudah mencapai batas akhir penagihan periode {$tanggalExp->format('M')} tahun {$tanggalExp->format('Y')} (KPB EXPIRED).",
                ]);
            }
        }
    }
}
