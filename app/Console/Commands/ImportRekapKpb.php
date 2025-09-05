<?php

namespace App\Console\Commands;

use App\Imports\RekapKpbImport;
use Illuminate\Console\Command;
use Maatwebsite\Excel\Facades\Excel;

class ImportRekapKpb extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'import:rekap-kpb {month} {year}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Import file Rekap KPB berdasarkan bulan dan tahun';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        try {
            $month_file = $this->argument('month'); // ambil dari input terminal
            $year_file = $this->argument('year');   // ambil dari input terminal
            $name_file = 'KPB_'.$month_file.'_'.$year_file.'.xlsx';
            $excel = public_path('/storage/assets/rekap_kpb/'.$year_file.'/' . $name_file);

            if (!file_exists($excel)) {
                $this->error("File tidak ditemukan: {$excel}");
                return;
            }

            Excel::import(new RekapKpbImport($this, $month_file, $year_file), $excel);
        } catch (\Exception $e) {
            $this->error('Error: ' . $e->getMessage());
        }
    }
}
