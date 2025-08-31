<?php

namespace App\Console\Commands;

use App\Models\AstraWebc;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;

class TestCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:test-command';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        try {
            DB::beginTransaction();
            $data = AstraWebc::where('no_rangka', 'ilike', '%'.'validasi'.'%')->where('nomor_transaksi', '!=', '')->get();
            // dd(count($data));
            foreach($data as $item) {
                // dd($item);
                // $item->update([
                //     "nomor_pkb" => $item['nama_ahass'],
                //     "nama_ahass" => $item['nomor_transaksi'],
                //     "nomor_transaksi" => $item['kode_ahass'],
                //     "kode_ahass" => $item['nama_customer'],
                //     "nama_customer" => $item['no_handphone'],
                //     "no_handphone" => $item['type_motor'],
                //     "type_motor" => $item['nomor_mesin'],
                //     "nomor_mesin" => $item['no_polisi'],
                //     "no_polisi" => $item['kpb_type'],
                //     "kpb_type" => $item['km'],
                //     "km" => $item['tanggal_beli'],
                //     "tanggal_beli" => $item['tanggal_claim'],
                //     "tanggal_claim" => $item['filename'],
                //     "filename" => $item['validitas'],
                //     "validitas" => $item['no_rangka'],
                // ]);
                $s = collect(json_decode(file_get_contents(storage_path('assets/webc_dam_sintang.json')), true))->where("kode_ahass", $item->nomor_transaksi);
                // dd($s->first());
                $this->info($item->nomor_transaksi.' '.$s->count());
                $item->update([
                    "no_rangka" => $s->first()[''] ?? 'Belum Divalidasi',
                ]);
            }
            DB::commit();
        } catch (\Exception $e) {
            DB::rollBack();
            throw $e;
        }
    }
}
