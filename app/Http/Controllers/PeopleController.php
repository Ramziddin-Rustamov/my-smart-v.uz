<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;


class PeopleController extends Controller
{
    public function index(){
        $users = User::orderBy('id','desc')->where('active_status','1')->get();
        return view('people.index',compact('users'));
    }

    public function show($user)
    {
       $user = User::where('active_status','1')->where('id',$user)->first();
       return view('people.show',compact('user'));
    }
}
