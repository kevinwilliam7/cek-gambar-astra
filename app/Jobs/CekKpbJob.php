<?php

namespace App\Jobs;

use App\Helpers\ExcelCekKpbHelper;
use App\Helpers\ExcelHelper;
use App\Imports\CekKpbImport;
use App\Models\Job;
use App\Models\LogActivity;
use Exception;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Throwable;

class CekKpbJob implements ShouldQueue
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
        $this->path = $path;
        $this->fileName = $fileName;
        $this->user_id = $user_id;
        $this->user_agent = $user_agent;
        $this->ip = $ip;
    }

    public function handle(): void
    {
        ini_set('max_execution_time', 0); // pastikan tidak timeout

        Log::info("🚀 Memulai import excel di background: {$this->path} {$this->job?->getJobId()}");
        try {
            ExcelCekKpbHelper::processExcelWithFormula($this->path, CekKpbImport::class, null, $this->fileName, $this->job?->getJobId(), $this->user_id);
            Log::info("✅ Import selesai: {$this->path}");
            LogActivity::create([
                'file_name' => $this->fileName,
                'logable_type' => Job::class,
                'logable_id' => $this->job?->getJobId(),
                'user_id' => $this->user_id,
                'ip_address' => $this->ip,
                'user_agent' => $this->user_agent,
                'status' => 'success',
                'description' => "$this->fileName berhasil.",
            ]);
        } catch (\Throwable $e) {
            Log::error("❌ Gagal import {$this->path}: " . $e->getMessage());
            LogActivity::create([
                'file_name' => $this->fileName,
                'logable_type' => Job::class,
                'logable_id' => $this->job?->getJobId(),
                'user_id' => $this->user_id,
                'ip_address' => $this->ip,
                'user_agent' => $this->user_agent,
                'status' => 'failed',
                'description' => "$this->fileName gagal: " . $e->getMessage(),
            ]);
        }
    }

    public function failed(Exception $exception) {
        LogActivity::create([
            'file_name' => $this->fileName,
            'logable_type' => Job::class,
            'logable_id' => $this->job?->getJobId(),
            'user_id' => $this->user_id,
            'ip_address' => $this->ip,
            'user_agent' => $this->user_agent,
            'status' => 'failed',
            'description' => "$this->fileName gagal: " . $exception->getMessage(),
        ]);
    }
}
