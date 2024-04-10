<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;

class PrayController extends Controller
{
    public function index(){
        $response = Http::get('https://api.aladhan.com/v1/timingsByCity/10-04-2024?city=Samarkand&country=Uzbekistan&method=8');
        $time = $response->json();

        return view("pray.index");
        // if($response->successful()) {
        //     $prayerTimes = $time['data']['timings'];
            
        //     // Print or process the prayer times
        //     foreach ($prayerTimes as $key => $value) {
        //         echo $key . ': ' . $value . '<br>';
        //     }
        // } else {
        //     // Handle error if request was not successful
        //     echo "Error: Unable to fetch prayer times.";
        // }
    }
}
