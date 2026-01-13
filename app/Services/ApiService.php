<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Session;

class ApiService
{
    protected $baseUrl;

    public function __construct()
    {
        $this->baseUrl = env('BACKEND_API_URL', 'https://restcountries.com/v3.1/name/mexico');
    }

    public function fetchData()
    {
        try {
            $response = Http::timeout(30)
                ->get($this->baseUrl);

            if ($response->successful()) {
                return $response->json();
            }

            return null;
        } catch (\Exception $e) {
            \Log::error('API Service Error: ' . $e->getMessage());
            return null;
        }
    }
}

