<?php

namespace App\Services;

use App\Models\User;
use App\Repositories\PeopleRepository;

class PeopleService
{
    private $peopleRepository;
   public function __construct(PeopleRepository $repo)
   {
     $this->peopleRepository = $repo;
   }

   public function getAllActiveUsers()
   {
     return $this->peopleRepository->getAllActiveUsers();
   }

   public function showOneUser($user)
   {
    return $this->peopleRepository->showOneUser($user);
   }
}