<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;

class GeminiService
{
    protected $apiKey;
    protected $baseUrl;
    protected $model;

    public function __construct()
    {
        $this->model = 'gemini-flash-latest';
        $this->apiKey = config('services.gemini.key');
        $this->baseUrl = 'https://generativelanguage.googleapis.com/v1beta/models/' . $this->model . ':generateContent?key=' . $this->apiKey;
    }

    public function generateText($prompt)
    {
        // 3. Masukkan API Key sebagai query parameter atau header
        $response = Http::timeout(60)
            ->withHeaders(['Content-Type' => 'application/json'])
            ->post($this->baseUrl, [
                'contents' => [
                    [
                        'parts' => [
                            ['text' => $prompt]
                        ]
                    ]
                ]
            ]);
        return $response->json();
    }
}
