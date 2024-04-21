<?php

namespace App\Repositories;

use App\Models\Shop;
use Illuminate\Support\Facades\Auth;

class ShopRepository
{

    public function getAll(){
        return Shop::orderBy('id','desc')->where('user_id', auth()->user()->id)->get();
    }
    public function create(array $data)
    {
        $auth = Auth::id();
        $data["user_id"] = $auth;
        return Shop::create($data);
    }

    public function update(Shop $shop, array $data)
    {
        $shop->update($data);
        return $shop;
    }

    public function delete($shop)
    {
        $shop->delete();
    }

    public function findById($id)
    {
        return Shop::find($id);
    }
    
}
