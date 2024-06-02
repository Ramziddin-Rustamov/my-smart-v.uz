<?php

namespace App\Http\Controllers\API\v1\Shop;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreShopRequest;
use App\Http\Requests\UpdateShopRequest;
use App\Services\ShopService;
use App\Services\ProductService;
use App\Http\Resources\API\v1\Shop\ShopResource;
use App\Http\Resources\API\v1\Shop\ShopCollection;
use App\Http\Resources\API\v1\Product\ProductResource;

class ShopController extends Controller
{
    protected $shopService;
    protected $productService;

    public function __construct(ShopService $shopService, ProductService $productService)
    {
        $this->shopService = $shopService;
        $this->productService = $productService;
    }

    public function index()
    {
        $shops = $this->shopService->getAllByUser();
        return ShopResource::collection($shops);
    }

    public function store(StoreShopRequest $request)
    {
        $shop = $this->shopService->create($request);
        return new ShopResource($shop);
    }

    public function show($id)
    {
        $shop = $this->shopService->findById($id);
        return new ShopResource($shop);
    }

    public function update(UpdateShopRequest $request, $id)
    {
        $shop =  $this->shopService->update($id, $request);
        return new ShopResource($shop);
    }

    public function destroy($id)
    {
        $this->shopService->delete($id);
        return response()->json(['message' => 'Shop deleted successfully'], 200);
    }

    public function publicShops()
    {
        $shops = $this->shopService->getPublicShops();
        return ProductResource::collection($shops);
    }

    public function shopProducts($shopId)
    {
        $products = $this->productService->findPublicProducts($shopId);
        return ProductResource::collection($products);
    }
}
