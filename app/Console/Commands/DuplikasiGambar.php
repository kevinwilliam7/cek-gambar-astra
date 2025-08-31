<?php

namespace App\Console\Commands;

use App\Models\AstraWebc;
use Illuminate\Console\Command;

class DuplikasiGambar extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:duplikasi-gambar';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Untuk Mengecek Duplikasi Gambar / Foto Motor';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        //cara kevin william
        $json = file_get_contents(storage_path('assets/08_2025/indo_motor_354_digital.json'));
        $data = json_decode($json, true);
        $number = 0;
        foreach($data as $item) {
            $a = AstraWebc::where('nomor_mesin', $item['No Engine'])->where('kpb_type', 'KPB'.$item['Service Ke-'])->first();
            $webc = AstraWebc::where('phash', $a->phash)->where('km', $item['Km'])->get();
            if($webc->count() > 1) {
                $number += 1;
                $this->info(($number).' '.$a->nomor_mesin.' '.$a->kpb_type.' Ketemu '.($webc->count() - 1).' Foto Sama '.$a->phash.' Link Foto: '.$a->filename);
                $this->info('   Detail:');
                foreach($webc as $w) {
                    // dd($item["Km"], $w->km);
                    if($w->nomor_mesin == $item['No Engine'] && $w->kpb_type == 'KPB'.$item['Service Ke-']) {

                    } else {
                        $this->info('   - '.$w->nomor_mesin.' '.$w->kpb_type.' '.$w->no_polisi.' '.$w->filename);
                    }
                }
            }  else {
                // $number += 1;
                // $this->info(($number).' '.$a->nomor_mesin.' '.$a->kpb_type);
            }
        }

        // //cara chatgpt
        // $json = file_get_contents(storage_path('assets/08_2025/indo_motor_354_digital.json'));
        // $data = json_decode($json, true);
        // $number = 0;

        // foreach ($data as $item) {
        //     $a = AstraWebc::where('nomor_mesin', $item['No Engine'])
        //         ->where('kpb_type', 'KPB'.$item['Service Ke-'])
        //         ->first();

        //     if (! $a || ! $a->phash) {
        //         continue;
        //     }

        //     // ambil semua record lain untuk dibandingkan
        //     $webcList = AstraWebc::where('id', '!=', $a->id)->get();

        //     $duplicates = [];
        //     foreach ($webcList as $w) {
        //         if ($w->phash && $this->isSimilarPhash($a->phash, $w->phash, 10)) {
        //             $duplicates[] = $w;
        //         }
        //     }

        //     if (count($duplicates) > 0) {
        //         $number++;
        //         $this->info("{$number} {$a->nomor_mesin} {$a->kpb_type} Ketemu ".count($duplicates)." Foto Mirip {$a->phash} Link Foto: {$a->filename}");
        //         $this->info('   Detail:');
        //         foreach ($duplicates as $w) {
        //             $this->info("   - {$w->nomor_mesin} {$w->kpb_type} {$w->no_polisi} {$w->filename} (phash: {$w->phash})");
        //         }
        //     }
        // }
    }

    /**
     * Hitung jarak Hamming antar dua phash hex.
     */
    private function hammingDistance(string $hash1, string $hash2): int
    {
        $len = min(strlen($hash1), strlen($hash2));
        $dist = 0;
        for ($i = 0; $i < $len; $i++) {
            $xor = hexdec($hash1[$i]) ^ hexdec($hash2[$i]);
            $dist += substr_count(decbin($xor), '1');
        }
        return $dist;
    }

    /**
     * Cek apakah dua phash mirip dengan ambang batas tertentu.
     */
    private function isSimilarPhash(string $hash1, string $hash2, int $threshold = 10): bool
    {
        return $this->hammingDistance($hash1, $hash2) <= $threshold;
    }
}
