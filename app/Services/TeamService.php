<?php

namespace App\Services;

use App\Repositories\TeamRepository;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Auth;

class TeamService
{
    protected $teamRepository;

    public function __construct(TeamRepository $teamRepository)
    {
        $this->teamRepository = $teamRepository;
    }

    public function getTeamMembers()
    {
        return Cache::remember('count.User', now()->addSecond(1), function () {
            $villageId = $this->getVillageId();
            if ($villageId) {
                return $this->teamRepository->getTeamMembersByQuarterId($villageId);
            }
            return collect();
        });
    }

    private function getVillageId()
    {
        if ($user = Auth::user()) {
            if ($quarter = $user->quarter) {
                return $quarter->id;
            }
        }
        return null;
    }
}
