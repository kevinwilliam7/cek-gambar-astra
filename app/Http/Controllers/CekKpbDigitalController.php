<?php

namespace App\Http\Controllers;

use App\Jobs\CekKpbDigitalJob;
use App\Models\CekKpbDigital;
use App\Models\LogActivity;
use App\Models\Motor;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Yajra\DataTables\Facades\DataTables;

class CekKpbDigitalController extends Controller
{
    public function index()
    {
        $motor      = Motor::get()->unique('type_motor');
        $service_id = [1, 2, 3, 4];
        $data = [
            'motor'      => $motor,
            'service_id' => $service_id,
        ];
        return view('cek_kpb_digital.index', compact('data'));
    }

    public function datatable(Request $request)
    {
        $duplicateEngines = CekKpbDigital::select('engine')
            ->whereNotNull('engine')
            ->groupBy('engine')
            ->havingRaw('COUNT(*) > 1')
            ->pluck('engine')
            ->toArray();

        $query = CekKpbDigital::with(['notes', 'user'])
            ->where(function ($q) use ($request) {
                if ($request->filled('type_motor')) {
                    $values = $request->input('type_motor', []);
                    $motor  = Motor::whereIn('type_motor', $values)->pluck('kode_nosin');
                    $q->where(function ($query) use ($motor) {
                        foreach ($motor as $val) {
                            $query->orWhere('engine', 'ILIKE', "%{$val}%");
                        }
                    });
                }
                if ($request->filled('service_id')) {
                    $q->whereIn('service_id', $request->input('service_id', []));
                }
            });

        return DataTables::of($query)
            ->addIndexColumn()
            ->addColumn('has_duplicates', function ($row) use ($duplicateEngines) {
                return in_array($row->engine, $duplicateEngines) ? 1 : 0;
            })
            ->addColumn('kode_nosin', function ($row) {
                return $row->engine ? substr($row->engine, 0, 5) : null;
            })
            ->make(true);
    }

    public function getAllLogJobList() {
        $logs = LogActivity::where('logable_type', 'ilike', '%Job%')
            ->where('util', 'KPB Digital')
            ->limit(10)
            ->orderBy('created_at', 'desc')
            ->get();

        // Format created_at menjadi "5 Agustus 2025 05:00 WIB"
        Carbon::setLocale('id'); // untuk nama bulan dalam bahasa Indonesia

        $logs->transform(function($log) {
            // ubah timezone ke Asia/Jakarta
            $created = Carbon::parse($log->created_at)->timezone('Asia/Jakarta');
            $log->created_at_human = $created->translatedFormat('j F Y H:i') . ' WIB';
            return $log;
        });

        return response()->json($logs);
    }


    public function store(Request $request)
    {
        try {
            foreach ($request->excels as $index => $excel_file) {
                $filename = time() . '_' . str_replace(' ', '_', $excel_file->getClientOriginalName());
                $path     = $excel_file->storeAs('tes_cek_kpb_digital', $filename);
                $realPath = file_exists($path)
                    ? $path
                    : storage_path('app/private/tes_cek_kpb_digital/' . basename($path));

                CekKpbDigitalJob::dispatch(
                    $realPath,
                    $excel_file->getClientOriginalName(),
                    Auth::user()->id,
                    $request->header('User-Agent'),
                    $request->header('X-Forwarded-For')
                );
            }
            return response()->json([
                'queued'  => true,
                'message' => 'File Digital ke-' . ($index + 1) . ' sedang diproses di background.',
            ]);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Terjadi kesalahan saat menyimpan data.'], 500);
        }
    }
}