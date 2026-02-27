<?php

namespace App\Console\Commands;

use App\Models\AstraWebc;
use Illuminate\Console\Command;
use PhpOffice\PhpSpreadsheet\IOFactory;
use Illuminate\Support\Facades\File;

class DuplikasiGambar extends Command
{
    protected $signature = 'app:duplikasi-gambar {month} {year}';
    protected $description = 'Untuk Mengecek Duplikasi Gambar / Foto Motor (interaktif pilih file)';

    public function handle()
    {
        $month = $this->argument('month');
        $year = $this->argument('year');
        $baseDir = storage_path("app/private/");

        if (!File::exists($baseDir)) {
            $this->error("❌ Folder tidak ditemukan: {$baseDir}");
            return Command::FAILURE;
        }

        // Ambil semua file Excel di folder
        $files = collect(File::allFiles($baseDir))
            ->filter(fn($f) => str_ends_with($f->getFilename(), '.xls'))
            ->values()
            ->toArray();

        if (empty($files)) {
            $this->error("❌ Tidak ada file .xls ditemukan di: {$baseDir}");
            return Command::FAILURE;
        }

        // Pilih file berdasarkan nama saja
        $choices = array_map(fn($f) => $f->getFilename(), $files);
        $chosen = $this->choice('📄 Pilih file Excel untuk diperiksa:', $choices);

        // Dapatkan file yang cocok dari koleksi
        $file = collect($files)->first(fn($f) => $f->getFilename() === $chosen);
        $filePath = $file->getPathname();

        $this->info("📂 File terpilih: {$filePath}");

        // Coba load spreadsheet
        try {
            $spreadsheet = IOFactory::load($filePath);
        } catch (\Exception $e) {
            $this->error("❌ Gagal membaca file Excel: {$e->getMessage()}");
            return Command::FAILURE;
        }

        // Pastikan sheet ke-2 ada
        if ($spreadsheet->getSheetCount() < 2) {
            $this->error("❌ File tidak memiliki Sheet2 (index 1)");
            return Command::FAILURE;
        }

        $sheet = $spreadsheet->getSheet(1);
        $rows = $sheet->toArray(null, true, true, true);

        $this->info("🔍 Membaca Sheet2 (" . count($rows) . " baris)...");

        $duplikasi = [];
        $progress = $this->output->createProgressBar(count($rows) - 1);
        $progress->start();

        foreach (array_slice($rows, 1) as $row) {
            $noEngine = trim($row['A'] ?? '');
            $serviceKe = trim($row['B'] ?? '');
            $km = trim($row['C'] ?? '');

            if (!$noEngine || !$serviceKe) {
                $progress->advance();
                continue;
            }

            $a = AstraWebc::where('nomor_mesin', $noEngine)
                ->where('kpb_type', 'KPB' . $serviceKe)
                ->first();

            if (!$a) {
                $progress->advance();
                continue;
            }

            $duplicates = AstraWebc::where('phash', $a->phash)
                // ->where('km', $km)
                ->get();

            // if ($duplicates->count() > 1) {
            //     $duplikasi[] = [
            //         'nomor_mesin' => $a->nomor_mesin,
            //         'kpb_type' => $a->kpb_type,
            //         'jumlah_duplikat' => $duplicates->count() - 1,
            //         'phash' => $a->phash,
            //         'filename' => $a->filename,
            //         'detail' => $duplicates->map(fn($w) => "{$w->nomor_mesin} / {$w->filename}")->toArray(),
            //     ];
            // }

            if ($duplicates->count() > 1) {
                // Ambil semua duplikat KECUALI record utama ($a)
                $otherDuplicates = $duplicates->where('id', '!=', $a->id);

                if ($otherDuplicates->count() > 0) {  // pastikan masih ada yang lain setelah di-exclude
                    $duplikasi[] = [
                        'nomor_mesin'     => $a->nomor_mesin,
                        'kpb_type'        => $a->kpb_type,
                        'jumlah_duplikat' => $otherDuplicates->count(),  // hitung yang lain saja
                        'phash'           => $a->phash,
                        'filename'        => $a->filename,
                        'detail'          => $otherDuplicates->map(function ($w) {
                            return "{$w->nomor_mesin} / {$w->filename}";
                        })->toArray(),
                    ];
                }
            }

            $progress->advance();
        }

        $progress->finish();
        $this->newLine(2);

        if (empty($duplikasi)) {
            $this->info("✅ Tidak ditemukan duplikasi gambar.");
        } else {
            $this->info("⚠️  Ditemukan " . count($duplikasi) . " duplikasi:\n");

            foreach ($duplikasi as $i => $item) {
                $this->line(($i + 1) . ". {$item['nomor_mesin']} {$item['kpb_type']} → {$item['jumlah_duplikat']} duplikat ({$item['phash']})");
                $this->line("   📷 Link Foto: {$item['filename']}");
                foreach ($item['detail'] as $d) {
                    $this->line("   └─ {$d}");
                }
                $this->newLine();
            }

            $this->info("✅ Selesai! Total duplikasi ditemukan: " . count($duplikasi));
        }

        return Command::SUCCESS;
    }
}
