<?php
namespace App\Http\Controllers;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use App\Services\ProductService;

class ProductController extends Controller
{
    protected $productService;

    public function __construct(ProductService $productService)
    {
        $this->productService = $productService;
    }

    public function index()
    {
        return $this->productService->getAllProducts();
    }

    public function store(StoreProductRequest $request)
    {
        $data = $request->validated();
        return $this->productService->createProduct($data);
    }

    public function show($id)
    {
        return $this->productService->getProductById($id);
    }

    public function update(UpdateProductRequest $request, $id)
    {
        $data = $request->validated();
        return $this->productService->updateProduct($id, $data);
    }

    public function destroy($id)
    {
        $this->productService->deleteProduct($id);
        return response()->json(['message' => 'Product deleted successfully']);
    }
}
