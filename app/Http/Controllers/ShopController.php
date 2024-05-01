<?php

namespace App\Http\Controllers;

use App\Services\ShopService;

use App\Http\Requests\StoreShopRequest;
use App\Http\Requests\UpdateShopRequest;
use App\Services\ProductService;

class ShopController extends Controller
{
    protected $shopService;
    protected $productService;
    

    public function __construct(ShopService $shopService,ProductService $productService)
    {
        $this->shopService = $shopService;
        $this->productService = $productService;
    }

   
    public function index()
    {
        $shops = $this->shopService->getAllByUser();
        return view("shops.index",compact("shops"));
    }

    public function create()
    {
        return view("shops.create");
    }


    public function store(StoreShopRequest $request)
    {
        $this->shopService->create($request);

        return redirect()->back()->with("success","Siz yangi do`kon qo`shdingiz!");
    }

    public function update(UpdateShopRequest $request, $id)
    {
        $shop = $this->shopService->findById($id);
        $this->shopService->update($shop, $request);

        return response()->json($shop, 200);
    }

    public function destroy($id)
    {
        $shop = $this->shopService->delete($id);

        return redirect()->back()->with("success","Siz mavjud dukoningizni o`chirib tashladingiz ");
    }

    public function publicShops()
    {
        $shops = $this->shopService->getPublicShops();
        return view("public-shops.index",compact('shops'));
    }

    public function shopProducts($shopId)
    {
        $products = $this->productService->findPublicProducts($shopId);
        return view('public-shop-product.index',compact('products')) ;
    }

}
