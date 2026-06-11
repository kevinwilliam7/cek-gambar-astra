<?php

namespace App\Console\Commands;

use App\Models\Ahass;
use App\Models\KpbKriteria;
use Illuminate\Console\Command;
use Illuminate\Console\Attributes\Description;
use Illuminate\Console\Attributes\Signature;
use Illuminate\Support\Facades\File;
use PhpOffice\PhpSpreadsheet\IOFactory;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx as XlsxWriter;
use PhpOffice\PhpSpreadsheet\Style\Border;
use PhpOffice\PhpSpreadsheet\Style\Alignment;
use PhpOffice\PhpSpreadsheet\Style\NumberFormat;

#[Signature('export:report-kpb-so {month} {year}')]
#[Description('Rekap data dari file .xls untuk fisik & digital punya ce Meiliani / SO')]
class ExportReportKpbSo extends Command
{
    /**
     * Execute the console command.
     */
    public function handle()
    {
        $month_file = $this->argument('month');
        $year_file  = $this->argument('year');

        // 2 storage path: fisik & digital
        $folderPathFisik   = storage_path("assets/list_kpb/kpb_so_{$month_file}_{$year_file}/fisik");
        $folderPathDigital = storage_path("assets/list_kpb/kpb_so_{$month_file}_{$year_file}/digital");

        // Cache KPB Kriteria dulu biar gak bolak-balik query
        $kpbCache = KpbKriteria::all()->keyBy(fn($item) => $item->kode_nosin . '|' . $item->kpb_service_id);
        // Cache Ahass juga biar gak bolak-balik query
        $ahassCache = Ahass::all()->keyBy(fn($item) => $item->kode_ahass);

        // Baca file masing-masing folder
        $rowsFisik   = $this->readFolder($folderPathFisik, "Fisik", $kpbCache, $ahassCache);
        $rowsDigital = $this->readFolder($folderPathDigital, "Digital", $kpbCache, $ahassCache);

        // --- Export Excel baru ---
        $export = new Spreadsheet();

        // Sheet Fisik
        $sheetFisik = $export->getActiveSheet();
        $sheetFisik->setTitle('FISIK');
        $headerFisik = ['Nama SO', 'No Surat', 'Nosin', 'Servis ID', 'Status', 'Kode Nosin', 'Material', 'Jasa', 'Pokok'];
        $sheetFisik->fromArray($headerFisik, null, 'A1', true);
        $sheetFisik->fromArray($rowsFisik, null, 'A2', true);

        // Sheet Digital
        $sheetDigital = $export->createSheet();
        $sheetDigital->setTitle('DIGITAL');
        $headerDigital = ['Nama SO', 'No Surat', 'Nosin', 'Servis ID', 'Status', 'Kode Nosin', 'Material', 'Jasa', 'Pokok'];
        $sheetDigital->fromArray($headerDigital, null, 'A1', true);
        $sheetDigital->fromArray($rowsDigital, null, 'A2', true);

        // Hitung baris terakhir (jumlah data + header)
        $lastRowFisik   = count($rowsFisik) + 1;   // +1 header
        $lastRowDigital = count($rowsDigital) + 1; // +1 header

        // Hitung total kolom Material, Jasa, Pokok
        $totalRowFisik = $lastRowFisik + 1;
        $sheetFisik->setCellValue("G{$totalRowFisik}", "=SUM(G2:G{$lastRowFisik})");
        $sheetFisik->setCellValue("H{$totalRowFisik}", "=SUM(H2:H{$lastRowFisik})");
        $sheetFisik->setCellValue("I{$totalRowFisik}", "=SUM(I2:I{$lastRowFisik})");
        $totalRowDigital = $lastRowDigital + 1;
        $sheetDigital->setCellValue("G{$totalRowDigital}", "=SUM(G2:G{$lastRowDigital})");
        $sheetDigital->setCellValue("H{$totalRowDigital}", "=SUM(H2:H{$lastRowDigital})");
        $sheetDigital->setCellValue("I{$totalRowDigital}", "=SUM(I2:I{$lastRowDigital})");

        $styleArray = [
            'borders' => [
                'allBorders' => [
                    'borderStyle' => Border::BORDER_THIN,
                    'color' => ['argb' => '000000'],
                ],
            ],
            'alignment' => [
                'horizontal' => Alignment::HORIZONTAL_CENTER,
                'vertical'   => Alignment::VERTICAL_CENTER,
            ],
        ];

        // Apply ke range sheet Fisik (A1 sampai I{lastRow})
        $sheetFisik->getStyle("A1:I{$totalRowFisik}")->applyFromArray($styleArray);
        // Auto-size kolom Sheet Fisik
        foreach (range('A', 'D') as $col) {
            $sheetFisik->getColumnDimension($col)->setAutoSize(true);
        }
        foreach (range('F', 'I') as $col) {
            $sheetFisik->getColumnDimension($col)->setAutoSize(true);
        }
        $sheetFisik->getStyle("G2:I{$totalRowFisik}")
            ->getNumberFormat()
            ->setFormatCode('"Rp" #,##0_-');

        // Apply ke range sheet Digital (A1 sampai I{lastRow})
        $sheetDigital->getStyle("A1:I{$totalRowDigital}")->applyFromArray($styleArray);
        // Auto-size kolom Sheet Digital
        foreach (range('A', 'D') as $col) {
            $sheetDigital->getColumnDimension($col)->setAutoSize(true);
        }
        foreach (range('F', 'I') as $col) {
            $sheetDigital->getColumnDimension($col)->setAutoSize(true);
        }
        $sheetDigital->getStyle("G2:I{$totalRowDigital}")
            ->getNumberFormat()
            ->setFormatCode('"Rp" #,##0_-');
        // ===============================================


        // Simpan file
        $exportPath = storage_path("exports/report_kpb_so_{$month_file}_{$year_file}.xlsx");
        File::ensureDirectoryExists(dirname($exportPath));

        $writer = new XlsxWriter($export);
        $writer->save($exportPath);

        return Command::SUCCESS;
    }

