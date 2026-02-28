<?php

namespace App\Http\Controllers\Motor;

use App\Http\Controllers\Controller;
use App\Http\Requests\Motor\StoreRequest;
use App\Http\Requests\Motor\UpdateRequest;
use App\Models\KpbKriteria;
use App\Models\Motor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Yajra\DataTables\Facades\DataTables;

class MotorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $motor = Motor::get()->unique('type_motor');
        $data = [
            'motor' => $motor,
        ];
        return view('motor.index', compact('data'));
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
    public function store(StoreRequest $request)
    {
        try {
            DB::beginTransaction();
            $motor = Motor::with(['kpb_kriteria'])->create([
                'kode_nosin' => $request->kode_nosin,
                'type_motor' => $request->type_motor,
                'deskripsi' => $request->description,
            ]);
            for ($i = 0; $i < 4; $i++) {
                if ($request->hari_maksimum[$i] == null && $request->km_maksimum[$i] == null && $request->material[$i] == null && $request->jasa[$i] == null) {
                } else {
                    $kpb_kriteria = KpbKriteria::firstOrCreate(
                        [
                            'kode_nosin' => $request->kode_nosin,
                            'kpb_type' => 'KPB ' . ($i + 1),
                            'hari_maksimum' => $request->hari_maksimum[$i],
                            'km_maksimum' => $request->km_maksimum[$i],
                            'material' => $request->material[$i],
                            'jasa' => $request->jasa[$i],
                        ]
                    );
                }
            }
            DB::commit();
            return response()->json(['status' => true, 'message' => 'Successfully added data']);
        } catch (\Exception $e) {
            DB::rollback();
            return response()->json(['status' => false, 'message' => $e->getMessage()]);
        }
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
    public function update(UpdateRequest $request)
    {
        try {
            DB::beginTransaction();
            Motor::with(['kpb_kriteria'])->findOrFail($request->id)->update([
                'kode_nosin' => $request->kode_nosin,
                'type_motor' => $request->type_motor,
                'deskripsi' => $request->description,
            ]);
            for ($i = 0; $i < 4; $i++) {
                if ($request->hari_maksimum[$i] == null && $request->km_maksimum[$i] == null && $request->material[$i] == null && $request->jasa[$i] == null) {
                    $kpb_kriteria = KpbKriteria::where('kode_nosin', $request->kode_nosin)
                        ->where('kpb_type', 'KPB ' . ($i + 1))
                        ->first();
                    $kpb_kriteria !== null ? $kpb_kriteria->delete() : null;
                } else {
                    $kpb_kriteria = KpbKriteria::updateOrCreate(
                        [
                            'kode_nosin' => $request->kode_nosin,
                            'kpb_type' => 'KPB ' . ($i + 1),
                        ],
                        [
                            'hari_maksimum' => $request->hari_maksimum[$i],
                            'km_maksimum' => $request->km_maksimum[$i],
                            'material' => $request->material[$i],
                            'jasa' => $request->jasa[$i],
                        ]
                    );
                }
            }
            $motor = Motor::findOrFail($request->id);
            if (isset($request->link_foto) && is_array($request->link_foto) && count($request->link_foto) > 0) {
                // 1. Ambil semua filename yang dikirim sekarang
                $newFilenames = array_values($request->link_foto); // pastikan indexed array

                // 2. Hapus gambar yang tidak ada lagi di list baru
                $motor->images()
                    ->whereNotIn('filename', $newFilenames)
                    ->delete();

                // 3. Update / create gambar yang dikirim
                foreach ($request->link_foto as $key => $filename) {
                    $motor->images()->updateOrCreate(
                        ['filename' => $filename],
                        ['deskripsi' => $request->deskripsi_speedometer[$key] ?? null]
                    );
                }
            } else {
                // Tidak ada link_foto → hapus semua
                $motor->images()->delete();
            }
            DB::commit();
            Log::error('MotorController Update SUCCESS');
            return response()->json(['status' => true, 'message' => 'Successfully updated data']);
        } catch (\Exception $e) {
            DB::rollback();
            Log::error('MotorController Update ERROR: ' . $e->getMessage());
            return response()->json(['status' => false, 'message' => $e->getMessage()], 400);
        }
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
        $data = Motor::with(['kpb_kriteria' => function ($q) {
            $q->orderBy('kpb_type', 'asc'); // urut ascending berdasarkan kpb_type
        }, 'images'])->where(function ($q) use ($request) {
            if ($request->filled('type_motor')) {
                $q->whereIn('type_motor', $request->input('type_motor', []));
            }
        });
        return DataTables::of($data)
            ->make(true);
    }

    // public function datatable(Request $request)
    // {
    //     $result = DatatableService::apply(Motor::with(['kpb_kriteria' => function($q) {
    //         $q->orderBy('kpb_type', 'asc'); // urut ascending berdasarkan kpb_type
    //     }, 'images'])->where(function($q) use ($request){
    //         if ($request->filled('type_motor')) {
    //             $q->whereIn('type_motor', $request->input('type_motor'));
    //         }
    //     }), $request,
    //         ['id', 'kode_nosin','type_motor'],
    //         ['id', 'kode_nosin','type_motor','created_at']
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
}
