<?php

namespace App\Console\Commands;

use App\Models\AstraWebc;
use Illuminate\Console\Command;
use Jenssegers\ImageHash\ImageHash;
use Jenssegers\ImageHash\Implementations\DifferenceHash;
use Jenssegers\ImageHash\Implementations\PerceptualHash;

class GetHashWebc extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:get-hash-webc';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Untuk Mendapatkan Perceptual Hash dan Difference Hash dari Link Foto Webc Astra';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $perceptual_hash = new ImageHash(new PerceptualHash());
        $difference_hash = new ImageHash(new DifferenceHash());
        $data = AstraWebc::where(function($q){
            $q->whereNull('dhash')->orWhereNull('phash');
        })
        ->where('kode_ahass', '=', '09822')
        ->get();
        foreach ($data as $key => $item) {
            try {
                $url = $item->filename;
                $dir = storage_path('app/tmp');
                if (!is_dir($dir)) {
                    mkdir($dir, 0775, true);
                }

                $temp = $dir . '/' . uniqid('img_', true);

                $dataImg = file_get_contents($url);
                if ($dataImg === false) {
                    throw new \Exception('Gagal download image');
                }

                file_put_contents($temp, $dataImg);

                $phash = $perceptual_hash->hash($temp);
                $dhash = $difference_hash->hash($temp);
                $item->update([
                    'phash' => $phash->toHex(),
                    'dhash' => $dhash->toHex()
                ]);
                $this->info(($key + 1) . '. HASH ' . $item->nomor_mesin . ' ' . $item->type_motor . ' ' . $item->no_polisi);
            } catch (\Exception $e) {
                $this->error('Gagal mendapatkan HASH ' . $item->nomor_mesin . ' ' . $item->type_motor . ' ' . $item->no_polisi . ' ' . $e->getMessage());
                if ($temp && file_exists($temp)) {
                    unlink($temp);
                }
                continue;
            } finally {
                if ($temp && file_exists($temp)) {
                    unlink($temp);
                }
            }
        }
    }
}
