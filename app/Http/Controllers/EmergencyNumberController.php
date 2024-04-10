<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmergencyNumberController extends Controller
{
    public function index(){
        return view('phonenumbers.emergency');
    }
}
