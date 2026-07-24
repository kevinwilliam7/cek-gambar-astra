<?php

namespace App\Http\Controllers;

use App\Models\AstraWebc;
use App\Models\Ahass;
use Carbon\Carbon;
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

        $latestClaims = AstraWebc::query()
            ->join('ahass', 'astra_webcs.kode_ahass', '=', 'ahass.kode_ahass')
            ->whereNotNull('astra_webcs.tanggal_claim')
            ->where('astra_webcs.tanggal_claim', '!=', '')
            ->selectRaw("
                CASE 
                    WHEN ahass.jenis_dealer IN ('H23', 'H123') THEN 'Dealer'
                    ELSE 'SO'
                END as dealer_category,
                MAX(
                    CASE 
                        WHEN astra_webcs.tanggal_claim LIKE '%/%' THEN TO_DATE(astra_webcs.tanggal_claim, 'DD/MM/YYYY')
                        WHEN astra_webcs.tanggal_claim LIKE '____-__-__%' THEN TO_DATE(astra_webcs.tanggal_claim, 'YYYY-MM-DD')
                        ELSE TO_DATE(astra_webcs.tanggal_claim, 'DD-MM-YYYY')
                    END
                ) as latest_claim
            ")
            ->groupByRaw("
                CASE 
                    WHEN ahass.jenis_dealer IN ('H23', 'H123') THEN 'Dealer'
                    ELSE 'SO'
                END
            ")
            ->pluck('latest_claim', 'dealer_category');

        $missingPhashCounts = AstraWebc::query()
            ->join('ahass', 'astra_webcs.kode_ahass', '=', 'ahass.kode_ahass')
            ->whereNull('astra_webcs.phash')
            ->selectRaw("
                CASE 
                    WHEN ahass.jenis_dealer IN ('H23', 'H123') THEN 'Dealer'
                    ELSE 'SO'
                END as dealer_category,
                COUNT(*) as total
            ")
            ->groupByRaw("
                CASE 
                    WHEN ahass.jenis_dealer IN ('H23', 'H123') THEN 'Dealer'
                    ELSE 'SO'
                END
            ")
            ->pluck('total', 'dealer_category');

        $dashboard = [
            'missing_phash_total' => AstraWebc::whereNull('phash')->count(),
            'missing_phash_dealer' => $missingPhashCounts->get('Dealer', 0),
            'missing_phash_so' => $missingPhashCounts->get('SO', 0),
            'last_dealer_claim' => $this->formatDashboardDate($latestClaims->get('Dealer')),
            'last_so_claim' => $this->formatDashboardDate($latestClaims->get('SO')),
        ];

        return view('astra_webc.index', compact('ahass', 'validitas', 'jenis_dealer', 'dashboard'));
    }

    /**
     * Datatable source
     */
    public function datatable(Request $request)
    {
        $duplicatePhashes = AstraWebc::select('phash')
            ->whereNotNull('phash')
            ->groupBy('phash')
            ->havingRaw('COUNT(*) > 1');

        $query = AstraWebc::query()
            ->leftJoinSub($duplicatePhashes, 'duplicate_phashes', 'astra_webcs.phash', '=', 'duplicate_phashes.phash')
            ->select('astra_webcs.*')
            ->selectRaw('CASE WHEN duplicate_phashes.phash IS NULL THEN 0 ELSE 1 END as duplicates_count');

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

        return DataTables::of($query)
            ->addIndexColumn()
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

    private function formatDashboardDate(?string $value): string
    {
        if (!$value) {
            return '-';
        }

        return Carbon::parse($value)->format('d/m/Y');
    }
}
