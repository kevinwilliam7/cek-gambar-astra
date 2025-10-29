<?php

namespace App\Console\Commands;

use App\Helpers\ExcelCekKpbHelper;
use App\Imports\CekKpbImport;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;

class CekKpbCommand extends Command
{
    protected $signature = 'app:cek-kpb-command {month} {year}';
    protected $description = 'Import data KPB dari file Excel';

    public function handle()
    {
        try {
            $month = $this->argument('month');
            $year = $this->argument('year');
            $folderPath = storage_path("assets/sedang_cek_kpb/{$month}_{$year}");

            // ✅ Cek folder
            if (!File::exists($folderPath)) {
                $this->warn("❌ Folder tidak ditemukan: {$folderPath}");
                return;
            }

            // ✅ Ambil file Excel di folder
            $excel_files = collect(File::files($folderPath))
                ->filter(fn($file) => in_array($file->getExtension(), ['xlsx', 'xls']))
                ->values();

            if ($excel_files->isEmpty()) {
                $this->warn("⚠️ Tidak ada file Excel di folder: {$folderPath}");
                return;
            }

            // ✅ Tampilkan daftar file
            $this->info("📂 File Excel yang ditemukan di {$folderPath}:");
            foreach ($excel_files as $index => $file) {
                $this->line("[" . ($index + 1) . "] " . $file->getFilename());
            }

            // ✅ Minta input pilihan user
            $choice = (int) $this->ask('Masukkan nomor file yang ingin diimport');

            // ✅ Tentukan file mana yang akan diimport
            if ($choice > 0 && $choice <= $excel_files->count()) {
                $selectedFiles = collect([$excel_files[$choice - 1]]);
                $this->info("📄 Mengimpor file: " . $excel_files[$choice - 1]->getFilename());
            } else {
                $this->error("❌ Pilihan tidak valid!");
                return;
            }

            // ✅ Proses impor (Sheet ke-2)
            $fileKe = 0;
            foreach ($selectedFiles as $excel_file) {
                $fileKe++;
                $this->info("➡️  Mengimpor file ke-{$fileKe}: {$excel_file->getFilename()}");

                $path = $excel_file->getRealPath();

                ExcelCekKpbHelper::processExcelWithFormula($path, CekKpbImport::class, $this);
            }

            $this->info("✅ Import selesai!");
        } catch (\Exception $e) {
            $this->error('Error: ' . $e->getMessage());
        }
    }
}
