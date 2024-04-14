<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;

class PeopleController extends Controller
{
    public function index(){
        return view('people.index');
    }
}
