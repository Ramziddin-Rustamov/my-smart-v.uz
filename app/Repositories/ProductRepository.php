<?php

namespace App\Repositories;

use App\Models\Product;

class ProductRepository
{
    public function getAll()
    {
        return Product::whereHas('shop', function ($query) {
            $query->where('user_id', auth()->user()->id);
        })->orderBy('id','desc')->paginate(50);
    }
    public function findPublicProducts($shopId)
    {
        return Product::orderBy('id','desc')->where('shop_id',$shopId)->get();
    }

    public function getById($id)
    {
        return Product::findOrFail($id);
    }

    public function create(array $data)
    {
        return Product::create($data);
    }

    public function update($id, array $data)
    {
        $product = Product::findOrFail($id);
        $product->update($data);
        return $product;
    }

    public function delete($id)
    {
        $product = Product::findOrFail($id);
        $product->delete();
    }
    public function getSortedProducts()
    {
        return   $productsOrderedByPrice = Product::orderBy('price')->get();
    }
}
