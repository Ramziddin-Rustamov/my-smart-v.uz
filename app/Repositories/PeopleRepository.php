<?php

namespace App\Repositories;

use App\Models\User;

class PeopleRepository
{

    public function getAllActiveUsers(){
        return User::orderBy('id','desc')->where('active_status','1')->get();
    }

    public function showOneUser($user)
    {
       $user = User::where('active_status','1')->where('id',$user)->first();
       return $user;
    }
}
