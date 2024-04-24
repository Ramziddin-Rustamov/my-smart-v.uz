<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;

class PeopleController extends Controller
{
    public function index(){
        $users = User::orderBy('id')->get();

        return view('people.index',compact('users'));
    }
}
