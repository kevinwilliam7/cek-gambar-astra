<?php

namespace App\Imports;

use App\Models\RekapKpb;
use Maatwebsite\Excel\Row;
use Maatwebsite\Excel\Concerns\OnEachRow;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithChunkReading;

class RekapKpbImport implements OnEachRow, WithHeadingRow, WithChunkReading
{
    protected $command;
    protected $month;
    protected $year;

    public function __construct($command = null, $month = null, $year = null)
    {
        $this->command = $command;
        $this->month = $month;
        $this->year = $year;
    }

    public function onRow(Row $row)
    {
        $data = $row->toArray();
        // dd($data);

        RekapKpb::updateOrCreate(
            [
                'month' => $this->month . '_' . $this->year,
                'ttpk' => $data['ttpk'] ?? null,
                'service_id' => $data['service_id'] ?? null,
                'engine' => $data['engine'] ?? null,
            ],
            [
                'md_code' => $data['md_code'] ?? null,
                'md_name' => $data['md_name'] ?? null,
                'ahass_code' => $data['ahass_code'] ?? null,
                'ahass_name' => $data['ahass_name'] ?? null,
                'type' => $data['type'] ?? null,
                'frame' => $data['frame'] ?? null,
                'payment_request' => $data['payment_request'] ?? null,
                'kpb' => $data['kpb'] ?? null,
                'buy_date' => $data['buy_date'] ?? null,
                'km' => str_replace(',', '', $data['usage_km']) ?? null,
                'service_date' => $data['service_date'] ?? null,
                'claim_letter' => $data['claim_letter'] ?? null,
                'received_date' => $data['received_date'] ?? null,
                'upload_date' => $data['upload_date'] ?? null,
                'due_date' => $data['due_date'] ?? null,
                'delay' => $data['delay'] ?? null,
                'ttpk_date' => $data['ttpk_date'] ?? null,
                'status_description' => $data['status_description'] ?? null,
                'unpaid_reason' => $data['unpaid_reason'] ?? null,
                'dispensation' => $data['dispensation'] ?? null,
            ]
        );

        if ($this->command) {
            $this->command->info($this->year . "_" . $this->month . " Berhasil import row: " . $data['engine'] ?? '');
        }
    }

    public function chunkSize(): int
    {
        return 1000; // proses 1000 baris per sekali load
    }
}
