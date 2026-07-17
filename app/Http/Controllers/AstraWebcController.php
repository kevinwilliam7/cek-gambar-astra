<?php

namespace App\Http\Controllers;

use App\Models\AstraWebc;
use App\Models\Ahass;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class AstraWebcController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $ahass = Ahass::get();

        $validitas = AstraWebc::select('validitas')
            ->distinct()
            ->whereNotNull('validitas')
            ->orderBy('validitas')
            ->pluck('validitas');

        return view('astra_webc.index', compact('ahass', 'validitas'));
    }

    /**
     * Datatable source
     */
    public function datatable(Request $request)
    {
        $query = AstraWebc::query();

        // Filter range tanggal_claim
        if ($request->filled('tanggal_claim_dari')) {
            $query->where('tanggal_claim', '>=', $request->tanggal_claim_dari);
        }
        if ($request->filled('tanggal_claim_sampai')) {
            $query->where('tanggal_claim', '<=', $request->tanggal_claim_sampai);
        }

        // Filter kode_ahass
        if ($request->filled('kode_ahass')) {
            $query->whereIn('kode_ahass', $request->input('kode_ahass', []));
        }

        // Filter validitas
        if ($request->filled('validitas')) {
            $query->whereIn('validitas', $request->input('validitas', []));
        }

        // Filter current_excel
        if ($request->filled('current_excel')) {
            $query->whereIn('current_excel', $request->input('current_excel', []));
        }

        // Filter elimination
        if ($request->filled('elimination')) {
            $query->whereIn('elimination', $request->input('elimination', []));
        }

        return DataTables::of($query)
            ->addIndexColumn()
            ->make(true);
    }
}
