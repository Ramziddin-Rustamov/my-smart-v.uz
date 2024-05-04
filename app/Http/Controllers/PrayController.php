<?php

namespace App\Http\Controllers;

use App\Services\PrayService;
use Illuminate\Http\Request;

class PrayController extends Controller
{

    private $prayService;
    public function __construct(PrayService $prayService)
    {
        $this->prayService = $prayService;
    }
    public function index(){

        $time = $this->prayService->getPayDate();
        return view("pray.index",['time' => $time]);
    }
}
