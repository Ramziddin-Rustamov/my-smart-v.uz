<?php

namespace App\Repositories;

use App\Models\Shop;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;


class ShopRepository
{

    public function getAllByUser()
    {
        return Shop::orderBy('id','desc')->where('user_id', auth()->user()->id)->get();
    }

    public function getPublicShops()
    {
        return Shop::orderBy('id','desc')->get();
    }

    public function findById($id)
    {
        $shop = Shop::findOrFail($id);
        return $shop;
    }

    public function create($request)
    {
        $data =  $request->validated();
        if ($request->hasfile('image')) {
            $data['image'] = $this->uploadNewImage($request);
        }
        $auth = Auth::id();
        $data["user_id"] = $auth;
        return Shop::create($data);
    }

    public function update(Shop $shop, $request)
    {
        $data = $request->validated();
        $shop = $this->findById($shop);
        if($request->hasFile('image')){
            $this->deleteOldImage($shop->image);
            $shop->image = $this->uploadNewImage($request);
        }
        $data['image'] = $shop->image;
        $shop->update($data);
        return $shop;
    }

    public function delete($id)
    {
       $shop = Shop::where('id',$id)->first();
       if($shop->image){
           $this->deleteOldImage($shop->image);
       }  
       return $shop->delete();
    }

 

    protected function uploadNewImage($data)
    {
        $file = $data->file('image');
        $extension = $file->getClientOriginalExtension();
        $filename = 'image/shops/' .uniqid().'.' . $extension;
        $file->move('image/shops/', $filename);
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
