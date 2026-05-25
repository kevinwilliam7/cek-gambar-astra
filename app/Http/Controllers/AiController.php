<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Storage;
use Laravel\Ai\Files;

class AiController extends Controller
{
    public function index(Request $request)
    {
        $imageUrl = 'https://hana.modakita.com/azd942/avatar/21503173920260408110903ELVL6L.jpg';

        // Download gambar dari URL ke storage sementara
        $imageContent = Http::get($imageUrl)->body();
        $tempPath = 'temp/' . uniqid() . '.jpg';
        Storage::put($tempPath, $imageContent);

        // Kirim ke Laravel AI
        $response = \Laravel\Ai\agent(
            instructions: 'Kamu adalah asisten yang menganalisis gambar foto speedometer.',
        )->prompt(
            'Gambar ini menunjukkan apa? Deskripsikan kilometer yang ditunjukkan, kemudian jenis kilometer apakah total, average atau km trip dan berikan jenis kode nosinnya (hanya sebutkan 1 jenis kode nosinnya) serta jenis motornya. Kemudian kasi tau juga warna dari motor tersebut serta jika terdapat keraguan berikan deskripsi. Serta jika foto ada watermark maka kasi tanda bahwa foto ini memiliki watermark dengan nilai true atau false. Berikan jawaban dalam format JSON dengan key "kilometer", "jenis_kilometer", "kode_nosin", "jenis_motor", "warna_motor", "deskripsi", dan "watermark".',
            attachments: [
                Files\Image::fromPath(Storage::disk('local')->path($tempPath)),
            ]
        );

        // Hapus file temporary setelah selesai
        Storage::delete($tempPath);

        $text = trim($response->text);
        $text = preg_replace('/^```json\s*|\s*```$/i', '', $text);
        if (preg_match('/\{.*\}/s', $text, $matches)) {
            $text = $matches[0];
        }

        $data = json_decode($text, true);
        if (json_last_error() !== JSON_ERROR_NONE) {
            return response()->json([
                'error' => 'Invalid JSON from model',
                'raw' => $response->text,
            ], 422);
        }

        return response()->json($data);
    }
}
