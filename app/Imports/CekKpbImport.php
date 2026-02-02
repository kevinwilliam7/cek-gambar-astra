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
use Maatwebsite\Excel\Concerns\OnEachRow;
use Maatwebsite\Excel\Concerns\WithChunkReading;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Imports\HeadingRowFormatter;
use Maatwebsite\Excel\Row;

class CekKpbImport implements OnEachRow, WithHeadingRow, WithChunkReading, WithMultipleSheets
{
    protected $context;
    protected $fileName;
    protected $job_id;
    protected $user_id;
    protected $duplicateEngines = [];
    protected $messages = [];

    public function __construct($context = null, $fileName = null, $job_id = null, $user_id = null)
    {
        $this->context = $context;
        $this->fileName = $fileName;
        $this->job_id = $job_id;
        $this->user_id = $user_id;
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
    public function onRow(Row $row)
    {
        $rowNum = $row->getIndex(); // nomor baris Excel
        $data = $row->toArray();

        if($this->job_id !== null) {
            CekKpbProgress::updateOrCreate(
                ['job_id' => $this->job_id],
                [
                    'file_name' => $this->fileName,
                    'progress' => $rowNum,
                    'status' => 'processing'
                ]
            );
        }

        // Pastikan Service Ke- numeric
        if(!isset($data['service_ke']) || !is_numeric($data['service_ke'])) {
            return;
        }

        // Format tanggal
        $tglBeli = $data['bulan_beli'] ?? null ? ($data['tgl_beli'].'/'.$data['bulan_beli'].'/'.$data['tahun_beli']) : $data['tgl_beli'];
        $formattedTglBeli = $this->formatTanggalExcel($tglBeli);
        $formattedTglService = $this->formatTanggalExcel($data['tgl_service']);

        // Panggil fungsi pengecekan
        $this->checkKpbCompareRekap($data, $rowNum, $formattedTglBeli, $formattedTglService);
        $this->checkDuplicateEngine($data, $rowNum, $formattedTglBeli, $formattedTglService);
        $this->checkEngineLength($data, $rowNum, $formattedTglBeli, $formattedTglService);
        $this->checkBuyDateEqualsServiceDate($data, $rowNum, $formattedTglBeli, $formattedTglService);
        $this->checkServiceDateExceedsMaxLimit($data, $rowNum, $formattedTglBeli, $formattedTglService);
        $this->checkKmExceedsMaxLimit($data, $rowNum, $formattedTglBeli, $formattedTglService);
    }

    public function chunkSize(): int
    {
        return 25; // misal proses 25 baris per batch
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
        // if($data['service_ke'] > 1) {
            $rekap_kpbs = RekapKpb::where('engine', $data['no_engine'] ?? null)->orderBy('service_id', 'DESC')->first();

            // if($rekap_kpbs === null) {
            //     if ($this->context instanceof Command) {
            //         $this->log("⚠️ Bariss {$rowNum}: No Engine {$data['no_engine']} - {$formattedTglBeli} - {$data['service_ke']} - Data KPB sebelumnya tidak ditemukan di database.");
            //         return;
            //     } else {
            //         $cekKpb = CekKpb::updateOrCreate(
            //             [
            //                 'engine' => $data['no_engine'],
            //                 'service_id' => $data['service_ke'],
            //                 'file_name' => $this->fileName,
            //             ],
            //             [
            //                 'buy_date' => $formattedTglBeli,
            //                 'service_date' => $formattedTglService,
            //                 'km' => $data['km'],
            //                 'user_id' => $this->user_id,
            //             ]
            //         );
            //         $cekKpb->notes()->updateOrCreate([
            //             'message' => "⚠️ Baris {$rowNum}: No Engine {$data['no_engine']} - {$formattedTglBeli} - {$data['service_ke']} - Data KPB sebelumnya tidak ditemukan di database.",
            //         ]);
            //     }
            // }

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
                    $cekKpb->notes()->updateOrCreate([
                        'message' => "⚠️ Baris {$rowNum}: No Engine {$data['no_engine']} - {$data['service_ke']} - Tgl Beli tidak sesuai (DB: {$rekap_kpbs->buy_date}, Excel: {$formattedTglBeli})",
                    ]);
                }
            }

