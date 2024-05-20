<?php

namespace App\Repositories;

use App\Models\User;

class TeamRepository
{
    public function getTeamMembersByQuarterId($quarterId)
    {
        return User::where('quarter_id', $quarterId)->has('teamMembers')->get();
    }
}
