<?php

namespace App\Http\Controllers\Motor;

use App\Http\Controllers\Controller;
use App\Models\Motor;
use App\Services\DatatableService;
use Illuminate\Http\Request;

class MotorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('motor.index');
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
        $result = DatatableService::apply(Motor::with(['kpb_kriteria']), $request,
            ['kode_nosin','type_motor'],
            ['order','kode_nosin','type_motor','created_at']
        );

        return response()->json([
            'data'           => $result['rows'],
            'page'           => $result['page'],
            'per_page'       => $result['perPage'],
            'total'          => $result['total'],
            'total_filtered' => $result['filtered'],
            'total_pages'    => ceil($result['total'] / $result['perPage']),
            'sort_by'        => $result['sortBy'],
            'sort_dir'       => $result['sortDir'],
            'q'              => $result['q'],
        ]);
    }
}
