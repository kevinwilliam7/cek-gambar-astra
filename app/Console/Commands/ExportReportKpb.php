<?php

namespace App\Console\Commands;

use App\Models\Ahass;
use App\Models\KpbKriteria;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;
use PhpOffice\PhpSpreadsheet\IOFactory;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx as XlsxWriter;
use PhpOffice\PhpSpreadsheet\Style\Border;
use PhpOffice\PhpSpreadsheet\Style\Alignment;

class ExportReportKpb extends Command
{
    protected $list_data = [];
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'export:report-kpb {month} {year}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Rekap data dari file .xls untuk fisik & digital';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $month_file = $this->argument('month');
        $year_file  = $this->argument('year');

        $month_name = \Carbon\Carbon::createFromDate($year_file, $month_file, 1)->translatedFormat('F');
        $next_month_name = \Carbon\Carbon::createFromDate($year_file, $month_file, 1)->addMonth()->translatedFormat('F');

        // 2 storage path: fisik & digital
        $folderPathFisik   = storage_path("assets/list_kpb/kpb_{$month_file}_{$year_file}/fisik");
        $folderPathDigital = storage_path("assets/list_kpb/kpb_{$month_file}_{$year_file}/digital");

        // Baca file masing-masing folder
        $rowsFisikApproved   = $this->readFolder($folderPathFisik, "Fisik", "Approved");
        $rowsDigitalApproved = $this->readFolder($folderPathDigital, "Digital", "Approved");
        $rowsFisikRejected   = $this->readFolder($folderPathFisik, "Fisik", "Rejected");
        $rowsDigitalRejected = $this->readFolder($folderPathDigital, "Digital", "Rejected");

        // --- Export Excel baru ---
        $export = new Spreadsheet();

        // Sheet Data Klaim KPB Bulan ke {month}_{year}
        $sheetDataKlaim = $export->getActiveSheet();
        $sheetDataKlaim->mergeCells('I1:L1'); // kolom I sampai L untuk Reject MD to AHASS
        $sheetDataKlaim->setCellValue('I1', 'Reject MD to AHASS');
        $sheetDataKlaim->getStyle('I1')->getFont()->setBold(true);
        $sheetDataKlaim->getStyle('I1')->getAlignment()->setHorizontal(Alignment::HORIZONTAL_CENTER);
        $sheetDataKlaim->setTitle("DATA KLAIM KPB {$month_name}");
        // $sheetDataKlaim->getStyle('A1')->getFont()->setBold(true)->setSize(14);
        $sheetDataKlaim->getStyle('A1')->getAlignment()->setHorizontal(Alignment::HORIZONTAL_CENTER);
        // $data_klaim_headers = [
        //     'No.',
        //     'Nama AHASS',
        //     'Kode AHASS',
        //     'Fisik',
        //     'Amount',
        //     'Digital',
        //     'Amount',
        //     'Jumlah Claim',
        //     'Fisik Reject',
        //     'Amount Reject',
        //     'Digital Reject',
        //     'Amount Reject',
        //     'Total Fisik',
        //     'Total Amount',
        //     'Total Digital',
        //     'Total Amount',
        // ];
        $mainHeaders = ['No.', 'Nama AHASS', 'Kode AHASS', 'Fisik', 'Amount', 'Digital', 'Amount', 'Jumlah Claim'];
        $col = 'A';
        foreach ($mainHeaders as $header) {
            $sheetDataKlaim->mergeCells($col . '1:' . $col . '2'); // merge baris 1-2
            $sheetDataKlaim->setCellValue($col . '1', $header);
            $sheetDataKlaim->getStyle($col . '1')->getFont()->setBold(true);
            $sheetDataKlaim->getStyle($col . '1')->getAlignment()->setHorizontal(Alignment::HORIZONTAL_CENTER);
            $col++;
        }

        // 2. Reject MD to AHASS (4 sub-header)
        $rejectHeaders = ['Fisik Reject', 'Amount Reject', 'Digital Reject', 'Amount Reject'];
        $startColReject = $col;
        $endColReject = chr(ord($startColReject) + count($rejectHeaders) - 1);

        // Merge baris 1 untuk main header "Reject MD to AHASS"
        $sheetDataKlaim->mergeCells("{$startColReject}1:{$endColReject}1");
        $sheetDataKlaim->setCellValue($startColReject . '1', 'Reject MD to AHASS');
        $sheetDataKlaim->getStyle($startColReject . '1')->getFont()->setBold(true);
        $sheetDataKlaim->getStyle($startColReject . '1')->getAlignment()->setHorizontal(Alignment::HORIZONTAL_CENTER);

