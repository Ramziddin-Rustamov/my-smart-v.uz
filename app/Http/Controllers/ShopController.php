<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\ShopService;

use App\Http\Requests\StoreShopRequest;
use App\Http\Requests\UpdateShopRequest;
use App\Models\Shop;
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

    public function publicIndex()
    {
        $shops = Shop::orderBy('id','desc')->get();
        return view("public-shops.index",compact('shops'));
    }

    public function shopProducts($shopId)
    {
        $products = $this->productService->findPublicProducts($shopId);
        return view('public-shop-product.index',compact('products')) ;
    }

    public function index()
    {
        $shops = $this->shopService->getAll();

        return view("shops.index",compact("shops"));
    }

    public function create()
    {
        return view("shops.create");
    }


    public function store(StoreShopRequest $request)
    {
        $data = $request->validated();
        $this->shopService->create($data);

        return redirect()->back()->with("success","Siz yangi dukon qo`shdingiz!");
    }

    public function update(UpdateShopRequest $request, $id)
    {
        $data = $request->validated();
        $shop = $this->shopService->findById($id);
        $this->shopService->update($shop, $data);

        return response()->json($shop, 200);
    }

    public function destroy($id)
    {
        $shop = $this->shopService->delete($id);

        return redirect()->back()->with("success","Siz mavjud dukoningizni o`chirib tashladingiz ");
    }
}