            //ambil semua km dari rekap kpb berdasarkan no engine
            $getKmRekaps = RekapKpb::where('engine', $data['no_engine'] ?? null)
                ->select('km', 'service_id')
                ->get()
                ->toArray();
            //cek km excel jika lebih kecil dari list km yang ada diarray
            foreach($getKmRekaps as $key => $getKmRekap) {
                //Buat cek KM untuk service sekarang apakah KM lebih besar dari service setelahnya
                if($getKmRekap['service_id'] > $data['service_ke']) {
                    if($data['km'] > $getKmRekap['km']) {
                        if($this->context instanceof Command) {
                            $this->log("⚠️ Baris {$rowNum}: No Engine {$data['no_engine']} - {$data['service_ke']} - KM Service di Excel ({$data['km']}) lebih besar dari KM Service setelahnya di database ".$getKmRekap['km']." pada KPB ".$getKmRekap['service_id']);
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
                                'message' => "⚠️ Baris {$rowNum}: No Engine {$data['no_engine']} - {$data['service_ke']} - KM Service di Excel ({$data['km']}) lebih besar dari KM Service setelahnya di database ".$getKmRekap['km']." pada KPB ".$getKmRekap['service_id'],
                            ]);
                        }
                    }
                }
                //Buat cek KM untuk service sekarang apakah KM lebih kecil dari service sebelumnya
                else {
                    if($data['km'] <= $getKmRekap['km'] && $data['service_ke'] > 1) {
                        if ($this->context instanceof Command) {
                            $this->log("⚠️ Baris {$rowNum}: No Engine {$data['no_engine']} - {$data['service_ke']} - KM Service di Excel ({$data['km']}) lebih kecil atau sama dengan KM Service sebelumnya di database ".$getKmRekap['km']);
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
                                'message' => "⚠️ Baris {$rowNum}: No Engine {$data['no_engine']} - {$data['service_ke']} - KM Service di Excel ({$data['km']}) lebih kecil atau sama dengan KM Service sebelumnya di database ".$getKmRekap['km'],
                            ]);
                        }
                    }
                }
            }

            //ambil semua tanggal service dari rekap kpb berdasarkan no engine
            $getTglServiceRekaps = RekapKpb::where('engine', $data['no_engine'] ?? null)
                ->select('service_date', 'service_id')
                ->get()
                ->toArray();
            foreach($getTglServiceRekaps as $key => $getTglServiceRekap) {
                //Buat cek Tanggal service untuk service sekarang apakah Tanggal service lebih besar dari service setelahnya
                if($getTglServiceRekap['service_id'] > $data['service_ke']) {
                    if($formattedTglService > $getTglServiceRekap['service_date']) {
                        if($this->context instanceof Command) {
                            $this->log("⚠️ Baris {$rowNum}: No Engine {$data['no_engine']} - {$data['service_ke']} - Tgl Service di Excel ($formattedTglService) lebih besar dari Tgl Service setelahnya di database ".$this->formatTanggalExcel($getTglServiceRekap['service_date'])." pada KPB ".$getTglServiceRekap['service_id']);
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
                                'message' => "⚠️ Baris {$rowNum}: No Engine {$data['no_engine']} - {$data['service_ke']} - Tgl Service di Excel (".$this->formatTanggalExcel($data['tgl_service']).") lebih besar dari Tgl Service setelahnya di database ".$this->formatTanggalExcel($getTglServiceRekap['service_date'])." pada KPB ".$getTglServiceRekap['service_id'],
                            ]);
                        }
                    }
                }
                //Buat cek Tanggal service untuk service sekarang apakah Tanggal service lebih kecil dari service sebelumnya
                else {
                    if($formattedTglService <= $getTglServiceRekap['service_date'] && $data['service_ke'] > 1) {
                        if ($this->context instanceof Command) {
                            $this->log("⚠️ Baris {$rowNum}: No Engine {$data['no_engine']} - {$data['service_ke']} - Tgl Service di Excel ($formattedTglService) lebih kecil atau sama dengan Tgl Service sebelumnya di database ".$this->formatTanggalExcel($getTglServiceRekap['service_date']));
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
                                'message' => "⚠️ Baris {$rowNum}: No Engine {$data['no_engine']} - {$data['service_ke']} - Tgl Service di Excel (".$this->formatTanggalExcel($data['tgl_service']).") lebih kecil atau sama dengan Tgl Service sebelumnya di database ".$this->formatTanggalExcel($getTglServiceRekap['service_date']),
                            ]);
                        }
                    }
                }
            }
        // }
    }

    /**
     * Untuk mengecek tanggal service yang melebihi batas maksimal
     */
    private function checkServiceDateExceedsMaxLimit($data, $rowNum, $formattedTglBeli, $formattedTglService){
        $enginePrefix = substr($data['no_engine'], 0, 5);
        $kriteriaKpb = KpbKriteria::where('kode_nosin', $enginePrefix)->where('kpb_type', 'ilike', '%'.$data['service_ke'].'%')->first();
        $selisihObj = (new \DateTime($formattedTglBeli))->diff(new \DateTime($formattedTglService));
        $selisihHari = $selisihObj->days * ($selisihObj->invert ? -1 : 1);
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
        $kriteriaKpb = KpbKriteria::where('kode_nosin', $enginePrefix)->where('kpb_type', 'ilike', '%'.$data['service_ke'].'%')->first();
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
}
