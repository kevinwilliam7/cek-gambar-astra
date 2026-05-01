<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class PredictSpeedometerCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:predict-speedometer-command';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        // $link = 'https://fruitbasket.blob.core.windows.net/gk2o5k/avatar/21047155820250714175732DTWJ1P.jpg';
        // // ambil gambar dari link dan simpan sementara
        // $imageContents = file_get_contents($link);
        // $tempImagePath = sys_get_temp_dir() . '/' . uniqid('speedometer_') . '.jpg';
        // file_put_contents($tempImagePath, $imageContents);
        // $fullPath = realpath($tempImagePath);

        // // Panggil Python script untuk prediksi ONNX
        // $output = shell_exec("python " . escapeshellarg(base_path('public/python/predict_motor_onnx.py')) . " " . escapeshellarg($fullPath));
        // $result = json_decode($output, true);
        // dd($result);
        // $model = $result['model'] ?? 'Tidak diketahui';
        // $confidence = $result['confidence'] ?? 0;
        // $logits = floatval($confidence); // dari Python
        // // jika output softmax belum, sebaiknya ubah di Python agar sudah softmax
        // $confidencePercent = round($logits * 100, 2);
        // $this->info("Model: $model, Confidence: $confidencePercent"."%");

        $gemini = new \App\Services\GeminiService();
            $result = $gemini->generateText("Buatkan deskripsi singkat tentang Laravel");
            dd($result);
            return response()->json($result);
    }
}
