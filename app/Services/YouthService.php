<?php

namespace App\Services;
use App\Models\User;
use Illuminate\Support\Facades\Cache;

class YouthService
{
    public  function getAll()
    {
        return Cache::remember('all.youth', now()->addSecond(60), function () {
            return User::where('active_status', '1')
               ->whereHas('profiles', function($query) {
                   $query->whereRaw('TIMESTAMPDIFF(YEAR, user_profiles.birthday, CURDATE()) <= ?', [25]);
               })
               ->with('profiles')
               ->get();
        });
    }

    public function searchByName($name){
       return  User::where('active_status', '1')
        ->where(function($query) use ($name) {
            $query->where('first_name', 'like', '%' . $name . '%');
        })
        ->whereHas('profiles', function($query) {
            $query->whereRaw('TIMESTAMPDIFF(YEAR, user_profiles.birthday, CURDATE()) <= ?', [25]);
        })
        ->with('profiles')
        ->get();
    }

    public function searchBySurname($surname)
    {
       return  User::where('active_status', '1')
        ->where(function($query) use ($surname) {
            $query->Where('last_name', 'like', '%' . $surname . '%');
        })
        ->whereHas('profiles', function($query) {
            $query->whereRaw('TIMESTAMPDIFF(YEAR, user_profiles.birthday, CURDATE()) <= ?', [25]);
        })
        ->with('profiles')
        ->get();
    }

}