<?php

namespace App\Http\Controllers;

use App\Models\Ahass;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class AhassController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $wilayah = Ahass::select('wilayah')
            ->distinct()
            ->pluck('wilayah');
        $jenis_dealer = Ahass::select('jenis_dealer')
            ->distinct()
            ->pluck('jenis_dealer');
        $data = [
            'wilayah' => $wilayah,
            'jenis_dealer' => $jenis_dealer,
        ];
        return view('ahass.index', compact('data'));
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
        $data = Ahass::where(function ($q) use ($request) {
            if ($request->filled('wilayah')) {
                $q->whereIn('wilayah', $request->input('wilayah', []));
            }
            if ($request->filled('jenis_dealer')) {
                $q->whereIn('jenis_dealer', $request->input('jenis_dealer', []));
            }
        });
        return DataTables::of($data)
            ->make(true);
    }
}