        // Sub-header reject di baris 2
        $col = $startColReject;
        foreach ($rejectHeaders as $header) {
            $sheetDataKlaim->setCellValue($col . '2', $header);
            $sheetDataKlaim->getStyle($col . '2')->getFont()->setBold(true);
            $sheetDataKlaim->getStyle($col . '2')->getAlignment()->setHorizontal(Alignment::HORIZONTAL_CENTER);
            $col++;
        }

        // 3. Kolom total di kanan (setelah reject)
        $totalHeaders = ['Total Fisik', 'Total Amount', 'Total Digital', 'Total Amount'];
        foreach ($totalHeaders as $header) {
            $sheetDataKlaim->mergeCells($col . '1:' . $col . '2'); // merge vertikal
            $sheetDataKlaim->setCellValue($col . '1', $header);
            $sheetDataKlaim->getStyle($col . '1')->getFont()->setBold(true);
            $sheetDataKlaim->getStyle($col . '1')->getAlignment()->setHorizontal(Alignment::HORIZONTAL_CENTER);
            $col++;
        }

        $headers = ['No.', 'Nama AHASS', 'Nomor Surat', 'Kode AHASS', 'Engine', 'Kode Nosin', 'Material', 'Jasa', 'Pokok', 'Service Ke', 'Tgl Beli', 'Tgl Service', 'KM', 'Ket'];
        // Sheet Fisik Approved
        $sheetFisikApproved = $export->createSheet();
        $sheetFisikApproved->setTitle('DATA APPROVED FISIK');
        $sheetFisikApproved->fromArray($headers, null, 'A1');
        $sheetFisikApproved->fromArray($rowsFisikApproved, null, 'A2');

        // Sheet Digital Approved
        $sheetDigitalApproved = $export->createSheet();
        $sheetDigitalApproved->setTitle('DATA APPROVED DIGITAL');
        $sheetDigitalApproved->fromArray($headers, null, 'A1');
        $sheetDigitalApproved->fromArray($rowsDigitalApproved, null, 'A2');

        // Sheet Fisik Rejected
        $sheetFisikRejected = $export->createSheet();
        $sheetFisikRejected->setTitle('DATA REJECTED FISIK');
        $sheetFisikRejected->fromArray($headers, null, 'A1');
        $sheetFisikRejected->fromArray($rowsFisikRejected, null, 'A2');

        // Sheet Digital Rejected
        $sheetDigitalRejected = $export->createSheet();
        $sheetDigitalRejected->setTitle('DATA REJECTED DIGITAL');
        $sheetDigitalRejected->fromArray($headers, null, 'A1');
        $sheetDigitalRejected->fromArray($rowsDigitalRejected, null, 'A2');

        //Sheet Lanjutan Data Klaim
        $dataKlaim = $this->buildDataKlaim(
            $rowsFisikApproved,
            $rowsDigitalApproved,
            $rowsFisikRejected,
            $rowsDigitalRejected
        );
        $lastRowDataKlaim       = count($dataKlaim) + 3;           // +2 header + 1 grand total
        $dataKlaimForExcel = array_map('array_values', $dataKlaim);
        $grandTotal = [
            'no' => '',
            'nama_ahass' => 'GRAND TOTAL',
            'kode_ahass' => '',

            // Ganti value dengan rumus Excel
            'jumlah_fisik'  => '=SUM(D3:D' . $lastRowDataKlaim . ')',
            'amount_fisik'  => '=SUM(E3:E' . $lastRowDataKlaim . ')',

            'jumlah_digital' => '=SUM(F3:F' . $lastRowDataKlaim . ')',
            'amount_digital' => '=SUM(G3:G' . $lastRowDataKlaim . ')',
            'jumlah_claim' => '=SUM(H3:H' . $lastRowDataKlaim . ')',

            'fisik_reject' => '=SUM(I3:I' . $lastRowDataKlaim . ')',
            'amount_fisik_reject' => '=SUM(J3:J' . $lastRowDataKlaim . ')',

            'digital_reject' => '=SUM(K3:K' . $lastRowDataKlaim . ')',
            'amount_digital_reject' => '=SUM(L3:L' . $lastRowDataKlaim . ')',

            'jumlah_fisik_total'  => '=SUM(M3:M' . $lastRowDataKlaim . ')',
            'amount_fisik_total'  => '=SUM(N3:N' . $lastRowDataKlaim . ')',
            'jumlah_digital_total' => '=SUM(O3:O' . $lastRowDataKlaim . ')',
            'amount_digital_total' => '=SUM(P3:P' . $lastRowDataKlaim . ')',
        ];
        // Tambahkan grand total di akhir data
        $dataKlaimForExcel[] = $grandTotal;
        $sheetDataKlaim->fromArray($mainHeaders, null, 'A1');
        $sheetDataKlaim->fromArray($dataKlaimForExcel, null, 'A3', true);

