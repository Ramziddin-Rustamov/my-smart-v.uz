<?php

namespace App\Repositories;

use App\Models\Product;
use Illuminate\Support\Facades\File;

class ProductRepository
{
    public function getAll()
    {
        return Product::whereHas('shop', function ($query) {
            $query->where('user_id', auth()->user()->id);
        })->orderBy('id','desc')->paginate(100);
    }
    public function findPublicProducts($shopId)
    {
        return Product::orderBy('id','desc')->where('shop_id',$shopId)->get();
    }

    public function getById($id)
    {
        return Product::findOrFail($id);
    }

    public function create($request)
    {
        $data =  $request->validated();
        if ($request->hasfile('image')) {
            $data['image'] = $this->uploadNewImage($request);
        }
        return Product::create($data);
    }

    public function update($id,  $request)
    {
        $data = $request->validated();
        $product = $this->getById($id);
        if($request->hasFile('image')){
            $this->deleteOldImage($product->image);
            $product->image = $this->uploadNewImage($request);
        }
        $data['image'] = $product->image;
        $product->update($data);
        return $product;
    }

    public function delete($id)
    {
        $product = Product::findOrFail($id);
        if($product->image){
            $this->deleteOldImage($product->image);
        }
        $product->delete();
    }
    public function getSortedProducts()
    {
        return   $productsOrderedByPrice = Product::orderBy('price')->get();
    }

    protected function uploadNewImage($data)
    {
        $file = $data->file('image');
        $extension = $file->getClientOriginalExtension();
        $filename = 'image/products/' .uniqid().'.' . $extension;
        $file->move('image/products/', $filename);
        return $filename;
    }

    protected function deleteOldImage($imagePath)
    {
        $destinationPath = public_path($imagePath);
        if (File::exists($destinationPath)) {
            File::delete($destinationPath);
        }
    }
}
