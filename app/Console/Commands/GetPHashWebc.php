<?php

namespace App\Console\Commands;

use App\Models\AstraWebc;
use Illuminate\Console\Command;
use Jenssegers\ImageHash\ImageHash;
use Jenssegers\ImageHash\Implementations\PerceptualHash;

class GetPHashWebc extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:get-p-hash-webc';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Untuk Mendapatkan Perceptual Hash dari Link Foto Webc Astra';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $hasher = new ImageHash(new PerceptualHash());
        $data = AstraWebc::where(function($q){
            $q->whereNull('phash')->where('filename', '!=', 'photo_url')->where('no_rangka', '!=', 'Belum Divalidasi');;
        })->orWhere(function($q){
            $q->whereNull('phash')->where('no_rangka', '!=', 'Belum Divalidasi');
        })
        ->whereNull('phash')
        ->get();
        foreach($data as $key => $item) {
            try {
                $url = $item->filename;
                $temp = tempnam(sys_get_temp_dir(), 'img');
                file_put_contents($temp, file_get_contents($url));
                $hash = $hasher->hash($temp);
                $item->update([
                    'phash' => $hash->toHex()
                ]);
                $this->info(($key+1).'. PHASH '.$item->nomor_mesin.' '.$item->type_motor.' '.$item->no_polisi);
            } catch(\Exception $e) {
                $this->error('Gagal mendapatkan PHASH '.$item->nomor_mesin.' '.$item->type_motor.' '.$item->no_polisi);
                continue;
            }
        }
    }
}
