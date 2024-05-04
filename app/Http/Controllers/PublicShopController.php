<?php

namespace App\Http\Controllers;

use App\Models\Shop;
use App\Services\PublicShopsSerive;
use Illuminate\Http\Request;

class PublicShopController extends Controller
{
    
    private $publicShopsService;



    public function __construct(PublicShopsSerive $publicShops)
    {
        $this->publicShopsService = $publicShops;
    }


    public function publicView()
    {
        $shops = $this->publicShopsService->publicShops();
        return view("public-shops.index",compact('shops'));
    }

}