        // Hitung baris terakhir (jumlah data + header)
        $lastRowFisikApproved   = count($rowsFisikApproved) + 1;   // +1 header
        $lastRowDigitalApproved = count($rowsDigitalApproved) + 1; // +1 header
        $lastRowFisikRejected   = count($rowsFisikRejected) + 1;   // +1 header
        $lastRowDigitalRejected = count($rowsDigitalRejected) + 1; // +1 header
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

        // Apply ke range sheet Fisik Approved (A1 sampai I{lastRow})
        $sheetDataKlaim->getStyle("A1:P{$lastRowDataKlaim}")->applyFromArray($styleArray);
        $sheetDataKlaim->getStyle("B{$lastRowDataKlaim}:P{$lastRowDataKlaim}")->getFont()->setBold(true);
        // Auto-size kolom Sheet Data Klaim
        foreach (range('A', 'P') as $col) {
            $sheetDataKlaim->getColumnDimension($col)->setAutoSize(true);
        }
        foreach (['E', 'G', 'H', 'J', 'L', 'N', 'P'] as $col) {
            $sheetDataKlaim->getStyle("{$col}2:{$col}{$lastRowDataKlaim}")
                ->getNumberFormat()
                ->setFormatCode('"Rp" #,##0_-');
        }

        // Apply ke range sheet Fisik Approved (A1 sampai I{lastRow})
        $sheetFisikApproved->getStyle("A1:N{$lastRowFisikApproved}")->applyFromArray($styleArray);
        // Auto-size kolom Sheet Fisik Approved
        foreach (range('A', 'M') as $col) {
            $sheetFisikApproved->getColumnDimension($col)->setAutoSize(true);
        }

        // Apply ke range sheet Digital Approved (A1 sampai I{lastRow})
        $sheetDigitalApproved->getStyle("A1:N{$lastRowDigitalApproved}")->applyFromArray($styleArray);
        // Auto-size kolom Sheet Digital Approved
        foreach (range('A', 'M') as $col) {
            $sheetDigitalApproved->getColumnDimension($col)->setAutoSize(true);
        }

        // Apply ke range sheet Fisik Rejected (A1 sampai I{lastRow})
        $sheetFisikRejected->getStyle("A1:N{$lastRowFisikRejected}")->applyFromArray($styleArray);
        // Auto-size kolom Sheet Fisik Rejected
        foreach (range('A', 'M') as $col) {
            $sheetFisikRejected->getColumnDimension($col)->setAutoSize(true);
        }

        // Apply ke range sheet Digital Rejected (A1 sampai I{lastRow})
        $sheetDigitalRejected->getStyle("A1:N{$lastRowDigitalRejected}")->applyFromArray($styleArray);
        // Auto-size kolom Sheet Digital Rejected
        foreach (range('A', 'M') as $col) {
            $sheetDigitalRejected->getColumnDimension($col)->setAutoSize(true);
        }
        // ===============================================

        // Simpan file
        $exportPath = storage_path("exports/report_kpb_{$month_file}_{$year_file}.xlsx");
        File::ensureDirectoryExists(dirname($exportPath));

        $writer = new XlsxWriter($export);
        $writer->save($exportPath);

