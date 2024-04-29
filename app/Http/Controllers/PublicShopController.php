<?php

namespace App\Http\Controllers;

use App\Models\Shop;
use Illuminate\Http\Request;

class PublicShopController extends Controller
{
    public function publicView()
    {
        $shops = Shop::all();
        return view("public-shops.index",compact('shops'));
    }

}
