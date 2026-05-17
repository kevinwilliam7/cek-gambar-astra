<?php

namespace App\Imports;

use App\Models\AstraWebc;
use Maatwebsite\Excel\Row;
use Maatwebsite\Excel\Concerns\OnEachRow;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithChunkReading;

class WebcImport implements OnEachRow, WithHeadingRow, WithChunkReading
{
    protected $command;

    public function __construct($command = null)
    {
        $this->command = $command;
    }

    public function onRow(Row $row)
    {
        $sheetName = $row->getDelegate()->getWorksheet()->getTitle();

        $data = $row->toArray();

        // Cek row benar-benar kosong
        $filtered = array_filter($data, fn($v) => $v !== null && $v !== '');

        if (empty($filtered)) {
            return;
        }

        if (str_contains($data['photo_url'], 'https') === true) {
            $updateData = [
                'nama_region' => $data['nama_region'],
                'nama_ahass' => $data['nama_ahass'],
                'nomor_transaksi' => $data['nomor_transaksi'],
                'nama_customer' => $data['nama_customer'] ?? null,
                'no_handphone' => $data['no_handphone'] ?? null,
                "type_motor" => $data['type_motor'] ?? null,
                "no_polisi" => $data['no_polisi'] ?? null,
                "tanggal_beli" => $data['tanggal_beli'] ?? null,
                "tanggal_claim" => $data['tanggal_claim'] ?? null,
                "validitas" => $data['validitas'],
                "no_rangka" => $data['no_rangka'] ?? null,
                "filename" => $data['photo_url'],
            ];

            // Jika sheet 1
            if ($sheetName === 'Sheet1') {
                $updateData['current_excel'] = true;
            }

            AstraWebc::updateOrCreate(
                [
                    'kode_ahass' => $data['kode_ahass'],
                    "nomor_mesin" => $data['no_mesin'] ?? null,
                    "kpb_type" => $data['kpb_type'] ?? null,
                    "km" => $data['km'] ?? null,
                    'nomor_pkb' => $data['pkb_number'] ?? null,
                ],
                $updateData
            );
        } else {
            if ($this->command) {
                $this->command->warn($sheetName . "  Skip import webc row: " . ($data['no_mesin'] ?? '') . " karena photo_url tidak valid");
            }
        }


        if ($this->command) {
            $this->command->info($sheetName . "  Berhasil import webc row: " . ($data['no_mesin'] ?? ''));
        }
    }

    public function chunkSize(): int
    {
        return 1000; // proses 1000 baris per sekali load
    }
}
