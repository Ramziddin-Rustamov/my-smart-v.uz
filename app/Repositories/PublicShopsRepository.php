<?php

namespace App\Repositories;

use App\Models\Shop;
use Illuminate\Support\Facades\Cache;

class PublicShopsRepository
{

    public function publicShops(){

        $cacheKey = 'shops';
         return Cache::remember($cacheKey, now()->addMinute(20), function () {
            return Shop::orderBy('id','desc')->get();
        });

     }
}