    /**
     * Baca semua file Excel Fisik dalam folder tertentu & return data baris
     */
    private function readFolder(string $folderPath, string $label = '', $kpbCache, $ahassCache): array
    {
        $rowsData = [];

        if (!File::exists($folderPath)) {
            $this->warn("Folder {$label} tidak ditemukan: {$folderPath}");
            return [];
        }

        $files = File::files($folderPath);
        $fileKe = 0;

        foreach ($files as $file) {
            $start = microtime(true);
            try {
                $fileKe++;
                $reader = IOFactory::createReaderForFile($file->getRealPath());
                $reader->setReadDataOnly(true);              // skip formula & style
                $reader->setReadEmptyCells(false);           // skip cell kosong di ujung
                $spreadsheet = $reader->load($file->getRealPath());

                $namaFile = basename($file->getRealPath());
                $namaSheets = $spreadsheet->getSheetNames();

                foreach ($namaSheets as $sheet) {
                    $sheet2 = $spreadsheet->getSheetByName($sheet)->toArray();
                    $header = $sheet2[0];

                    // 1) MAP HEADER SEKALI SAJA
                    $colMap = [];
                    foreach ($header as $idx => $colName) {
                        $colName = strtolower(trim($colName));
                        if (in_array($colName, [
                            'no engine',
                            'service ke-',
                            'tgl beli',
                            'bulan beli',
                            'tahun beli',
                            'tgl service',
                            'km',
                            'ket',
                            'keterangan',
                            'nomor skpb',
                            'nomor surat',
                            'surat',
                            'no surat',
                        ])) {
                            $colMap[$colName] = $idx;
                        }
                    }

                    // Resolve 'ket' atau 'keterangan' → selalu pakai key 'ket'
                    $colMap['ket'] = $colMap['ket'] ?? $colMap['keterangan'] ?? null;

                    // CEK apakah semua kolom wajib ada
                    $requiredCols = ['service ke-', 'no engine', 'tgl beli', 'tgl service', 'km', 'ket'];
                    $missingCols  = array_filter($requiredCols, fn($col) => !isset($colMap[$col]));

                    if (!empty($missingCols)) {
                        $this->warn("Kolom wajib tidak lengkap pada file: {$namaFile}. Kolom missing: " . implode(', ', $missingCols));
                        continue;
                    }

                    // 2) PROSES ROW SEKALI SAJA (TIDAK DI DALAM LOOP HEADER)
                    foreach ($sheet2 as $i => $row) {
                        if ($i === 0) continue;

                        if (
                            empty($row[$colMap['service ke-']]) ||
                            empty($row[$colMap['no engine']])   ||
                            empty($row[$colMap['tgl beli']])    ||
                            empty($row[$colMap['tgl service']]) ||
                            empty($row[$colMap['km']])
                        ) {
                            continue;
                        }
                        $nosin = $row[$colMap['no engine']] ?? null;
                        $kode_nosin = substr($nosin, 0, 5);

                        $ket = isset($colMap['ket']) && isset($row[$colMap['ket']])
                            ? trim($row[$colMap['ket']])
                            : null;
                        if (!empty($ket)) {
                            if (str_contains(strtolower($ket), 'revisi')) {
                                $ket = 'Revisi';
                            } elseif (str_contains(strtolower($ket), 'dispen')) {
                                $ket = 'Dispensasi';
                            } else {
                                $ket = $ket;
                            }
                        } else {
                            $ket = '';
                        }

                        $svc = $row[$colMap['service ke-']];
                        $servisId = match ($svc) {
                            "1" => 'A',
                            "2" => 'B',
                            "3" => 'C',
                            "4" => 'D',
                            default => '',
                        };
                        $key = substr($nosin, 0, 5) . '|' . $servisId;
                        $kpb_kriteria = $kpbCache->get($key);
                        $material = $kpb_kriteria ? $kpb_kriteria->material : null;
                        $jasa     = $kpb_kriteria ? $kpb_kriteria->jasa : null;
                        $pokok   = $kpb_kriteria ? ($material + $jasa) : null;
                        $rowsData[] = [
                            'nama_so'     => $ahassCache->get(substr($sheet, 0, 5))->nama_ahass ?? 'Unknown',
                            'no_surat'    => isset($colMap['nomor skpb']) ? $row[$colMap['nomor skpb']] : (isset($colMap['nomor surat']) ? $row[$colMap['nomor surat']] : (isset($colMap['surat']) ? $row[$colMap['surat']] : (isset($colMap['no surat']) ? $row[$colMap['no surat']] : ($sheet ?? null)))),
                            'nosin'       => $nosin,
                            'service_ke'  => $servisId,
                            'status'      => $ket,
                            'kode_nosin'  => $kode_nosin . '-' . $servisId,
                            'material'    => $material ?? 0,
                            'jasa'        => $jasa ?? 0,
                            'pokok'       => $pokok ?? 0,
                        ];
                    }
                }

                $this->info("Berhasil baca file {$label} ke-{$fileKe}: " . $file->getFilename());
            } catch (\Throwable $e) {
                $this->error("Gagal baca file {$label} {$file->getFilename()}: " . $e->getMessage());
            }
            $this->info("Time taken: " . (microtime(true) - $start) . " sec");
        }

        return $rowsData;
    }