        return Command::SUCCESS;
    }

    /**
     * Baca semua file Excel dalam folder tertentu & return data baris
     */
    private function readFolder(string $folderPath, string $label = '', string $status = ''): array
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
                    if (in_array($colName, ['no engine', 'service ke-', 'tgl beli', 'bulan beli', 'tahun beli', 'tgl service', 'km', 'ket'])) {
                        $colMap[$colName] = $idx;
                    }
                }

                if (isset($colMap['ket'])) {
                    foreach ($sheet2 as $i => $row) {
                        if ($i === 0) continue;

                        $ket = $row[$colMap['ket']] ?? null;
                        //Untuk Approved Fisik & Digital
                        if (!empty(trim($row[$colMap['no engine']] ?? null)) && empty(trim($ket)) && strtolower($status) === 'approved') {
                            $kode_mesin = substr($row[$colMap['no engine']] ?? null, 0, 5);
                            $kode_service = $row[$colMap['service ke-']] == '1' ? 'A' : ($row[$colMap['service ke-']] == '2' ? 'B' : ($row[$colMap['service ke-']] == '3' ? 'C' : ($row[$colMap['service ke-']] == '4' ? 'D' : 'Unknown')));
                            $kriteria_kpb = KpbKriteria::where('kpb_type', 'KPB ' . ($row[$colMap['service ke-']] ?? null))->where('kode_nosin', $kode_mesin)->first();
                            $material = $kriteria_kpb?->material ?? 0;
                            $jasa     = $kriteria_kpb?->jasa ?? 0;
                            $pokok = $material + $jasa;
                            $rowsData[] = [
                                'No.' => $penomoranExcel += 1,
                                'nama_ahass'   => Ahass::where('kode_ahass', substr($nomorSuratClean, 0, 5))->first()->nama_ahass ?? 'Unknown',
                                'nomor_surat'  => $nomorSuratClean,
                                'kode_ahass'   => substr($nomorSuratClean, 0, 5),
                                'engine'       => $row[$colMap['no engine']] ?? null,
                                'kode_nosin'   => $kode_mesin . '-' . $kode_service,
                                'material'     => $material,
                                'jasa'         => $jasa,
                                'pokok'        => $pokok,
                                'service_ke'   => $row[$colMap['service ke-']] ?? null,
                                'tgl_beli'     => ($row[$colMap['tgl beli']] ?? null) . '/' . ($row[$colMap['bulan beli']] ?? null) . '/' . ($row[$colMap['tahun beli']] ?? null),
                                'tgl_service'  => $row[$colMap['tgl service']] ?? null,
                                'km'           => $row[$colMap['km']] ?? null,
                                'ket'          => $ket,
                            ];
                        }
                        // Untuk Rejected Fisik & Digital
                        else if (!empty(trim($row[$colMap['no engine']] ?? null)) && !empty(trim($ket)) && strtolower($status) === 'rejected') {
                            $kode_mesin = substr($row[$colMap['no engine']] ?? null, 0, 5);
                            $kode_service = $row[$colMap['service ke-']] == '1' ? 'A' : ($row[$colMap['service ke-']] == '2' ? 'B' : ($row[$colMap['service ke-']] == '3' ? 'C' : ($row[$colMap['service ke-']] == '4' ? 'D' : 'Unknown')));
                            $kriteria_kpb = KpbKriteria::where('kpb_type', 'KPB ' . ($row[$colMap['service ke-']] ?? null))->where('kode_nosin', $kode_mesin)->first();
                            $material = $kriteria_kpb?->material ?? 0;
                            $jasa     = $kriteria_kpb?->jasa ?? 0;
                            $pokok = $material + $jasa;
                            $rowsData[] = [
                                'No.' => $penomoranExcel += 1,
                                'nama_ahass'   => Ahass::where('kode_ahass', substr($nomorSuratClean, 0, 5))->first()->nama_ahass ?? 'Unknown',
                                'nomor_surat'  => $nomorSuratClean,
                                'kode_ahass'   => substr($nomorSuratClean, 0, 5),
                                'engine'       => $row[$colMap['no engine']] ?? null,
                                'kode_nosin'   => $kode_mesin . '-' . $kode_service,
                                'material'     => $material,
                                'jasa'         => $jasa,
                                'pokok'        => $pokok,
                                'service_ke'   => $row[$colMap['service ke-']] ?? null,
                                'tgl_beli'     => ($row[$colMap['tgl beli']] ?? null) . '/' . ($row[$colMap['bulan beli']] ?? null) . '/' . ($row[$colMap['tahun beli']] ?? null),
                                'tgl_service'  => $row[$colMap['tgl service']] ?? null,
                                'km'           => $row[$colMap['km']] ?? null,
                                'ket'          => $ket,
                            ];
                        } else {
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

    private function buildDataKlaim(
        array $fisikApproved,
        array $digitalApproved,
        array $fisikRejected,
        array $digitalRejected
    ): array {

        // Master AHASS (urut nama)
        $ahassList = Ahass::select('kode_ahass', 'nama_ahass')
            ->where(function ($q) {
                $q->where('jenis_dealer', 'H23')->orWhere('jenis_dealer', 'H123');
            })
            ->orderBy('nama_ahass', 'asc')
            ->get();

        // Jadikan collection biar gampang filter
        $fisikApp   = collect($fisikApproved);
        $digitalApp = collect($digitalApproved);
        $fisikRej   = collect($fisikRejected);
        $digitalRej = collect($digitalRejected);

        $no = 1;
        $result = [];

        foreach ($ahassList as $index => $ahass) {

            $kode = $ahass->kode_ahass;

            $fisikA   = $fisikApp->where('kode_ahass', $kode);
            $digitalA = $digitalApp->where('kode_ahass', $kode);
            $fisikR   = $fisikRej->where('kode_ahass', $kode);
            $digitalR = $digitalRej->where('kode_ahass', $kode);
            $sheetName1 = 'DATA REJECTED FISIK';
            $sheetName2 = 'DATA REJECTED DIGITAL';
            $sheetName3 = 'DATA APPROVED FISIK';
            $sheetName4 = 'DATA APPROVED DIGITAL';
            $result[] = [
                'no' => $no++,
                'nama_ahass' => $ahass->nama_ahass,
                'kode_ahass' => $kode,

                // 'jumlah_fisik' => (int) (($fisikA?->count() ?? 0) + ($fisikR?->count() ?? 0)),
                // 'amount_fisik'  => (int) $fisikA->sum('pokok') + $fisikR->sum('pokok'),
                'jumlah_fisik'  => '=(I' . ($index + 3) . '+M' . ($index + 3) . ')',
                'amount_fisik'  => '=(J' . ($index + 3) . '+N' . ($index + 3) . ')',

                // 'jumlah_digital' => (int) $digitalA->count() + $digitalR->count(),
                // 'amount_digital' => (int) $digitalA->sum('pokok') + $digitalR->sum('pokok'),
                'jumlah_digital' => '=(K' . ($index + 3) . '+O' . ($index + 3) . ')',
                'amount_digital' => '=(L' . ($index + 3) . '+P' . ($index + 3) . ')',

                // 'jumlah_claim' => (int) (($fisikA->sum('pokok') + $fisikR->sum('pokok')) + ($digitalA->sum('pokok') + $digitalR->sum('pokok'))),
                'jumlah_claim' => '=(E' . ($index + 3) . '+G' . ($index + 3) . ')',

                // 'fisik_reject' => (int) $fisikR->count(),
                // 'amount_fisik_reject' => (int) $fisikR->sum('pokok'),
                'fisik_reject' => '=COUNTIF(\'' . $sheetName1 . '\'!D2:D' . (count($fisikRej) + 3) . ',"' . $kode . '")',
                'amount_fisik_reject' => '=SUMIF(\'' . $sheetName1 . '\'!D2:D' . (count($fisikRej) + 3) . ', "' . $kode . '", \'' . $sheetName1 . '\'!I2:I' . (count($fisikRej) + 3) . ')',

                // 'digital_reject' => (int) $digitalR->count(),
                // 'amount_digital_reject' => (int) $digitalR->sum('pokok'),
                'digital_reject' => '=COUNTIF(\'' . $sheetName2 . '\'!D2:D' . (count($digitalRej) + 3) . ',"' . $kode . '")',
                'amount_digital_reject' => '=SUMIF(\'' . $sheetName2 . '\'!D2:D' . (count($digitalRej) + 3) . ', "' . $kode . '", \'' . $sheetName2 . '\'!I2:I' . (count($digitalRej) + 3) . ')',

                // 'jumlah_fisik_total'  => (int) $fisikA->count(),
                // 'amount_fisik_total'  => (int) $fisikA->sum('pokok'),
                'jumlah_fisik_total'  => '=COUNTIF(\'' . $sheetName3 . '\'!D2:D' . (count($fisikApp) + 3) . ',"' . $kode . '")',
                'amount_fisik_total'  => '=SUMIF(\'' . $sheetName3 . '\'!D2:D' . (count($fisikApp) + 3) . ', "' . $kode . '", \'' . $sheetName3 . '\'!I2:I' . (count($fisikApp) + 3) . ')',

                // 'jumlah_digital_total' => (int) $digitalA->count(),
                // 'amount_digital_total' => (int) $digitalA->sum('pokok'),
                'jumlah_digital_total' => '=COUNTIF(\'' . $sheetName4 . '\'!D2:D' . (count($digitalApp) + 3) . ',"' . $kode . '")',
                'amount_digital_total' => '=SUMIF(\'' . $sheetName4 . '\'!D2:D' . (count($digitalApp) + 3) . ', "' . $kode . '", \'' . $sheetName4 . '\'!I2:I' . (count($digitalApp) + 3) . ')',
            ];
        }

        return $result;
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
