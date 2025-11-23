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

class CekKpbImport implements ToCollection, WithMultipleSheets
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
    public function collection(Collection $rows)
    {
        $rowNum = 0;
        $headers = [];
        foreach ($rows as $key => $row) {
            $rowNum++;
            if($this->job_id !== null) {
                CekKpbProgress::updateOrCreate(
                    ['job_id' => $this->job_id],
                    ['file_name' => $this->fileName, 'progress' => $key, 'total' => count($rows)-1, 'status' => 'processing']
                );
                DB::commit();
            }
            // Baris pertama = header
            if ($rowNum === 1) {
                $headers = $row->toArray();
                continue;
            }
            $values = $row->toArray();
            // Pastikan jumlah kolom sama dengan header
            $data = array_combine($headers, $values);
            if(is_numeric($data['Service Ke-'])) {
                $tgl_beli = isset($data['Bulan Beli']) ? $data['Tgl Beli'].'/'.$data['Bulan Beli'].'/'.$data['Tahun Beli'] : $data['Tgl Beli'];
                $formattedTglBeli = $this->formatTanggalExcel($tgl_beli);
                $formattedTglService = $this->formatTanggalExcel($data['Tgl Service']);

                //Panggil fungsi cek KPB compare rekap
                $this->checkKpbCompareRekap($data, $rowNum, $formattedTglBeli, $formattedTglService);
                // Panggil fungsi cek duplikat engine dengan tgl beli berbeda
                $this->checkDuplicateEngine($data, $rowNum, $formattedTglBeli, $formattedTglService);
                // Panggil fungsi cek panjang nosin
                $this->checkEngineLength($data, $rowNum, $formattedTglBeli, $formattedTglService);
                // Panggil fungsi cek tgl beli sama dengan tgl service
                $this->checkBuyDateEqualsServiceDate($data, $rowNum, $formattedTglBeli, $formattedTglService);
                // Panggil fungsi cek tgl service yang melebihi batas maksimal
                $this->checkServiceDateExceedsMaxLimit($data, $rowNum, $formattedTglBeli, $formattedTglService);
                // Panggil fungsi cek km yang melebihi batas maksimal
                $this->checkKmExceedsMaxLimit($data, $rowNum, $formattedTglBeli, $formattedTglService);
            } else {
                // Log::info($data['Service Ke-'].' Bukan numeric');
            }
        }

        $this->log("✅ Total baris dibaca: {($rowNum-1)}");
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
        if(strlen($data['No Engine']) !== 12) {
            if ($this->context instanceof Command) {
                $this->log("⚠️ Baris {$rowNum}: No Engine {$data['No Engine']} - {$data['Service Ke-']} - No Engine ".strlen($data['No Engine'])." karakter.");
                return;
            } else {
                $cekKpb = CekKpb::updateOrCreate(
                    [
                        'engine' => $data['No Engine'],
                        'service_id' => $data['Service Ke-'],
                        'file_name' => $this->fileName,
                    ],
                    [
                        'buy_date' => $formattedTglBeli,
                        'service_date' => $formattedTglService,
                        'km' => $data['Km'],
                        'user_id' => $this->user_id,
                    ]
                );
                $cekKpb->notes()->create([
                    'message' => "⚠️ Baris {$rowNum}: No Engine {$data['No Engine']} - {$data['Service Ke-']} - No Engine ".strlen($data['No Engine'])." karakter.",
                ]);
            }
        }
    }

    /**
     * Untuk mengecek engine duplikat yang memiliki tanggal beli berbeda
     */
    protected function checkDuplicateEngine($data, $rowNum, $formattedTglBeli, $formattedTglService) {
        $engineKey = strtoupper(trim($data['No Engine']));
        $serviceId = (int) $data['Service Ke-'];
        $km = (int) $data['Km'];

        // ✅ Tambahan logika: cek duplikat engine & tanggal beli berbeda
        if (isset($this->duplicateEngines[$engineKey])) {
            $previousServices = $this->duplicateEngines[$engineKey];
            $previousIds = array_keys($previousServices);
            $maxPrevId = max($previousIds);

            $previous = $previousServices[$maxPrevId];
            $previousServiceId = $previous['service_id'];
            $previousTglBeli = $previous['tgl_beli'];
            $previousTglService = $previous['tgl_service'];
            $previousKm = $previous['km'];
            $previousRow = $previous['row'];

            // 🚨 Jika tanggal beli berbeda → warning
            if ($formattedTglBeli !== $previousTglBeli) {
                if ($this->context instanceof Command) {
                    $this->log("⚠️ Baris {$rowNum}: No Engine {$engineKey} - {$data['Service Ke-']} - Tgl Beli di Excel ($formattedTglBeli) berbeda dengan Tgl Beli sebelumnya di service ID {$previousServiceId} ({$previousTglBeli})");
                } else {
                    $cekKpb = CekKpb::updateOrCreate(
                        [
                            'engine' => $data['No Engine'],
                            'service_id' => $data['Service Ke-'],
                            'file_name' => $this->fileName,
                        ],
                        [
                            'buy_date' => $formattedTglBeli,
                            'service_date' => $formattedTglService,
                            'km' => $data['Km'],
                            'user_id' => $this->user_id,
                        ]
                    );

                    $cekKpb->notes()->create([
                        'message' => "⚠️ Baris {$rowNum}: No Engine {$engineKey} muncul lagi (baris {$previousRow}) dengan Tgl Beli berbeda. Excel: {$formattedTglBeli}, Sebelumnya: {$previousTglBeli}",
                    ]);
                }
            }

            // 🚨 Jika KM lebih kecil atau sama dari sebelumnya
            if ($km < $previousKm) {
                if ($this->context instanceof Command) {
                    $this->log("⚠️ Baris {$rowNum}: No Engine {$engineKey} - {$data['Service Ke-']} - KM Service di Excel ({$km}) lebih kecil atau sama dengan KM Service sebelumnya di baris {$previousRow} ({$previousKm})");
                } else {
                    $cekKpb = CekKpb::updateOrCreate(
                        [
                            'engine' => $data['No Engine'],
                            'service_id' => $data['Service Ke-'],
                            'file_name' => $this->fileName,
                        ],
                        [
                            'buy_date' => $formattedTglBeli,
                            'service_date' => $formattedTglService,
                            'km' => $data['Km'],
                            'user_id' => $this->user_id,
                        ]
                    );
                    $cekKpb->notes()->create([
                        'message' => "⚠️ Baris {$rowNum}: No Engine {$engineKey} - {$data['Service Ke-']} - KM Service di Excel ({$km}) lebih kecil atau sama dengan KM Service sebelumnya di service ID {$previousServiceId} ({$previousKm})",
                    ]);
                }
            }

            // 🚨 Jika tanggal service lebih kecil atau sama dari sebelumnya
            if ($formattedTglService <= $previousTglService) {
                if ($this->context instanceof Command) {
                    $this->log("⚠️ Baris {$rowNum}: No Engine {$engineKey} - {$data['Service Ke-']} - Tgl Service di Excel ({$formattedTglService}) lebih kecil atau sama dengan Tgl Service sebelumnya di service ID {$previousServiceId} ({$previousTglService})");
                } else {
                    $cekKpb = CekKpb::updateOrCreate(
                        [
                            'engine' => $data['No Engine'],
                            'service_id' => $data['Service Ke-'],
                            'file_name' => $this->fileName,
                        ],
                        [
                            'buy_date' => $formattedTglBeli,
                            'service_date' => $formattedTglService,
                            'km' => $data['Km'],
                            'user_id' => $this->user_id,
                        ]
                    );
                    $cekKpb->notes()->create([
                        'message' => "⚠️ Baris {$rowNum}: No Engine {$engineKey} - {$data['Service Ke-']} - Tgl Service di Excel ({$formattedTglService}) lebih kecil atau sama dengan Tgl Service sebelumnya di baris {$previousRow} ({$previousTglService})",
                    ]);
                }
            }
        }

        // simpan engine dan tanggal beli pertama kali ditemukan
        $this->duplicateEngines[$engineKey][$serviceId] = [
            'tgl_service' => $formattedTglService,
            'tgl_beli' => $formattedTglBeli,
            'service_id' => $serviceId,
            'km' => $km,
            'row' => $rowNum,
        ];

    }

    /**
     * Untuk mengecek tanggal beli yang sama dengan tanggal service
     */
    protected function checkBuyDateEqualsServiceDate($data, $rowNum, $formattedTglBeli, $formattedTglService) {
        if($data['Tgl Service'] === $formattedTglBeli) {
            if ($this->context instanceof Command) {
                $this->log("⚠️ Baris {$rowNum}: No Engine {$data['No Engine']} - {$data['Service Ke-']} - Tgl Service sama dengan Tgl Beli.");
            } else {
                $cekKpb = CekKpb::updateOrCreate(
                    [
                        'engine' => $data['No Engine'],
                        'service_id' => $data['Service Ke-'],
                        'file_name' => $this->fileName,
                    ],
                    [
                        'buy_date' => $formattedTglBeli,
                        'service_date' => $formattedTglService,
                        'km' => $data['Km'],
                        'user_id' => $this->user_id,
                    ]
                );
                $cekKpb->notes()->create([
                    'message' => "⚠️ Baris {$rowNum}: No Engine {$data['No Engine']} - {$data['Service Ke-']} - Tgl Service sama dengan Tgl Beli.",
                ]);
            }
        }
    }

    /**
     * Untuk mengecek KPB 2, 3, 4 untuk dicompare dengan database rekap
     */
    protected function checkKpbCompareRekap($data, $rowNum, $formattedTglBeli, $formattedTglService) {
        // if($data['Service Ke-'] > 1) {
            $rekap_kpbs = RekapKpb::where('engine', $data['No Engine'] ?? null)->orderBy('service_id', 'DESC')->first();

            // if($rekap_kpbs === null) {
            //     if ($this->context instanceof Command) {
            //         $this->log("⚠️ Bariss {$rowNum}: No Engine {$data['No Engine']} - {$formattedTglBeli} - {$data['Service Ke-']} - Data KPB sebelumnya tidak ditemukan di database.");
            //         return;
            //     } else {
            //         $cekKpb = CekKpb::updateOrCreate(
            //             [
            //                 'engine' => $data['No Engine'],
            //                 'service_id' => $data['Service Ke-'],
            //                 'file_name' => $this->fileName,
            //             ],
            //             [
            //                 'buy_date' => $formattedTglBeli,
            //                 'service_date' => $formattedTglService,
            //                 'km' => $data['Km'],
            //                 'user_id' => $this->user_id,
            //             ]
            //         );
            //         $cekKpb->notes()->create([
            //             'message' => "⚠️ Baris {$rowNum}: No Engine {$data['No Engine']} - {$formattedTglBeli} - {$data['Service Ke-']} - Data KPB sebelumnya tidak ditemukan di database.",
            //         ]);
            //     }
            // }

            if(isset($rekap_kpbs) && $rekap_kpbs->buy_date !== $formattedTglBeli) {
                if ($this->context instanceof Command) {
                    $this->log("⚠️ Baris {$rowNum}: No Engine {$data['No Engine']} - {$data['Service Ke-']} - Tgl Beli tidak sesuai (DB: {$rekap_kpbs->buy_date}, Excel: {$formattedTglBeli})");
                } else {
                    $cekKpb = CekKpb::updateOrCreate(
                        [
                            'engine' => $data['No Engine'],
                            'service_id' => $data['Service Ke-'],
                            'file_name' => $this->fileName,
                        ],
                        [
                            'buy_date' => $formattedTglBeli,
                            'service_date' => $formattedTglService,
                            'km' => $data['Km'],
                            'user_id' => $this->user_id,
                        ]
                    );
                    $cekKpb->notes()->create([
                        'message' => "⚠️ Baris {$rowNum}: No Engine {$data['No Engine']} - {$data['Service Ke-']} - Tgl Beli tidak sesuai (DB: {$rekap_kpbs->buy_date}, Excel: {$formattedTglBeli})",
                    ]);
                }
            }

            //ambil semua km dari rekap kpb berdasarkan no engine
            $getKmRekaps = RekapKpb::where('engine', $data['No Engine'] ?? null)
                ->select('km', 'service_id')
                ->get()
                ->toArray();
            //cek km excel jika lebih kecil dari list km yang ada diarray
            foreach($getKmRekaps as $key => $getKmRekap) {
                //Buat cek KM untuk service sekarang apakah KM lebih besar dari service setelahnya
                if($getKmRekap['service_id'] > $data['Service Ke-']) {
                    if($data['Km'] > $getKmRekap['km']) {
                        if($this->context instanceof Command) {
                            $this->log("⚠️ Baris {$rowNum}: No Engine {$data['No Engine']} - {$data['Service Ke-']} - KM Service di Excel ({$data['Km']}) lebih besar dari KM Service setelahnya di database ".$getKmRekap['km']." pada KPB ".$getKmRekap['service_id']);
                        } else {
                            $cekKpb = CekKpb::updateOrCreate(
                                [
                                    'engine' => $data['No Engine'],
                                    'service_id' => $data['Service Ke-'],
                                    'file_name' => $this->fileName,
                                ],
                                [
                                    'buy_date' => $formattedTglBeli,
                                    'service_date' => $formattedTglService,
                                    'km' => $data['Km'],
                                    'user_id' => $this->user_id,
                                ]
                            );
                            $cekKpb->notes()->create([
                                'message' => "⚠️ Baris {$rowNum}: No Engine {$data['No Engine']} - {$data['Service Ke-']} - KM Service di Excel ({$data['Km']}) lebih besar dari KM Service setelahnya di database ".$getKmRekap['km']." pada KPB ".$getKmRekap['service_id'],
                            ]);
                        }
                    }
                }
                //Buat cek KM untuk service sekarang apakah KM lebih kecil dari service sebelumnya
                else {
                    if($data['Km'] <= $getKmRekap['km'] && $data['Service Ke-'] > 1) {
                        if ($this->context instanceof Command) {
                            $this->log("⚠️ Baris {$rowNum}: No Engine {$data['No Engine']} - {$data['Service Ke-']} - KM Service di Excel ({$data['Km']}) lebih kecil atau sama dengan KM Service sebelumnya di database ".$getKmRekap['km']);
                        } else {
                            $cekKpb = CekKpb::updateOrCreate(
                                [
                                    'engine' => $data['No Engine'],
                                    'service_id' => $data['Service Ke-'],
                                    'file_name' => $this->fileName,
                                ],
                                [
                                    'buy_date' => $formattedTglBeli,
                                    'service_date' => $formattedTglService,
                                    'km' => $data['Km'],
                                    'user_id' => $this->user_id,
                                ]
                            );
                            $cekKpb->notes()->create([
                                'message' => "⚠️ Baris {$rowNum}: No Engine {$data['No Engine']} - {$data['Service Ke-']} - KM Service di Excel ({$data['Km']}) lebih kecil atau sama dengan KM Service sebelumnya di database ".$getKmRekap['km'],
                            ]);
                        }
                    }
                }
            }

            //ambil semua tanggal service dari rekap kpb berdasarkan no engine
            $getTglServiceRekaps = RekapKpb::where('engine', $data['No Engine'] ?? null)
                ->select('service_date', 'service_id')
                ->get()
                ->toArray();
            foreach($getTglServiceRekaps as $key => $getTglServiceRekap) {
                //Buat cek Tanggal service untuk service sekarang apakah Tanggal service lebih besar dari service setelahnya
                if($getTglServiceRekap['service_id'] > $data['Service Ke-']) {
                    if($formattedTglService > $getTglServiceRekap['service_date']) {
                        if($this->context instanceof Command) {
                            $this->log("⚠️ Baris {$rowNum}: No Engine {$data['No Engine']} - {$data['Service Ke-']} - Tgl Service di Excel ($formattedTglService) lebih besar dari Tgl Service setelahnya di database ".$this->formatTanggalExcel($getTglServiceRekap['service_date'])." pada KPB ".$getTglServiceRekap['service_id']);
                        } else {
                            $cekKpb = CekKpb::updateOrCreate(
                                [
                                    'engine' => $data['No Engine'],
                                    'service_id' => $data['Service Ke-'],
                                    'file_name' => $this->fileName,
                                ],
                                [
                                    'buy_date' => $formattedTglBeli,
                                    'service_date' => $formattedTglService,
                                    'km' => $data['Km'],
                                    'user_id' => $this->user_id,
                                ]
                            );
                            $cekKpb->notes()->create([
                                'message' => "⚠️ Baris {$rowNum}: No Engine {$data['No Engine']} - {$data['Service Ke-']} - Tgl Service di Excel (".$this->formatTanggalExcel($data['Tgl Service']).") lebih besar dari Tgl Service setelahnya di database ".$this->formatTanggalExcel($getTglServiceRekap['service_date'])." pada KPB ".$getTglServiceRekap['service_id'],
                            ]);
                        }
                    }
                }
                //Buat cek Tanggal service untuk service sekarang apakah Tanggal service lebih kecil dari service sebelumnya
                else {
                    if($formattedTglService <= $getTglServiceRekap['service_date'] && $data['Service Ke-'] > 1) {
                        if ($this->context instanceof Command) {
                            $this->log("⚠️ Baris {$rowNum}: No Engine {$data['No Engine']} - {$data['Service Ke-']} - Tgl Service di Excel ($formattedTglService) lebih kecil atau sama dengan Tgl Service sebelumnya di database ".$this->formatTanggalExcel($getTglServiceRekap['service_date']));
                        } else {
                            $cekKpb = CekKpb::updateOrCreate(
                                [
                                    'engine' => $data['No Engine'],
                                    'service_id' => $data['Service Ke-'],
                                    'file_name' => $this->fileName,
                                ],
                                [
                                    'buy_date' => $formattedTglBeli,
                                    'service_date' => $formattedTglService,
                                    'km' => $data['Km'],
                                    'user_id' => $this->user_id,
                                ]
                            );
                            $cekKpb->notes()->create([
                                'message' => "⚠️ Baris {$rowNum}: No Engine {$data['No Engine']} - {$data['Service Ke-']} - Tgl Service di Excel (".$this->formatTanggalExcel($data['Tgl Service']).") lebih kecil atau sama dengan Tgl Service sebelumnya di database ".$this->formatTanggalExcel($getTglServiceRekap['service_date']),
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
        $enginePrefix = substr($data['No Engine'], 0, 5);
        $kriteriaKpb = KpbKriteria::where('kode_nosin', $enginePrefix)->where('kpb_type', 'ilike', '%'.$data['Service Ke-'].'%')->first();
        $selisihObj = (new \DateTime($formattedTglBeli))->diff(new \DateTime($formattedTglService));
        $selisihHari = $selisihObj->days * ($selisihObj->invert ? -1 : 1);
        if($kriteriaKpb === null) {
            if($this->context instanceof Command) {
                $this->log("⚠️ Baris {$rowNum}: No Engine {$data['No Engine']} - {$data['Service Ke-']} - Kriteria KPB tidak ditemukan untuk pengecekan Tanggal Service maksimum.");
            } else {
                $cekKpb = CekKpb::updateOrCreate(
                    [
                        'engine' => $data['No Engine'],
                        'service_id' => $data['Service Ke-'],
                        'file_name' => $this->fileName,
                    ],
                    [
                        'buy_date' => $formattedTglBeli,
                        'service_date' => $formattedTglService,
                        'km' => $data['Km'],
                        'user_id' => $this->user_id,
                    ]
                );
                $cekKpb->notes()->create([
                    'message' => "⚠️ Baris {$rowNum}: No Engine {$data['No Engine']} - {$data['Service Ke-']} - Kriteria KPB tidak ditemukan untuk pengecekan Tanggal Service maksimum.",
                ]);
            }
        } else {
            if($selisihHari <= 0) {
                if ($this->context instanceof Command) {
                    $this->log("⚠️ Baris {$rowNum}: No Engine {$data['No Engine']} - {$data['Service Ke-']} - Tgl Service di Excel ({$formattedTglService}) lebih kecil atau sama dengan Tgl Beli ({$formattedTglBeli})");
                } else {
                    $cekKpb = CekKpb::updateOrCreate(
                        [
                            'engine' => $data['No Engine'],
                            'service_id' => $data['Service Ke-'],
                            'file_name' => $this->fileName,
                        ],
                        [
                            'buy_date' => $formattedTglBeli,
                            'service_date' => $formattedTglService,
                            'km' => $data['Km'],
                            'user_id' => $this->user_id,
                        ]
                    );
                    $cekKpb->notes()->create([
                        'message' => "⚠️ Baris {$rowNum}: No Engine {$data['No Engine']} - {$data['Service Ke-']} - Tgl Service di Excel ({$formattedTglService}) lebih kecil atau sama dengan Tgl Beli ({$formattedTglBeli})",
                    ]);
                }
            } else {
                if($selisihHari > $kriteriaKpb->hari_maksimum) {
                    if ($this->context instanceof Command) {
                        $this->log("⚠️ Baris {$rowNum}: No Engine {$data['No Engine']} - {$data['Service Ke-']} - Selisih Hari ($selisihHari hari) melebihi batas maksimum ({$kriteriaKpb->hari_maksimum} hari)");
                    } else {
                        $cekKpb = CekKpb::updateOrCreate(
                            [
                                'engine' => $data['No Engine'],
                                'service_id' => $data['Service Ke-'],
                                'file_name' => $this->fileName,
                            ],
                            [
                                'buy_date' => $formattedTglBeli,
                                'service_date' => $formattedTglService,
                                'km' => $data['Km'],
                                'user_id' => $this->user_id,
                            ]
                        );
                        $cekKpb->notes()->create([
                            'message' => "⚠️ Baris {$rowNum}: No Engine {$data['No Engine']} - {$data['Service Ke-']} - Selisih Hari ($selisihHari hari) melebihi batas maksimum ({$kriteriaKpb->hari_maksimum} hari)",
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
        $enginePrefix = substr($data['No Engine'], 0, 5);
        $kriteriaKpb = KpbKriteria::where('kode_nosin', $enginePrefix)->where('kpb_type', 'ilike', '%'.$data['Service Ke-'].'%')->first();
        if($kriteriaKpb === null) {
            if($this->context instanceof Command) {
                $this->log("⚠️ Baris {$rowNum}: No Engine {$data['No Engine']} - {$data['Service Ke-']} - Kriteria KPB tidak ditemukan untuk pengecekan KM maksimum.");
            } else {
                $cekKpb = CekKpb::updateOrCreate(
                    [
                        'engine' => $data['No Engine'],
                        'service_id' => $data['Service Ke-'],
                        'file_name' => $this->fileName,
                    ],
                    [
                        'buy_date' => $formattedTglBeli,
                        'service_date' => $formattedTglService,
                        'km' => $data['Km'],
                        'user_id' => $this->user_id,
                    ]
                );
                $cekKpb->notes()->create([
                    'message' => "⚠️ Baris {$rowNum}: No Engine {$data['No Engine']} - {$data['Service Ke-']} - Kriteria KPB tidak ditemukan untuk pengecekan KM maksimum.",
                ]);
            }
        } else {
            if($data['Km'] > $kriteriaKpb->km_maksimum) {
                if ($this->context instanceof Command) {
                    $this->log("⚠️ Baris {$rowNum}: No Engine {$data['No Engine']} - {$data['Service Ke-']} - KM Service di Excel ({$data['Km']}) melebihi batas maksimum ({$kriteriaKpb->km_maksimum} KM)");
                } else {
                    $cekKpb = CekKpb::updateOrCreate(
                        [
                            'engine' => $data['No Engine'],
                            'service_id' => $data['Service Ke-'],
                            'file_name' => $this->fileName,
                        ],
                        [
                            'buy_date' => $formattedTglBeli,
                            'service_date' => $formattedTglService,
                            'km' => $data['Km'],
                            'user_id' => $this->user_id,
                        ]
                    );
                    $cekKpb->notes()->create([
                        'message' => "⚠️ Baris {$rowNum}: No Engine {$data['No Engine']} - {$data['Service Ke-']} - KM Service di Excel ({$data['Km']}) melebihi batas maksimum ({$kriteriaKpb->km_maksimum} KM)",
                    ]);
                }
            } else if($data['Km'] <= 1) {
                if ($this->context instanceof Command) {
                    $this->log("⚠️ Baris {$rowNum}: No Engine {$data['No Engine']} - {$data['Service Ke-']} - KM Service di Excel ({$data['Km']}) tidak valid.");
                } else {
                    $cekKpb = CekKpb::updateOrCreate(
                        [
                            'engine' => $data['No Engine'],
                            'service_id' => $data['Service Ke-'],
                            'file_name' => $this->fileName,
                        ],
                        [
                            'buy_date' => $formattedTglBeli,
                            'service_date' => $formattedTglService,
                            'km' => $data['Km'],
                            'user_id' => $this->user_id,
                        ]
                    );
                    $cekKpb->notes()->create([
                        'message' => "⚠️ Baris {$rowNum}: No Engine {$data['No Engine']} - {$data['Service Ke-']} - KM Service di Excel ({$data['Km']}) tidak valid.",
                    ]);
                }
            }
        }
    }
}