    // /**
    //  * Baca semua file Excel Digital dalam folder tertentu & return data baris
    //  */
    // private function readFolderDigital(string $folderPath, string $label = '', $kpbCache): array
    // {
    //     $rowsData = [];

    //     if (!File::exists($folderPath)) {
    //         $this->warn("Folder {$label} tidak ditemukan: {$folderPath}");
    //         return [];
    //     }

    //     $files = File::files($folderPath);
    //     $fileKe = 0;

    //     foreach ($files as $file) {
    //         $start = microtime(true);
    //         try {
    //             $fileKe++;
    //             $reader = IOFactory::createReaderForFile($file->getRealPath());
    //             $spreadsheet = $reader->load($file->getRealPath());

    //             $namaFile = basename($file->getRealPath());
    //             $namaSheets = $spreadsheet->getSheetNames();

    //             foreach ($namaSheets as $sheet) {
    //                 $sheet2 = $spreadsheet->getSheetByName($sheet)->toArray();
    //                 $header = $sheet2[0];

    //                 // 1) MAP HEADER SEKALI SAJA
    //                 $colMap = [];
    //                 foreach ($header as $idx => $colName) {
    //                     $colName = strtolower(trim($colName));
    //                     if (in_array($colName, [
    //                         'no. surat klaim',
    //                         'no_mesin',
    //                         'kpb_type',
    //                         'tglb star',
    //                         'tgls star',
    //                         'km star',
    //                         'noted'
    //                     ])) {
    //                         $colMap[$colName] = $idx;
    //                     }
    //                 }
    //                 // CEK apakah semua kolom wajib ada
    //                 if (
    //                     !isset($colMap['kpb_type']) ||
    //                     !isset($colMap['no_mesin']) ||
    //                     !isset($colMap['tglb star']) ||
    //                     !isset($colMap['tgls star']) ||
    //                     !isset($colMap['km star']) ||
    //                     !isset($colMap['noted']) ||
    //                     !isset($colMap['no. surat klaim'])
    //                 ) {
    //                     $this->warn("Kolom wajib tidak lengkap pada file: {$namaFile}");
    //                     continue; // skip sheet
    //                 }

