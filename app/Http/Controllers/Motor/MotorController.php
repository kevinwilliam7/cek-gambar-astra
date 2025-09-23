<?php

namespace App\Http\Controllers\Motor;

use App\Http\Controllers\Controller;
use App\Models\Motor;
use App\Models\RekapKpb;
use App\Services\DatatableService;
use Carbon\Carbon;
use Illuminate\Http\Request;

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
        $result = DatatableService::apply(Motor::with(['kpb_kriteria', 'images'])->where(function($q) use ($request){
            if ($request->filled('type_motor')) {
                $q->whereIn('type_motor', $request->input('type_motor'));
            }
        }), $request,
            ['id', 'kode_nosin','type_motor'],
            ['id', 'kode_nosin','type_motor','created_at']
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
