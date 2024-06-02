<?php

namespace App\Http\Controllers\API\v1\Product;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use App\Http\Resources\API\v1\Product\AllProductsResource;
use App\Services\ProductService;
use App\Http\Resources\API\v1\Product\ProductResource;

class ProductController extends Controller
{
    protected $productService;

    public function __construct(ProductService $productService)
    {
        $this->productService = $productService;
    }

    public function index()
    {
        $products = $this->productService->all();
        return AllProductsResource::collection($products);
    }




    public function store(StoreProductRequest $request)
    {
        if ($this->productService->isShopIdForCurrentUser($request->shop_id)) {
            $product = $this->productService->createProduct($request);
            return new ProductResource($product);
        }
        return response()->json(['message' => 'You do not have such shop!'], 403);
    }



    public function show($id)
    {
        $product = $this->productService->getProductById($id);
        return new ProductResource($product);
    }




    public function update(UpdateProductRequest $request, $id)
    {

        if ($this->productService->isShopIdForCurrentUser($request->shop_id)) {
            $product = $this->productService->updateProduct($id, $request);
            return new ProductResource($product);
        }
        return response()->json(['message' => 'You do not have such shop!'], 403);
    }



    public function destroy($id)
    {
        $this->productService->deleteProduct($id);
        return response()->json(['message' => 'Product deleted successfully']);
    }




    public function compare()
    {
        $products = $this->productService->getSortedProducts();
        return ProductResource::collection($products);
    }
}
