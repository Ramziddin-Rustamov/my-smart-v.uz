<?php

namespace App\Http\Controllers;

use App\Services\TeamService;

class TeamController extends Controller
{

    private $teamServie;


    public function __construct(TeamService $teamSerive)
    {
        $this->teamServie = $teamSerive;
    }


    public function index()
    {
        $teamMembers = $this->teamServie->getTeamMembers();
        return view('team.index',compact('teamMembers'));
    }

    
}
