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

        $jenis_dealer = Ahass::select('jenis_dealer')
            ->distinct()
            ->whereNotNull('jenis_dealer')
            ->orderBy('jenis_dealer')
            ->pluck('jenis_dealer');

        return view('astra_webc.index', compact('ahass', 'validitas', 'jenis_dealer'));
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

        // Filter foto_sama (phash duplikat)
        if ($request->filled('foto_sama') && in_array('1', $request->input('foto_sama', []))) {
            $query->whereNotNull('phash')
                  ->whereIn('phash', function ($q) {
                      $q->select('phash')
                        ->from('astra_webcs')
                        ->whereNotNull('phash')
                        ->groupBy('phash')
                        ->havingRaw('COUNT(*) > 1');
                  });
        }
        // Filter jenis_dealer (via relasi ahass)
        if ($request->filled('jenis_dealer')) {
            $query->whereHas('ahass', function ($q) use ($request) {
                $q->whereIn('jenis_dealer', $request->input('jenis_dealer', []));
            });
        }

        // Pre-compute phash yang duplikat (1 query, bukan correlated subquery)
        $duplicatePhashes = AstraWebc::select('phash')
            ->whereNotNull('phash')
            ->groupBy('phash')
            ->havingRaw('COUNT(*) > 1')
            ->pluck('phash')
            ->toArray();

        return DataTables::of($query)
            ->addIndexColumn()
            ->addColumn('duplicates_count', function ($row) use ($duplicatePhashes) {
                return in_array($row->phash, $duplicatePhashes) ? 1 : 0;
            })
            ->make(true);
    }

    /**
     * Get duplicate rows by phash (for expand child row)
     */
    public function getDuplicates(Request $request)
    {
        $phash = $request->input('phash');
        $excludeId = $request->input('exclude_id');

        if (!$phash) {
            return response()->json([]);
        }

        $rows = AstraWebc::where('phash', $phash)
            ->when($excludeId, fn($q) => $q->where('id', '!=', $excludeId))
            ->get(['id', 'kode_ahass', 'nama_ahass', 'nomor_mesin', 'type_motor', 'tanggal_beli', 'no_rangka', 'kpb_type', 'tanggal_claim', 'km', 'filename']);

        return response()->json($rows);
    }
}
