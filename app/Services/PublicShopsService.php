<?php

namespace App\Services;

use App\Repositories\PublicShopsRepository;

class PublicShopsSerive
{
   private $publicShopsRepository;
   
   public function __construct(PublicShopsRepository $publicShopsRepository)
   {
     $this->publicShopsRepository = $publicShopsRepository;
   }

   public function publicShops()
   {
      $this->publicShopsRepository->publicShops();
   }

}