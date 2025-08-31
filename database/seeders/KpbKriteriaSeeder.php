<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KpbKriteriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $array11 = ['JBP1E', 'JBK1E', 'JBK3E', 'JM81E', 'JM91E', 'JM82E', 'KC02E', 'KC01E', 'KD11E'];
        $array12 = ['JME1E', 'JMF1E', 'JMF2E', 'JMG1E', 'JMC1E', 'JMD1E', 'JM03E', 'JM04E', 'JMA1E', 'JMB1E', 'KF01E', 'KFA1E', 'KFC1E', 'KFD1E', 'KB22E', 'KB11E', 'KF71E', 'KF81E', 'KCB1E', 'KCC1E', 'KCD1E', 'KCD2E', 'KCE1E', 'KFB1E', 'KFB2E'];

        $array21 = ['JBP1E', 'JBK1E', 'JM81E', 'JM82E', 'JM91E', 'JME1E', 'JMF1E', 'JMF2E', 'JMG1E', 'JMC1E', 'JMD1E', 'JM03E', 'JM04E', 'JMA1E', 'JMB1E', 'KD11E', 'KC02E'];
        $array22 = ['KF01E', 'KFA1E', 'KFC1E', 'KFD1E', 'KB22E', 'KB11E', 'KF71E', 'KF81E', 'KCB1E', 'KCC1E', 'KCD1E', 'KCD2E', 'KCE1E', 'KFB1E', 'KFB2E'
        ];

        $array31 = ['JBP1E', 'JBK1E', 'JM81E', 'JM82E', 'JM91E', 'JME1E', 'JMF1E', 'JMF2E', 'JMG1E', 'JMC1E', 'JMD1E', 'JM03E', 'JM04E', 'JMA1E', 'JMB1E', 'KD11E', 'KC02E'
        ];
        $array32 = ['KF01E', 'KFA1E', 'KFC1E', 'KFD1E', 'KB22E', 'KB11E', 'KF71E', 'KF81E', 'KCB1E', 'KCC1E', 'KCD1E', 'KCD2E', 'KCE1E', 'KFB1E', 'KFB2E'
        ];

        $array41 = ['JBP1E', 'JBK1E', 'JM81E', 'JM82E', 'JM91E', 'JME1E', 'JMF1E', 'JMF2E', 'JMG1E', 'JMC1E', 'JMD1E', 'JM03E', 'JM04E', 'JMA1E', 'JMB1E', 'KD11E', 'KC02E'
        ];

        $data = [];

        foreach ($array11 as $item11) {
            $data[] = [
                'kpb_type' => 'KPB 1',
                'kode_nosin' => $item11,
                'hari_maksimum' => 75,
                'km_maksimum' => 1100,
                'created_at' => now(),
                'updated_at' => now(),
            ];
        }

        foreach ($array12 as $item12) {
            $data[] = [
                'kpb_type' => 'KPB 1',
                'kode_nosin' => $item12,
                'hari_maksimum' => 75,
                'km_maksimum' => 1250,
                'created_at' => now(),
                'updated_at' => now(),
            ];
        }

        foreach ($array21 as $item21) {
            $data[] = [
                'kpb_type' => 'KPB 2',
                'kode_nosin' => $item21,
                'hari_maksimum' => 135,
                'km_maksimum' => 4250,
                'created_at' => now(),
                'updated_at' => now(),
            ];
        }

        foreach ($array22 as $item22) {
            $data[] = [
                'kpb_type' => 'KPB 2',
                'kode_nosin' => $item22,
                'hari_maksimum' => 195,
                'km_maksimum' => 6250,
                'created_at' => now(),
                'updated_at' => now(),
            ];
        }

        foreach ($array31 as $item31) {
            $data[] = [
                'kpb_type' => 'KPB 3',
                'kode_nosin' => $item31,
                'hari_maksimum' => 255,
                'km_maksimum' => 8250,
                'created_at' => now(),
                'updated_at' => now(),
            ];
        }

        foreach ($array32 as $item32) {
            $data[] = [
                'kpb_type' => 'KPB 3',
                'kode_nosin' => $item32,
                'hari_maksimum' => 375,
                'km_maksimum' => 12250,
                'created_at' => now(),
                'updated_at' => now(),
            ];
        }

        foreach ($array41 as $item41) {
            $data[] = [
                'kpb_type' => 'KPB 4',
                'kode_nosin' => $item41,
                'hari_maksimum' => 375,
                'km_maksimum' => 12250,
                'created_at' => now(),
                'updated_at' => now(),
            ];
        }

        DB::table('kpb_kriterias')->insert($data);
    }
}
