<?php

namespace App\Services;
use App\Models\User;
use Illuminate\Support\Facades\Cache;

class TeamService
{
    public  function getTeamMembers()
    {
        return Cache::remember('count.User', now()->addSecond(60), function () {
            return User::has('teamMembers')->get();
        });
    }

}