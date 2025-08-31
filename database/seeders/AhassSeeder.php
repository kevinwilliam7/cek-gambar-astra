<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AhassSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['kode_ahass' => '07233', 'nama_ahass' => 'Achau Motor'],
            ['kode_ahass' => '09588', 'nama_ahass' => 'Ani Motor'],
            ['kode_ahass' => '14025', 'nama_ahass' => 'Anugerah Bengkayang'],
            ['kode_ahass' => '13703', 'nama_ahass' => 'Anugerah Landak'],
            ['kode_ahass' => '03183', 'nama_ahass' => 'Anugerah Pontianak'],
            ['kode_ahass' => '15652', 'nama_ahass' => 'Arena'],
            ['kode_ahass' => '16665', 'nama_ahass' => 'Arwana Kuala'],
            ['kode_ahass' => '10839', 'nama_ahass' => 'Bina Motor'],
            ['kode_ahass' => '13418', 'nama_ahass' => 'Bintang Motor Jaya'],
            ['kode_ahass' => '11101', 'nama_ahass' => 'Cahaya Abadi Motor'],
            ['kode_ahass' => '08267', 'nama_ahass' => 'DAM Pontianak'],
            ['kode_ahass' => '09045', 'nama_ahass' => 'DAM Sambas'],
            ['kode_ahass' => '13222', 'nama_ahass' => 'DAM Sekadau'],
            ['kode_ahass' => '08268', 'nama_ahass' => 'DAM Sintang'],
            ['kode_ahass' => '03720', 'nama_ahass' => 'Elco Motor Sanggau'],
            ['kode_ahass' => '06562', 'nama_ahass' => 'Eico Motor Sekadau'],
            ['kode_ahass' => '02542', 'nama_ahass' => 'Fajar Lestari'],
            ['kode_ahass' => '07539', 'nama_ahass' => 'HPM Putra Motor'],
            ['kode_ahass' => '12804', 'nama_ahass' => 'HSO Benua Kayong'],
            ['kode_ahass' => '00011', 'nama_ahass' => 'HSO Ketapang'],
            ['kode_ahass' => '00010', 'nama_ahass' => 'HSO Pattimura'],
            ['kode_ahass' => '16451', 'nama_ahass' => 'HSO Putussibau'],
            ['kode_ahass' => '09821', 'nama_ahass' => 'HSO Sanggau'],
            ['kode_ahass' => '04017', 'nama_ahass' => 'HSO SERDAM'],
            ['kode_ahass' => '09822', 'nama_ahass' => 'HSO Singkawang'],
            ['kode_ahass' => '13198', 'nama_ahass' => 'HSO Sintang'],
            ['kode_ahass' => '17555', 'nama_ahass' => 'HSO Sambas'],
            ['kode_ahass' => '00728', 'nama_ahass' => 'Ideal Motor'],
            ['kode_ahass' => '02723', 'nama_ahass' => 'Ihsan Motor Pinyuh'],
            ['kode_ahass' => '10840', 'nama_ahass' => 'Iqbal Motor'],
            ['kode_ahass' => '18687', 'nama_ahass' => 'Iqna Motor'],
            ['kode_ahass' => '01161', 'nama_ahass' => 'Jawi Motor'],
            ['kode_ahass' => '07492', 'nama_ahass' => 'Jaya Makmur'],
            ['kode_ahass' => '18392', 'nama_ahass' => 'Kencana Motor'],
            ['kode_ahass' => '06936', 'nama_ahass' => 'Lima Utama Motor'],
            ['kode_ahass' => '07490', 'nama_ahass' => 'Meteor Motor Sanggau'],
            ['kode_ahass' => '07333', 'nama_ahass' => 'Mitra Honda Motor'],
            ['kode_ahass' => '13436', 'nama_ahass' => 'MPM Ptk'],
            ['kode_ahass' => '09044', 'nama_ahass' => 'Nagamas Motor'],
            ['kode_ahass' => '07392', 'nama_ahass' => 'NSS Pinoh'],
            ['kode_ahass' => '06925', 'nama_ahass' => 'NSS Pontianak'],
            ['kode_ahass' => '07140', 'nama_ahass' => 'NSS Putussibau'],
            ['kode_ahass' => '13710', 'nama_ahass' => 'NSS Sanggau'],
            ['kode_ahass' => '01962', 'nama_ahass' => 'NSS Singkawang'],
            ['kode_ahass' => '01961', 'nama_ahass' => 'NSS Sintang'],
            ['kode_ahass' => '09886', 'nama_ahass' => 'NSS Sungai Raya'],
            ['kode_ahass' => '05015', 'nama_ahass' => 'Panca Motor I Skw'],
            ['kode_ahass' => '02668', 'nama_ahass' => 'Panca Motor Pinyuh'],
            ['kode_ahass' => '07046', 'nama_ahass' => 'Panca Motor Sintang'],
            ['kode_ahass' => '07079', 'nama_ahass' => 'Pelangi Ceria Motor'],
            ['kode_ahass' => '07533', 'nama_ahass' => 'Rama Jaya Motor'],
            ['kode_ahass' => '18094', 'nama_ahass' => 'Roda Mandiri Motor'],
            ['kode_ahass' => '17832', 'nama_ahass' => 'Sae Jaya Motor'],
            ['kode_ahass' => '01950', 'nama_ahass' => 'Sahuri Sambas'],
            ['kode_ahass' => '06302', 'nama_ahass' => 'Sahuri Sekura'],
            ['kode_ahass' => '06285', 'nama_ahass' => 'Sekawan Motor'],
            ['kode_ahass' => '13628', 'nama_ahass' => 'Tdm Ketapang'],
            ['kode_ahass' => '13622', 'nama_ahass' => 'TDM Pinoh'],
            ['kode_ahass' => '11771', 'nama_ahass' => 'TMS Ketapang'],
            ['kode_ahass' => '13417', 'nama_ahass' => 'TMS Kobar'],
            ['kode_ahass' => '08459', 'nama_ahass' => 'TMS Pontianak/Siantan'],
            ['kode_ahass' => '02740', 'nama_ahass' => 'Unggul Motor'],
        ];

        DB::table('ahass')->insert($data);
    }
}
