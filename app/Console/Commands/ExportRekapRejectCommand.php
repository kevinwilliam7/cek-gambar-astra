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

class ExportRekapRejectCommand extends Command
{
    protected $signature = 'export:rekap-reject-command {month} {year}';
    protected $description = 'Rekap data dari file .xls untuk fisik & digital';

    public function handle()
    {
        $month_file = $this->argument('month');
        $year_file  = $this->argument('year');

        $month_name = \Carbon\Carbon::createFromDate($year_file, $month_file, 1)->translatedFormat('F');
        $next_month_name = \Carbon\Carbon::createFromDate($year_file, $month_file, 1)->addMonth()->translatedFormat('F');

        // 2 storage path: fisik & digital
        $folderPathFisik   = storage_path("assets/cek_kpb/kpb_{$month_file}_{$year_file}/fisik");
        $folderPathDigital = storage_path("assets/cek_kpb/kpb_{$month_file}_{$year_file}/digital");

        // Baca file masing-masing folder
        $rowsFisik   = $this->readFolder($folderPathFisik, "Fisik");
        $rowsDigital = $this->readFolder($folderPathDigital, "Digital");

        // --- Export Excel baru ---
        $export = new Spreadsheet();

        // Sheet Data Klaim KPB Bulan ke {month}_{year}
        $sheetDataKlaim = $export->getActiveSheet();
        $sheetDataKlaim->setTitle("DATA KLAIM KPB {$month_name}");
        // Judul besar
        $judul = "REKAPAN KLAIM KPB BULAN {$month_name} {$year_file} (PROSES " . ($next_month_name) . " {$year_file})";
        $sheetDataKlaim->setCellValue('A1', $judul);
        $sheetDataKlaim->mergeCells('A1:J1');
        $sheetDataKlaim->getStyle('A1')->getFont()->setBold(true)->setSize(14);
        $sheetDataKlaim->getStyle('A1')->getAlignment()->setHorizontal(Alignment::HORIZONTAL_CENTER);
        // Header tabel di baris ke-2
        $headers = [
            'No.',
            'Nomor Surat',
            'Nama AHASS',
            'Kode AHASS',
            'Digital / Fisik',
            'Jumlah Claim',
            'Approved',
            'Reject MD to AHASS',
            'Reject AHM to MD',
            'Amount'
        ];
        $sheetDataKlaim->fromArray($headers, null, 'A2');

        // Sheet Fisik
        $sheetFisik = $export->createSheet();
        $sheetFisik->setTitle('DATA REJECT FISIK');
        $headers = ['No.', 'Nama AHASS','Nomor Surat','Kode AHASS','Engine','Service Ke','Tgl Beli','Tgl Service','KM','Ket'];
        $sheetFisik->fromArray($headers, null, 'A1');
        $sheetFisik->fromArray($rowsFisik, null, 'A2');

        // Sheet Digital
        $sheetDigital = $export->createSheet();
        $sheetDigital->setTitle('DATA REJECT DIGITAL');
        $sheetDigital->fromArray($headers, null, 'A1');
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

        // Auto-size kolom Sheet Data Klaim
        foreach (range('A', 'J') as $col) {
            $sheetDataKlaim->getColumnDimension($col)->setAutoSize(true);
        }

        // Apply ke range sheet Fisik (A1 sampai I{lastRow})
        $sheetFisik->getStyle("A1:J{$lastRowFisik}")->applyFromArray($styleArray);
        // Auto-size kolom Sheet Fisik
        foreach (range('A', 'I') as $col) {
            $sheetFisik->getColumnDimension($col)->setAutoSize(true);
        }

        // Apply ke range sheet Digital (A1 sampai I{lastRow})
        $sheetDigital->getStyle("A1:J{$lastRowDigital}")->applyFromArray($styleArray);
        // Auto-size kolom Sheet Digital
        foreach (range('A', 'I') as $col) {
            $sheetDigital->getColumnDimension($col)->setAutoSize(true);
        }
        // ===============================================


        // Simpan file
        $exportPath = storage_path("exports/rekap_reject_{$month_file}_{$year_file}.xlsx");
        File::ensureDirectoryExists(dirname($exportPath));

        $writer = new XlsxWriter($export);
        $writer->save($exportPath);

        return Command::SUCCESS;
    }

    /**
     * Baca semua file Excel dalam folder tertentu & return data baris
     */
    private function readFolder(string $folderPath, string $label = ''): array
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

                // Ambil nomor surat dari sheet 1
                $sheet1 = $spreadsheet->getSheet(0)->toArray();
                $nomorSurat = $sheet1[1][0] ?? null;
                $nomorSuratClean = $this->cleanValue($nomorSurat);

                // Ambil data dari sheet 2
                $sheet2 = $spreadsheet->getSheet(1)->toArray();
                $header = $sheet2[0];

                // mapping kolom
                $colMap = [];
                foreach ($header as $idx => $colName) {
                    $colName = strtolower(trim($colName));
                    if (in_array($colName, ['no engine','service ke-','tgl beli','bulan beli','tahun beli','tgl service','km','ket'])) {
                        $colMap[$colName] = $idx;
                    }
                }

                if (isset($colMap['ket'])) {
                    foreach ($sheet2 as $i => $row) {
                        if ($i === 0) continue;

                        $ket = $row[$colMap['ket']] ?? null;
                        if (!empty(trim($ket))) {
                            $rowsData[] = [
                                'No.' => $penomoranExcel+=1,
                                'nama_ahass'   => Ahass::where('kode_ahass', substr($nomorSuratClean, 0, 5))->first()->nama_ahass ?? 'Unknown',
                                'nomor_surat'  => $nomorSuratClean,
                                'kode_ahass'   => substr($nomorSuratClean, 0, 5),
                                'engine'       => $row[$colMap['no engine']] ?? null,
                                'service_ke'   => $row[$colMap['service ke-']] ?? null,
                                'tgl_beli'     => ($row[$colMap['tgl beli']] ?? null).'/'.($row[$colMap['bulan beli']] ?? null).'/'.($row[$colMap['tahun beli']] ?? null),
                                'tgl_service'  => $row[$colMap['tgl service']] ?? null,
                                'km'           => $row[$colMap['km']] ?? null,
                                'ket'          => $ket,
                            ];
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
     * Bersihkan nilai dari teks "REKAP KPB" + newline
     */
    private function cleanValue($val): ?string
    {
        if (empty($val)) return null;
        $val = preg_replace('/REKAP KPB\s*/i', '', $val);
        return trim($val);
    }
}
