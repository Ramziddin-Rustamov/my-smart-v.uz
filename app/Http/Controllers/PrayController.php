<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;

class PrayController extends Controller
{
    public function index(){
        $response = Http::get('https://api.aladhan.com/v1/timingsByCity/10-04-2024?city=Samarkand&country=Uzbekistan&method=8');
        $time = $response->json();

        return view("pray.index",[
            'time' => $time
        ]);
    }
}
