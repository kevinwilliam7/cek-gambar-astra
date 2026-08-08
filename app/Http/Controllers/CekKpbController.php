<?php

namespace App\Http\Controllers;

use App\Jobs\CekKpbJob;
use App\Models\CekKpb;
use App\Models\CekKpbProgress;
use App\Models\FailedJob;
use App\Models\Job;
use App\Models\LogActivity;
use App\Models\Motor;
use App\Services\DatatableService;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Jenssegers\Agent\Facades\Agent;
use Yajra\DataTables\Facades\DataTables;

class CekKpbController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $motor = Motor::get()->unique('type_motor');
        $service_id = [1,2,3,4];
        $data = [
            'motor' => $motor,
            'service_id' => $service_id,
        ];
        return view('cek_kpb.index', compact('data'));
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    public function getProgressJobList()
    {
        $pendingJobs = Job::with('cek_kpb_progress')->get();
        $failedUuids = FailedJob::pluck('uuid')->toArray();

        $jobs = $pendingJobs->map(function ($job) use ($failedUuids) {
            $payload = json_decode($job->payload, true);

            $info = [
                'id' => $job['id'],
                'uuid' => $payload['uuid'] ?? $job->uuid ?? '-',
                'job_name' => class_basename($payload['displayName'] ?? ''),
                'file_name' => null,
                'status' => 'Processing',
                'detail' => $job->cek_kpb_progress,
                'created_at' => isset($payload['createdAt'])
                    ? date('Y-m-d H:i:s', $payload['createdAt'])
                    : $job->created_at,
            ];

            // Ambil file_name dari payload command
            try {
                if (!empty($payload['data']['command'])) {
                    $command = unserialize($payload['data']['command']);
                    $ref = new \ReflectionClass($command);

                    if ($ref->hasProperty('path')) {
                        $prop = $ref->getProperty('path');
                        $prop->setAccessible(true);
                        $path = $prop->getValue($command);
                        $info['file_name'] = basename($path);
                    } else {
                        $info['file_name'] = '(path kosong)';
                    }
                }
            } catch (\Throwable $e) {
                $info['file_name'] = '[Error unserialize]';
            }

            // Tentukan status
            if (in_array($info['uuid'], $failedUuids)) {
                $info['status'] = 'failed';
            }

            return (object) $info;
        });

        return response()->json($jobs);
    }


    public function getProgressJob($jobId)
    {
        $failedUuids = FailedJob::pluck('uuid')->toArray();

        // Ambil job dengan relasi cek_kpb_progress
        // $job = Job::with('cek_kpb_progress')->find($jobId);
        $cek_kpb_progress = CekKpbProgress::where('job_id', $jobId)->with('job')->first();
        $job = $cek_kpb_progress ? $cek_kpb_progress->job : null;

        if (!$cek_kpb_progress) {
            return response()->json(null, 404); // job tidak ditemukan
        }

        // Ambil payload dan buat info object
        $payload = json_decode($job?->payload, true);

        $info = [
            'uuid' => $payload['uuid'] ?? $job->uuid ?? '-',
            'detail' => $cek_kpb_progress,
        ];

        // Ambil file_name dari payload
        try {
            if (!empty($payload['data']['command'])) {
                $command = unserialize($payload['data']['command']);
                $ref = new \ReflectionClass($command);

                if ($ref->hasProperty('path')) {
                    $prop = $ref->getProperty('path');
                    $prop->setAccessible(true);
                    $path = $prop->getValue($command);
                    $info['file_name'] = basename($path);
                } else {
                    $info['file_name'] = '(path kosong)';
                }
            }
        } catch (\Throwable $e) {
            $info['file_name'] = '[Error unserialize]';
        }

        // Tentukan status
        if (in_array($info['uuid'], $failedUuids)) {
            $info['status'] = 'failed';
        }

        // Hitung progress
        $progress = $cek_kpb_progress->progress ?? 0;
        $total = $cek_kpb_progress->total ?? 0.0000001;
        $percent = ($total > 0) ? ($progress / $total * 100) : 0;

        return response()->json([
            'uuid' => $info['uuid'],
            'file_name' => $cek_kpb_progress->file_name ?? $info['file_name'] ?? null,
            'progress' => $progress,
            'total' => $total,
            'percent' => $percent,
        ]);
    }

    public function getAllLogJobList() {
        $logs = LogActivity::where('logable_type', 'ilike', '%Job%')
            ->whereNull('util')
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

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            foreach ($request->excels as $index => $excel_file) {
                $filename = time() . '_' . str_replace(' ', '_', $excel_file->getClientOriginalName());
                $path = $excel_file->storeAs('tes_cek_kpb', $filename);
                $realPath = file_exists($path)
                    ? $path
                    : storage_path('app/private/tes_cek_kpb/' . basename($path));
                CekKpbJob::dispatch($realPath, $excel_file->getClientOriginalName(), Auth::user()->id, $request->header('User-Agent'), $request->header('X-Forwarded-For'));
            }
            return response()->json([
                'queued' => true,
                'message' => "File ke-" . ($index + 1) . " sedang diproses di background."
            ]);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Terjadi kesalahan saat menyimpan data.'], 500);
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
        $data = CekKpb::with(['notes', 'user'])->where(function($q) use ($request) {
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
        });
        return DataTables::of($data)
            ->rawColumns(['notes'])
            ->make(true);
    }

    // public function datatable(Request $request)
    // {
    //     $result = DatatableService::apply(
    //         CekKpb::with(['notes', 'user'])->where(function($q) use ($request) {
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
    //         ['file_name', 'md_code', 'md_name', 'engine', 'km', 'user_id', 'notes.message'],
    //         ['file_name', 'md_code', 'md_name', 'engine', 'km', 'user_id']
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
