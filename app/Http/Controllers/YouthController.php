<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class YouthController extends Controller
{
    public function index()
    {
        $users = User::where('active_status','1')->get();
        return view("youth.index",[
            "users" => $users
        ]);
    }
}
