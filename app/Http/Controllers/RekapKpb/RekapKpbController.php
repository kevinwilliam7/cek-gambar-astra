<?php

namespace App\Http\Controllers\RekapKpb;

use App\Http\Controllers\Controller;
use App\Models\Motor;
use App\Models\RekapKpb;
use App\Services\DatatableService;
use Carbon\Carbon;
use Illuminate\Http\Request;

class RekapKpbController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $motor = Motor::get()->unique('type_motor');
        $status_description = RekapKpb::select('status_description')
            ->distinct()
            ->pluck('status_description');
        $service_id = [1,2,3,4];
        $list_tahun = Carbon::now()->year - 2;
        for ($i = Carbon::now()->year; $i >= $list_tahun; $i--) {
            $tahun[] = $i;
        }
        $bulan = [
            [
                'value' => '01',
                'label' => 'Januari'
            ],
            [
                'value' => '02',
                'label' => 'Februari'
            ],
            [
                'value' => '03',
                'label' => 'Maret'
            ],
            [
                'value' => '04',
                'label' => 'April'
            ],
            [
                'value' => '05',
                'label' => 'Mei'    
            ],
            [
                'value' => '06',
                'label' => 'Juni'
            ],
            [
                'value' => '07',
                'label' => 'Juli'
            ],
            [
                'value' => '08',
                'label' => 'Agustus'
            ],
            [
                'value' => '09',
                'label' => 'September'
            ],
            [
                'value' => '10',
                'label' => 'Oktober'
            ],
            [
                'value' => '11',
                'label' => 'November'
            ],
            [
                'value' => '12',
                'label' => 'Desember'
            ],
        ];
        $data = [
            'motor' => $motor,
            'status_description' => $status_description,
            'service_id' => $service_id,
            'tahun' => $tahun,
            'bulan' => $bulan,
        ];
        return view('rekap_kpb.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function datatable(Request $request)
    {
        $result = DatatableService::apply(
            RekapKpb::where(function($q) use ($request) {
                if ($request->filled('status_description')) {
                    $q->whereIn('status_description', $request->input('status_description', []));
                }
                if ($request->filled('type_motor')) {
                    $values = $request->input('type_motor', []);
                    $motor = Motor::whereIn('type_motor', $values)->pluck('kode_nosin');

                    $q->where(function ($query) use ($motor) {
                        foreach ($motor as $val) {
                            $query->orWhere('engine', 'ILIKE', "%{$val}%");
                        }
                    });
                }
                if ($request->filled('service_id')) {
                    $q->whereIn('service_id', $request->input('service_id', []));
                }   
                if ($request->filled('tahun')) {
                    $values = $request->input('tahun', []);

                    $q->where(function ($query) use ($values) {
                        foreach ($values as $val) {
                            $query->orWhere('month', 'ILIKE', "%_{$val}%");
                        }
                    });
                }
                if ($request->filled('bulan')) {
                    $values = $request->input('bulan', []);

                    $q->where(function ($query) use ($values) {
                        foreach ($values as $val) {
                            $query->orWhere('month', 'ILIKE', "%{$val}_%");
                        }
                    });
                }
            }),
            $request,
            ['ahass_name', 'ahass_code', 'service_id', 'frame', 'engine', 'km', 'service_date', 'buy_date', 'status_description'],
            ['ahass_name', 'ahass_code', 'service_id', 'frame', 'engine', 'km', 'service_date', 'buy_date', 'status_description']
        );

        return response()->json([
            'data'           => $result['rows'],
            'page'           => $result['page'],
            'per_page'       => $result['perPage'],
            'total'          => $result['total'],
            'total_filtered' => $result['filtered'],
            'total_pages'    => ceil($result['filtered'] / $result['perPage']),
            'sort_by'        => $result['sortBy'],
            'sort_dir'       => $result['sortDir'],
            'q'              => $result['q'],
        ]);
    }
}
