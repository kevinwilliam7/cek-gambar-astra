<?php

namespace App\Http\Controllers;

use App\Jobs\CekKpbJob;
use App\Models\CekKpb;
use App\Models\FailedJob;
use App\Models\Job;
use App\Models\Motor;
use App\Services\DatatableService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CekKpbController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pendingJobs = Job::get();
        $failedUuids = FailedJob::pluck('uuid')->toArray();

        $jobs = $pendingJobs->map(function ($job) use ($failedUuids) {
            $payload = json_decode($job->payload, true);

            $info = [
                'uuid' => $payload['uuid'] ?? $job->uuid ?? '-',
                'job_name' => class_basename($payload['displayName'] ?? ''),
                'file_name' => null,
                'status' => 'Processing',
                'created_at' => isset($payload['createdAt'])
                    ? date('Y-m-d H:i:s', $payload['createdAt'])
                    : $job->created_at,
            ];

            try {
                if (!empty($payload['data']['command'])) {
                    $command = unserialize($payload['data']['command']);

                    // Gunakan reflection untuk ambil nilai properti privat `path`
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

        return view('cek_kpb.index', compact('jobs'));
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
        try {
            foreach ($request->excels as $index => $excel_file) {
                $filename = time() . '_' . str_replace(' ', '_', $excel_file->getClientOriginalName());
                $path = $excel_file->storeAs('tes_cek_kpb', $filename);
                $realPath = file_exists($path)
                    ? $path
                    : storage_path('app/private/tes_cek_kpb/' . basename($path));
                CekKpbJob::dispatch($realPath, $excel_file->getClientOriginalName(), Auth::user()->id);
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
        $result = DatatableService::apply(
            CekKpb::with(['notes', 'user'])->where(function($q) use ($request) {
                if ($request->filled('status_description')) {
                    $q->whereIn('status_description', $request->input('status_description', []));
                }
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
                if ($request->filled('tahun')) {
                    $values = $request->input('tahun', []);

                    $q->where(function ($query) use ($values) {
                        foreach ($values as $val) {
                            $query->orWhere('month', 'ILIKE', "%_{$val}");
                        }
                    });
                }
                if ($request->filled('bulan')) {
                    $values = $request->input('bulan', []);

                    $q->where(function ($query) use ($values) {
                        foreach ($values as $val) {
                            $query->orWhere('month', 'ILIKE', "{$val}_%");
                        }
                    });
                }
            }),
            $request,
            ['file_name', 'md_code', 'md_name', 'engine', 'km', 'user_id'],
            ['file_name', 'md_code', 'md_name', 'engine', 'km', 'user_id']
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
