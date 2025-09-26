<?php

namespace App\Console\Commands;

use App\Models\Ahass;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;
use PhpOffice\PhpSpreadsheet\IOFactory;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx as XlsxWriter;
use PhpOffice\PhpSpreadsheet\Style\Border;
use PhpOffice\PhpSpreadsheet\Style\Alignment;

class ExportRekapRejectSoCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'export:rekap-reject-so-command {month} {year}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Rekap data dari file .xls untuk fisik & digital punya ce Meiliani / SO';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $month_file = $this->argument('month');
        $year_file  = $this->argument('year');

        // 2 storage path: fisik & digital
        $folderPathFisik   = storage_path("assets/cek_kpb/kpb_so_{$month_file}_{$year_file}/fisik");
        $folderPathDigital = storage_path("assets/cek_kpb/kpb_so_{$month_file}_{$year_file}/digital");

        // Baca file masing-masing folder
        $rowsFisik   = $this->readFolderFisik($folderPathFisik, "Fisik");
        $rowsDigital = $this->readFolderDigital($folderPathDigital, "Digital");

        // --- Export Excel baru ---
        $export = new Spreadsheet();

        // Sheet Fisik
        $sheetFisik = $export->getActiveSheet();
        $sheetFisik->setTitle('DATA REJECT FISIK');
        $headerFisik = ['No.', 'Nama AHASS','Nomor Surat','Engine','Service Ke','Tgl Beli','Tgl Service','KM','Ket'];
        $sheetFisik->fromArray($headerFisik, null, 'A1');
        $sheetFisik->fromArray($rowsFisik, null, 'A2');

        // Sheet Digital
        $sheetDigital = $export->createSheet();
        $sheetDigital->setTitle('DATA REJECT DIGITAL');
        $headerDigital = ['No.', 'Nama AHASS','Nomor Surat','Engine','Service Ke','Tgl Beli', 'Tgl Beli Star', 'Tgl Service', 'Tgl Service Star', 'KM', 'KM Star', 'Ket'];
        $sheetDigital->fromArray($headerDigital, null, 'A1');
        $sheetDigital->fromArray($rowsDigital, null, 'A2');

        // Hitung baris terakhir (jumlah data + header)
        $lastRowFisik   = count($rowsFisik) + 1;   // +1 header
        $lastRowDigital = count($rowsDigital) + 1; // +1 header

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
        $sheetFisik->getStyle("A1:J{$lastRowFisik}")->applyFromArray($styleArray);
        // Auto-size kolom Sheet Fisik
        foreach (range('A', 'I') as $col) {
            $sheetFisik->getColumnDimension($col)->setAutoSize(true);
        }

        // Apply ke range sheet Digital (A1 sampai I{lastRow})
        $sheetDigital->getStyle("A1:L{$lastRowDigital}")->applyFromArray($styleArray);
        // Auto-size kolom Sheet Digital
        foreach (range('A', 'L') as $col) {
            $sheetDigital->getColumnDimension($col)->setAutoSize(true);
        }
        // ===============================================


        // Simpan file
        $exportPath = storage_path("exports/rekap_reject_so_{$month_file}_{$year_file}.xlsx");
        File::ensureDirectoryExists(dirname($exportPath));

        $writer = new XlsxWriter($export);
        $writer->save($exportPath);

        return Command::SUCCESS;
    }

    /**
     * Baca semua file Excel Fisik dalam folder tertentu & return data baris
     */
    private function readFolderFisik(string $folderPath, string $label = ''): array
    {
        $rowsData = [];

        if (!File::exists($folderPath)) {
            $this->warn("Folder {$label} tidak ditemukan: {$folderPath}");
            return [];
        }

        $files = File::files($folderPath);
        $fileKe = 0;

        $penomoranExcel = 0;
        foreach ($files as $file) {
            try {
                $fileKe++;
                $reader = IOFactory::createReaderForFile($file->getRealPath());
                $spreadsheet = $reader->load($file->getRealPath());
                // Ambil jumlah sheet
                $jumlahSheet = $spreadsheet->getSheetCount();
                // Ambil nama file (tanpa path)
                $namaFile = basename($file->getRealPath());
                // Ambil list nama sheet
                $namaSheets = $spreadsheet->getSheetNames();
                foreach($namaSheets as $sheet){
                    // dd($sheet);
                    $sheet2 = $spreadsheet->getSheetByName($sheet)->toArray();
                    $header = $sheet2[0];

                    // mapping kolom
                    $colMap = [];
                    foreach ($header as $idx => $colName) {
                        $colName = strtolower(trim($colName));
                        if (in_array($colName, ['no engine','service ke-','tgl beli','bulan beli','tahun beli','tgl service','km',''])) {
                            $colMap[$colName] = $idx;
                        }

                        if (isset($colMap[''])) {
                            foreach ($sheet2 as $i => $row) {
                                if ($i === 0) continue;

                                $ket = $row[$colMap['']] ?? null;
                                if (!empty(trim($ket)) && !str_contains(strtolower($ket), 'revisi') && !str_contains(strtolower($ket), 'dispen')) {
                                    $rowsData[] = [
                                        'No.' => $penomoranExcel+=1,
                                        'nama_ahass'   => preg_replace('/\s\d{2}\.\d{2}\.\d{4}\.xlsx$/', '', ($namaFile ?? '-')),
                                        'nomor_surat'  => $sheet ?? '-',
                                        'engine'       => $row[$colMap['no engine']] ?? null,
                                        'service_ke'   => $row[$colMap['service ke-']] ?? null,
                                        'tgl_beli'     => $row[$colMap['tgl beli']] ?? null,
                                        'tgl_service'  => $row[$colMap['tgl service']] ?? null,
                                        'km'           => $row[$colMap['km']] ?? null,
                                        ''          => $ket,
                                    ];
                                }
                            }
                        }
                    }
                }

                $this->info("Berhasil baca file {$label} ke-{$fileKe}: " . $file->getFilename());

            } catch (\Throwable $e) {
                $this->error("Gagal baca file {$label} {$file->getFilename()}: " . $e->getMessage());
            }
        }

        return $rowsData;
    }

    /**
     * Baca semua file Excel Digital dalam folder tertentu & return data baris
     */
    private function readFolderDigital(string $folderPath, string $label = ''): array
    {
        $rowsData = [];

        if (!File::exists($folderPath)) {
            $this->warn("Folder {$label} tidak ditemukan: {$folderPath}");
            return [];
        }

        $files = File::files($folderPath);
        $fileKe = 0;

        $penomoranExcel = 0;
        foreach ($files as $file) {
            try {
                $fileKe++;
                $reader = IOFactory::createReaderForFile($file->getRealPath());
                $spreadsheet = $reader->load($file->getRealPath());
                // Ambil jumlah sheet
                $jumlahSheet = $spreadsheet->getSheetCount();
                // Ambil nama file (tanpa path)
                $namaFile = basename($file->getRealPath());
                // Ambil list nama sheet
                $namaSheets = $spreadsheet->getSheetNames();
                foreach($namaSheets as $sheet){
                    // dd($sheet);
                    $sheet2 = $spreadsheet->getSheetByName($sheet)->toArray();
                    $header = $sheet2[0];

                    // mapping kolom
                    $colMap = [];
                    foreach ($header as $idx => $colName) {
                        $colName = strtolower(trim($colName));
                        if (in_array($colName, ['no. surat klaim', 'no_mesin','kpb_type','tanggal_beli', 'tglb star', 'tanggal_claim', 'tgls star', 'km', 'km star', 'noted'])) {
                            $colMap[$colName] = $idx;
                        }
                        if (isset($colMap['noted'])) {
                            foreach ($sheet2 as $i => $row) {
                                if ($i === 0) continue;

                                $ket = $row[$colMap['noted']] ?? null;
                                $no_mesin = $row[$colMap['no_mesin']] ?? null;
                                if (!str_contains(strtolower($ket), 'ok')) {
                                    if (!empty(trim($no_mesin))) {
                                        $rowsData[] = [
                                            'No.' => $penomoranExcel+=1,
                                            'nama_ahass'   => preg_replace('/\s\d{2}\.\d{2}\.\d{4}\.xlsx$/', '', ($this->cleanValue($namaFile) ?? '-')),
                                            'nomor_surat' => isset($colMap['no. surat klaim']) ? ($row[$colMap['no. surat klaim']] ?? '-') : '-',
                                            'engine'       => $row[$colMap['no_mesin']] ?? null,
                                            'service_ke'   => $row[$colMap['kpb_type']] ?? null,
                                            'tgl_beli'     => $row[$colMap['tanggal_beli']] ?? null,
                                            'tglb_star'    => $row[$colMap['tglb star']] ?? null,
                                            'tgl_service'  => $row[$colMap['tanggal_claim']] ?? null,
                                            'tgls_star'    => $row[$colMap['tgls star']] ?? null,
                                            'km'           => $row[$colMap['km']] ?? null,
                                            'km_star'      => $row[$colMap['km star']] ?? null,
                                            'noted'        => $ket ?? null,
                                        ];
                                    }
                                }
                            }
                        }
                    }
                }

                $this->info("Berhasil baca file {$label} ke-{$fileKe}: " . $file->getFilename());

            } catch (\Throwable $e) {
                $this->error("Gagal baca file {$label} {$file->getFilename()}: " . $e->getMessage());
            }
        }

        return $rowsData;
    }

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
