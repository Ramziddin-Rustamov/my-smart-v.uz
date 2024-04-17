<?php

namespace App\Repositories;

use App\Models\ShopOwner;

class ShopOwnerRepository
{
    public function getAll()
    {
        return ShopOwner::all();
    }

    public function getById($id)
    {
        return ShopOwner::findOrFail($id);
    }

    public function create(array $data)
    {
        return ShopOwner::create($data);
    }

    public function update(array $data, $id)
    {
        $shopOwner = ShopOwner::findOrFail($id);
        $shopOwner->update($data);
        return $shopOwner;
    }

    public function delete($id)
    {
        $shopOwner = ShopOwner::findOrFail($id);
        $shopOwner->delete();
        return true;
    }
}
