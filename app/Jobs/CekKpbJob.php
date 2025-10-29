<?php

namespace App\Jobs;

use App\Helpers\ExcelCekKpbHelper;
use App\Helpers\ExcelHelper;
use App\Imports\CekKpbImport;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class CekKpbJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $path;
    protected $fileName;
    protected $user_id;

    public function __construct($path, $fileName, $user_id = null)
    {
        $this->path = $path;
        $this->fileName = $fileName;
        $this->user_id = $user_id;
    }

    public function handle(): void
    {
        ini_set('max_execution_time', 0); // pastikan tidak timeout

        Log::info("🚀 Memulai import excel di background: {$this->path} {$this->job?->getJobId()}");
        try {
            ExcelCekKpbHelper::processExcelWithFormula($this->path, CekKpbImport::class, null, $this->fileName, $this->job?->getJobId());
            Log::info("✅ Import selesai: {$this->path}");
        } catch (\Throwable $e) {
            Log::error("❌ Gagal import {$this->path}: " . $e->getMessage());
        }
    }
}
