<?php

namespace App\Console\Commands;

use App\Imports\WebcImport;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;
use Maatwebsite\Excel\Facades\Excel;

class ImportWebc extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'import:webc';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Import Data Webc Excel';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        try {
            $folderPath = storage_path("assets/webc_excel");

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
            $this->line("[0] Import semua file");
            foreach ($excel_files as $index => $file) {
                $this->line("[" . ($index + 1) . "] " . $file->getFilename());
            }

            // ✅ Minta input pilihan user
            $choice = (int) $this->ask('Masukkan nomor file yang ingin diimport');

            // ✅ Tentukan file mana yang akan diimport
            if ($choice === 0) {
                $selectedFiles = $excel_files;
                $this->info("🔄 Mengimpor semua file...");
            } elseif ($choice > 0 && $choice <= $excel_files->count()) {
                $selectedFiles = collect([$excel_files[$choice - 1]]);
                $this->info("📄 Mengimpor file: " . $excel_files[$choice - 1]->getFilename());
            } else {
                $this->error("❌ Pilihan tidak valid!");
                return;
            }

            // ✅ Proses impor
            $fileKe = 0;
            foreach ($selectedFiles as $excel_file) {
                $fileKe++;
                $this->info("➡️  Mengimpor file ke-{$fileKe}: {$excel_file->getFilename()}");

                Excel::import(
                    new WebcImport($this),
                    $excel_file
                );
            }

            $this->info("✅ Import selesai!");

        } catch (\Exception $e) {
            $this->error('Error: ' . $e->getMessage());
        }
    }
}
