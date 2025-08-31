<?php

namespace App\Http\Controllers;

use App\Models\Ahass;
use App\Services\DatatableService;
use Illuminate\Http\Request;

class AhassController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
        $result = DatatableService::apply(Ahass::query(), $request,
            ['nama_ahass','kode_ahass'],
            ['id','nama_ahass','kode_ahass','created_at']
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
