<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Services\PeopleService;
use Illuminate\Http\Request;


class PeopleController extends Controller
{
    private $peopleService;

    public function __construct(PeopleService $peopleService)
    {
        $this->peopleService = $peopleService;
    }
    public function index(){
        $users = $this->peopleService->getAllActiveUsers();
        return view('people.index',compact('users'));
    }

    public function show($user)
    {
        $user = $this->peopleService->showOneUser($user);
       return view('people.show',compact('user'));
    }
}
