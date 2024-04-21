<?php

namespace App\Repositories;

use App\Models\ShopOwner;

class ShopOwnerRepository
{
    public function getAll()
    {
        return ShopOwner::orderBy('id','desc')->get();
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
        return redirect()->route('admin.shop-owners.index')->with('success', 'Siz foydalanuvchini o\'chirdingiz... ');
    }
}
