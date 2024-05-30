<?php

namespace App\Http\Controllers\API\v1\People;

use App\Http\Controllers\Controller;
use App\Services\PeopleService;
use App\Http\Resources\API\v1\User\UserResource;
use Illuminate\Http\Request;

class PeopleController extends Controller
{
    private $peopleService;

    public function __construct(PeopleService $peopleService)
    {
        $this->peopleService = $peopleService;
    }

    public function index()
    {
        $users = $this->peopleService->getAllActiveUsers();
        return UserResource::collection($users);
    }

    public function show($id)
    {
        $user = $this->peopleService->showOneUser($id);
        return new UserResource($user);
    }
}