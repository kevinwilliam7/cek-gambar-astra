<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;
use PhpOffice\PhpSpreadsheet\IOFactory;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

class ExportGabunginRekap extends Command
{
    protected $signature = 'export:gabungin-rekap';
    protected $description = 'Merge semua file Excel apa adanya tanpa mengubah kolom';

    public function handle()
    {
        $folderPath = storage_path("assets/stnk_bpkb");

        // Ambil semua data dari folder
        $mergedRows = $this->readFolder($folderPath);

        // Buat file Excel baru
        $spreadsheet = new Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();
        $sheet->setTitle("HASIL GABUNGAN");

        // Masukkan data mulai A1
        $sheet->fromArray($mergedRows, null, 'A1');

        // Auto-size semua kolom berdasarkan kolom terbanyak
        if (!empty($mergedRows)) {
            $maxCols = count($mergedRows[0]);
            foreach (range(1, $maxCols) as $colIndex) {
                $colLetter = \PhpOffice\PhpSpreadsheet\Cell\Coordinate::stringFromColumnIndex($colIndex);
                $sheet->getColumnDimension($colLetter)->setAutoSize(true);
            }
        }

        // Simpan file
        $exportPath = storage_path("exports/rekap_stnk_bpkb.xlsx");
        File::ensureDirectoryExists(dirname($exportPath));

        $writer = new Xlsx($spreadsheet);
        $writer->save($exportPath);

        $this->info("Berhasil membuat file:");
        $this->info($exportPath);

        return Command::SUCCESS;
    }

    /**
     * Baca semua file di folder & merge apa adanya.
     * Header file pertama dipakai, file berikutnya header dilewati.
     */
    private function readFolder(string $folderPath): array
    {
        $rowsData = [];
        $firstFileHeader = null;
        $isFirstFile = true;

        if (!File::exists($folderPath)) {
            $this->warn("Folder tidak ditemukan: {$folderPath}");
            return [];
        }

        $files = File::files($folderPath);

        foreach ($files as $file) {
            try {
                $this->info("Membaca file: " . $file->getFilename());

                $reader = IOFactory::createReaderForFile($file->getRealPath());
                $spreadsheet = $reader->load($file->getRealPath());

                // Ambil sheet pertama
                $sheet = $spreadsheet->getSheet(0);
                $data = $sheet->toArray(null, true, true, true); // Kolom A,B,C,... tetap

                if (empty($data)) {
                    continue;
                }

                // Ambil header dari file pertama
                $header = $data[1];

                if ($isFirstFile) {
                    $firstFileHeader = $header;
                    $rowsData[] = array_values($header);  // gunakan header pertama sebagai header final
                    $isFirstFile = false;
                }

                // Lewati header pada file berikutnya
                $bodyRows = array_slice($data, 1);

                // Masukkan isi file
                foreach ($bodyRows as $row) {
                    $rowsData[] = array_values($row); // masukkan baris apa adanya
                }

            } catch (\Throwable $e) {
                $this->error("Gagal membaca {$file->getFilename()}: " . $e->getMessage());
            }
        }

        return $rowsData;
    }
}
