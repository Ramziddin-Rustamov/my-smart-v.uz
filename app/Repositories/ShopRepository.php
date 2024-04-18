<?php

namespace App\Repositories;

use App\Models\Shop;

class ShopRepository
{

    public function getAll(){
        return Shop::all();
    }
    public function create(array $data)
    {
        return Shop::create($data);
    }

    public function update(Shop $shop, array $data)
    {
        $shop->update($data);
        return $shop;
    }

    public function delete(Shop $shop)
    {
        $shop->delete();
    }

    public function findById($id)
    {
        return Shop::findOrFail($id);
    }
    
}
