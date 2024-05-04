<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Cache;

class PrayService
{
    public function getPayDate()
    {
        return Cache::remember('paray_time', now()->addMinutes(50), function () {
             $response = Http::get('https://api.aladhan.com/v1/timingsByCity/10-04-2024?city=Samarkand&country=Uzbekistan&method=8');
             $time = $response->json(); 
             return $time;
        });
    }
}
