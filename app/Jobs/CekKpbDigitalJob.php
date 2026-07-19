<?php

namespace App\Jobs;

use App\Helpers\ExcelCekKpbHelper;
use App\Imports\CekKpbDigitalImport;
use App\Models\Job;
use App\Models\LogActivity;
use Exception;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Log;

class CekKpbDigitalJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public $timeout = 3600; // 1 jam

    protected $path;
    protected $fileName;
    protected $user_id;
    protected $user_agent;
    protected $ip;

    public function __construct($path, $fileName, $user_id = null, $user_agent = null, $ip = null)
    {
        $this->path       = $path;
        $this->fileName   = $fileName;
        $this->user_id    = $user_id;
        $this->user_agent = $user_agent;
        $this->ip         = $ip;
    }

    public function handle(): void
    {
        ini_set('max_execution_time', 0);

        Log::info("🚀 Memulai import KPB Digital di background: {$this->path} {$this->job?->getJobId()}");
        try {
            ExcelCekKpbHelper::processExcelWithFormula(
                $this->path,
                CekKpbDigitalImport::class,
                null,
                $this->fileName,
                $this->job?->getJobId(),
                $this->user_id
            );
            Log::info("✅ Import KPB Digital selesai: {$this->path}");
            LogActivity::create([
                'file_name'    => $this->fileName,
                'logable_type' => Job::class,
                'logable_id'   => $this->job?->getJobId(),
                'user_id'      => $this->user_id,
                'ip_address'   => $this->ip,
                'user_agent'   => $this->user_agent,
                'status'       => 'success',
                'description'  => "{$this->fileName} berhasil.",
                'util'         => 'KPB Digital',
            ]);
        } catch (\Throwable $e) {
            Log::error("❌ Gagal import KPB Digital {$this->path}: " . $e->getMessage());
            LogActivity::create([
                'file_name'    => $this->fileName,
                'logable_type' => Job::class,
                'logable_id'   => $this->job?->getJobId(),
                'user_id'      => $this->user_id,
                'ip_address'   => $this->ip,
                'user_agent'   => $this->user_agent,
                'status'       => 'failed',
                'description'  => "{$this->fileName} gagal: " . $e->getMessage(),
                'util'         => 'KPB Digital',
            ]);
        }
    }

    public function failed(Exception $exception): void
    {
        LogActivity::create([
            'file_name'    => $this->fileName,
            'logable_type' => Job::class,
            'logable_id'   => $this->job?->getJobId(),
            'user_id'      => $this->user_id,
            'ip_address'   => $this->ip,
            'user_agent'   => $this->user_agent,
            'status'       => 'failed',
            'description'  => "{$this->fileName} gagal: " . $exception->getMessage(),
            'util'         => 'KPB Digital',
        ]);
    }
}