    //                 // 2) PROSES ROW SEKALI SAJA (TIDAK DI DALAM LOOP HEADER)
    //                 foreach ($sheet2 as $i => $row) {
    //                     if ($i === 0) continue;

    //                     if (
    //                         empty($row[$colMap['kpb_type']]) ||
    //                         empty($row[$colMap['no_mesin']])   ||
    //                         empty($row[$colMap['tglb star']])    ||
    //                         empty($row[$colMap['tgls star']]) ||
    //                         empty($row[$colMap['km star']]) ||
    //                         empty($row[$colMap['no. surat klaim']])
    //                     ) {
    //                         continue;
    //                     }
    //                     $nosin = $row[$colMap['no_mesin']] ?? null;
    //                     $kode_nosin = substr($nosin, 0, 5);

    //                     $ket = isset($colMap['noted']) && isset($row[$colMap['noted']])
    //                         ? trim($row[$colMap['noted']])
    //                         : null;
    //                     if (!empty($ket)) {
    //                         if (str_contains(strtolower($ket), 'revisi')) {
    //                             $ket = 'Revisi';
    //                         } elseif (str_contains(strtolower($ket), 'dispen')) {
    //                             $ket = 'Dispensasi';
    //                         } else {
    //                             $ket = $ket;
    //                         }
    //                     } else {
    //                         $ket = 'Ok';
    //                     }

    //                     $svc = $row[$colMap['kpb_type']];
    //                     $servisId = match ($svc) {
    //                         "KPB1" => 'A',
    //                         "KPB2" => 'B',
    //                         "KPB3" => 'C',
    //                         "KPB4" => 'D',
    //                         "1" => 'A',
    //                         "2" => 'B',
    //                         "3" => 'C',
    //                         "4" => 'D',
    //                         default => '',
    //                     };
    //                     $key = substr($nosin, 0, 5) . '|' . $servisId;
    //                     $kpb_kriteria = $kpbCache->get($key);
    //                     $material = $kpb_kriteria ? $kpb_kriteria->material : null;
    //                     $jasa     = $kpb_kriteria ? $kpb_kriteria->jasa : null;
    //                     $pokok   = $kpb_kriteria ? ($material + $jasa) : null;
    //                     $rowsData[] = [
    //                         'nama_so'     => isset($colMap['no. surat klaim'])
    //                             ? (Ahass::where('kode_ahass', substr($row[$colMap['no. surat klaim']], 0, 5))->first()->nama_ahass ?? preg_replace('/\s\d{2}\.\d{2}\.\d{4}\.xlsx$/', '', $namaFile))
    //                             : preg_replace('/\s\d{2}\.\d{2}\.\d{4}\.xlsx$/', '', $namaFile),
    //                         'no_surat'    => $row[$colMap['no. surat klaim']] ?? null,
    //                         'nosin'       => $nosin,
    //                         'service_ke'  => $servisId,
    //                         'status'      => $ket,
    //                         'kode_nosin'  => $kode_nosin . '-' . $servisId,
    //                         'material'    => $material ?? 0,
    //                         'jasa'        => $jasa ?? 0,
    //                         'pokok'       => $pokok ?? 0,
    //                     ];
    //                 }
    //             }

    //             $this->info("Berhasil baca file {$label} ke-{$fileKe}: " . $file->getFilename());
    //         } catch (\Throwable $e) {
    //             $this->error("Gagal baca file {$label} {$file->getFilename()}: " . $e->getMessage());
    //         }
    //         $this->info("Time taken: " . (microtime(true) - $start) . " sec");
    //     }

    //     return $rowsData;
    // }


    /**
     * Bersihkan nilai dari teks nama file
     */
    private function cleanValue($val): ?string
    {
        if (empty($val)) {
            return null;
        }

        // Buang extension (.xlsx, .xls, dsb)
        $val = pathinfo($val, PATHINFO_FILENAME);

        // Hilangkan bulan + tahun di belakang
        $pattern = '/\s+(Jan(?:uari)?|Feb(?:ruari)?|Mar(?:et)?|Apr(?:il)?|Mei|Jun(?:i)?|Jul(?:i)?|Ags(?:t|tus)?|Sep(?:t|tember)?|Okt(?:ober)?|Nov(?:ember)?|Des(?:ember)?)\s+\d{4}$/i';
        $val = preg_replace($pattern, '', $val);

        // Hilangkan kata "Digital" di depan (case-insensitive)
        $val = str_ireplace("Digital", "", $val);

        // Rapikan spasi
        return trim($val);
    }
}
