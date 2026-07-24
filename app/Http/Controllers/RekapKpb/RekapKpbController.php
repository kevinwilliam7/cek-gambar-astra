<?php

namespace App\Http\Controllers\RekapKpb;

use App\Http\Controllers\Controller;
use App\Models\Ahass;
use App\Models\Motor;
use App\Models\RekapKpb;
use App\Services\DatatableService;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

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
        $list_tahun = Carbon::now()->year - 5;
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
        $jenis_dealer = Ahass::select('jenis_dealer')
            ->distinct()
            ->pluck('jenis_dealer');
        $latestMonth = RekapKpb::orderBy('id', 'desc')->value('month');
        $jumlahTtpk = 0;
        $listTtpkDateDealer = [];
        $listTtpkDateSO = [];
        
        if ($latestMonth) {
            $jumlahTtpk = RekapKpb::where('month', $latestMonth)->count();
                
            $listTtpkDateDealer = RekapKpb::query()
                ->join('ahass', 'rekap_kpbs.ahass_code', '=', 'ahass.kode_ahass')
                ->where('rekap_kpbs.month', $latestMonth)
                ->whereIn('ahass.jenis_dealer', ['H23', 'H123'])
                ->whereNotNull('rekap_kpbs.ttpk_date')
                ->select('rekap_kpbs.ttpk_date')
                ->distinct('rekap_kpbs.ttpk_date')
                ->orderBy('rekap_kpbs.ttpk_date', 'desc')
                ->get();

            $listTtpkDateSO = RekapKpb::query()
                ->join('ahass', 'rekap_kpbs.ahass_code', '=', 'ahass.kode_ahass')
                ->where('rekap_kpbs.month', $latestMonth)
                ->whereNotIn('ahass.jenis_dealer', ['H23', 'H123'])
                ->whereNotNull('rekap_kpbs.ttpk_date')
                ->select('rekap_kpbs.ttpk_date')
                ->distinct('rekap_kpbs.ttpk_date')
                ->orderBy('rekap_kpbs.ttpk_date', 'desc')
                ->get();
        }

        $ttpkTerakhirDealer = RekapKpb::query()
            ->join('ahass', 'rekap_kpbs.ahass_code', '=', 'ahass.kode_ahass')
            ->whereIn('ahass.jenis_dealer', ['H23', 'H123'])
            ->whereNotNull('rekap_kpbs.ttpk')
            ->where('rekap_kpbs.ttpk', '!=', '')
            ->orderBy('rekap_kpbs.ttpk_date', 'desc')
            ->select('rekap_kpbs.ttpk', 'rekap_kpbs.ttpk_date')
            ->first();
        
        $ttpkTerakhirSO = RekapKpb::query()
            ->join('ahass', 'rekap_kpbs.ahass_code', '=', 'ahass.kode_ahass')
            ->whereNotIn('ahass.jenis_dealer', ['H23', 'H123'])
            ->whereNotNull('rekap_kpbs.ttpk')
            ->where('rekap_kpbs.ttpk', '!=', '')
            ->orderBy('rekap_kpbs.ttpk_date', 'desc')
            ->select('rekap_kpbs.ttpk', 'rekap_kpbs.ttpk_date')
            ->first();

        $data = [
            'motor' => $motor,
            'status_description' => $status_description,
            'service_id' => $service_id,
            'tahun' => $tahun,
            'bulan' => $bulan,
            'jenis_dealer' => $jenis_dealer,
            'dashboard' => [
                'latest_month' => $latestMonth,
                'jumlah_ttpk' => $jumlahTtpk,
                'list_ttpk_date_dealer' => $listTtpkDateDealer,
                'list_ttpk_date_so' => $listTtpkDateSO,
                'ttpk_terakhir_dealer' => $ttpkTerakhirDealer ? $ttpkTerakhirDealer->ttpk : '-',
                'ttpk_terakhir_dealer_date' => $ttpkTerakhirDealer ? $ttpkTerakhirDealer->ttpk_date : '-',
                'ttpk_terakhir_so' => $ttpkTerakhirSO ? $ttpkTerakhirSO->ttpk : '-',
                'ttpk_terakhir_so_date' => $ttpkTerakhirSO ? $ttpkTerakhirSO->ttpk_date : '-',
            ]
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

    // public function datatable(Request $request)
    // {
    //     $result = DatatableService::apply(
    //         RekapKpb::where(function($q) use ($request) {
    //             if ($request->filled('status_description')) {
    //                 $q->whereIn('status_description', $request->input('status_description', []));
    //             }
    //             if ($request->filled('type_motor')) {
    //                 $values = $request->input('type_motor', []);
    //                 $motor = Motor::whereIn('type_motor', $values)->pluck('kode_nosin');

    //                 $q->where(function ($query) use ($motor) {
    //                     foreach ($motor as $val) {
    //                         $query->orWhere('engine', 'ILIKE', "%{$val}%");
    //                     }
    //                 });
    //             }
    //             if ($request->filled('service_id')) {
    //                 $q->whereIn('service_id', $request->input('service_id', []));
    //             }
    //             if ($request->filled('tahun')) {
    //                 $values = $request->input('tahun', []);

    //                 $q->where(function ($query) use ($values) {
    //                     foreach ($values as $val) {
    //                         $query->orWhere('month', 'ILIKE', "%_{$val}");
    //                     }
    //                 });
    //             }
    //             if ($request->filled('bulan')) {
    //                 $values = $request->input('bulan', []);

    //                 $q->where(function ($query) use ($values) {
    //                     foreach ($values as $val) {
    //                         $query->orWhere('month', 'ILIKE', "{$val}_%");
    //                     }
    //                 });
    //             }
    //         }),
    //         $request,
    //         ['ahass_name', 'ahass_code', 'service_id', 'frame', 'engine', 'km', 'service_date', 'buy_date', 'status_description'],
    //         ['ahass_name', 'ahass_code', 'service_id', 'frame', 'engine', 'km', 'service_date', 'buy_date', 'status_description']
    //     );

    //     return response()->json([
    //         'data'           => $result['rows'],
    //         'page'           => $result['page'],
    //         'per_page'       => $result['perPage'],
    //         'total'          => $result['total'],
    //         'total_filtered' => $result['filtered'],
    //         'total_pages'    => ceil($result['filtered'] / $result['perPage']),
    //         'sort_by'        => $result['sortBy'],
    //         'sort_dir'       => $result['sortDir'],
    //         'q'              => $result['q'],
    //     ]);
    // }

    public function datatable(Request $request) {
        $data = RekapKpb::where(function($q) use ($request) {
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
                        $query->orWhere('month', 'ILIKE', "%_{$val}");
                    }
                });
            }
            if ($request->filled('bulan')) {
                $values = $request->input('bulan', []);

                $q->where(function ($query) use ($values) {
                    foreach ($values as $val) {
                        $query->orWhere('month', 'ILIKE', "{$val}_%");
                    }
                });
            }
            if ($request->filled('jenis_dealer')) {
                $q->whereHas('ahass', function ($query) use ($request) {
                    $query->whereIn('jenis_dealer', $request->input('jenis_dealer', []));
                });
            }
        });
        return DataTables::of($data)
            ->make(true);
    }
}
