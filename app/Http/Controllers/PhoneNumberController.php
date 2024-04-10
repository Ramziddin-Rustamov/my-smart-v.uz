<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;

class PhoneNumberController extends Controller
{
    public function index(){
        $applicants = User::paginate(20);
        return view('phonenumbers.phonenumbers',[
            'applicants' =>$applicants
        ]);
    }
}
