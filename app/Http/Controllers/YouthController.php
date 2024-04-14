<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class YouthController extends Controller
{
    public function index()
    {
       
        return view("youth.index");
    }
}
