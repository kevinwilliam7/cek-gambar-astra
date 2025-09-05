<?php

namespace App\Console\Commands;

use App\Models\AstraWebc;
use Illuminate\Console\Command;
use Jenssegers\ImageHash\ImageHash;
use Jenssegers\ImageHash\Implementations\AverageHash;

class GetAHashWebc extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:get-a-hash-webc';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Untuk Mendapatkan Average Hash dari Link Foto Webc Astra';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $hasher = new ImageHash(new AverageHash());
        $data = AstraWebc::where(function($q){
            $q->whereNull('ahash')->where('filename', '!=', 'photo_url')->where('no_rangka', '!=', 'Belum Divalidasi');;
        })->orWhere(function($q){
            $q->whereNull('ahash')->where('no_rangka', '!=', 'Belum Divalidasi');
        })
        ->where('kode_ahass', '02723')
        ->get();
        foreach($data as $key => $item) {
            $url = $item->filename;
            $temp = tempnam(sys_get_temp_dir(), 'img');
            file_put_contents($temp, file_get_contents($url));
            $hash = $hasher->hash($temp);
            $item->update([
                'ahash' => (string) $hash
            ]);
            $this->info(($key+1).'. AHASH '.$item->nomor_mesin.' '.$item->type_motor.' '.$item->no_polisi);
        }
    }
}
