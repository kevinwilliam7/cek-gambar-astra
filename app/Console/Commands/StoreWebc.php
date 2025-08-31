<?php

namespace App\Console\Commands;

use App\Models\AstraWebc;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class StoreWebc extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:store-webc';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Untuk Menyimpan Data Webc Astra dari File JSON';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        try {
            $json = file_get_contents(storage_path('assets/webc_referensi/webc_mpm.json'));
            $data = json_decode($json, true);
            DB::beginTransaction();
            foreach($data as $key => $item) {
                // dd($item);
                AstraWebc::updateOrCreate(
                    [
                        'nama_region' => $item['nama_region'],
                        'nomor_pkb' => $item['pkb_number'],
                        'nama_ahass' => $item['nama_ahass'],
                        'nomor_transaksi' => $item['nomor_transaksi'],
                        'kode_ahass' => $item['kode_ahass'],
                        'nama_customer' => $item['nama_customer'] ?? null,
                        'no_handphone' => $item['no_handphone'] ?? null,
                        "type_motor" => $item['type_motor'] ?? null,
                        "nomor_mesin" => $item['no_mesin'] ?? null,
                        "no_polisi" => $item['no_polisi'] ?? null,
                        "kpb_type" => $item['kpb_type'] ?? null,
                        "km" => $item['km'] ?? null,
                        "tanggal_beli" => $item['tanggal_beli'] ?? null,
                        "tanggal_claim" => $item['tanggal_claim'] ?? null,
                        "validitas" => $item['validitas'],
                        "no_rangka" => $item['no_rangka'] ?? null,
                        "filename" => $item['photo_url'],
                        "current_excel" => $item['current_excel'],
                    ]
                );
                $this->info(($key+1).'. '.$item['no_mesin'].' '.($item['type_motor'] ?? ''));
            }
            DB::commit();
        } catch (\Exception $e) {
            DB::rollBack();
            throw $e;
        }
    }
}
