<?php

namespace App\Imports;

use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Concerns\ToArray;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithChunkReading;

class RekapKpbImport implements ToArray, WithHeadingRow, WithChunkReading
{
    protected $command;
    protected $month;
    protected $year;

    public function __construct($command = null, $month = null, $year = null)
    {
        $this->command = $command;
        $this->month   = $month;
        $this->year    = $year;
    }

    public function array(array $rows)
    {
        $start = microtime(true);
        $payload = [];

        foreach ($rows as $row) {
            $payload[] = [
                'month'              => $this->month . '_' . $this->year,
                'ttpk'               => $row['ttpk'] ?? null,
                'service_id'         => $row['service_id'] ?? null,
                'engine'             => $row['engine'] ?? null,

                'md_code'            => $row['md_code'] ?? null,
                'md_name'            => $row['md_name'] ?? null,
                'ahass_code'         => $row['ahass_code'] ?? null,
                'ahass_name'         => $row['ahass_name'] ?? null,
                'type'               => $row['type'] ?? null,
                'frame'              => $row['frame'] ?? null,
                'payment_request'    => $row['payment_request'] ?? null,
                'kpb'                => $row['kpb'] ?? null,
                'buy_date'           => $row['buy_date'] ?? null,
                'km'                 => isset($row['usage_km'])
                    ? str_replace(',', '', $row['usage_km'])
                    : null,
                'service_date'       => $row['service_date'] ?? null,
                'claim_letter'       => $row['claim_letter'] ?? null,
                'received_date'      => $row['received_date'] ?? null,
                'upload_date'        => $row['upload_date'] ?? null,
                'due_date'           => $row['due_date'] ?? null,
                'delay'              => $row['delay'] ?? null,
                'ttpk_date'          => $row['ttpk_date'] ?? null,
                'status_description' => $row['status_description'] ?? null,
                'unpaid_reason'      => $row['unpaid_reason'] ?? null,
                'dispensation'       => $row['dispensation'] ?? null,
            ];
        }

        DB::table('rekap_kpbs')->upsert(
            $payload,
            // UNIQUE KEY (sesuai constraint kamu)
            ['month', 'ttpk', 'service_id', 'engine'],
            // kolom yang di-update
            [
                'md_code',
                'md_name',
                'ahass_code',
                'ahass_name',
                'type',
                'frame',
                'payment_request',
                'kpb',
                'buy_date',
                'km',
                'service_date',
                'claim_letter',
                'received_date',
                'upload_date',
                'due_date',
                'delay',
                'ttpk_date',
                'status_description',
                'unpaid_reason',
                'dispensation',
            ]
        );
        $end = microtime(true);
        if ($this->command) {
            $this->command->info(
                "{$this->year}_{$this->month} UPSERT " . count($payload) . " rows"
            );
            $this->command->info("Time taken: " . ($end - $start) . " seconds");
        }
    }

    public function chunkSize(): int
    {
        return 1000;
    }
}
