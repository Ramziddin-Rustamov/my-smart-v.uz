<?php
namespace App\Http\Controllers;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use App\Services\ProductService;
use App\Models\Shop;

class ProductController extends Controller
{
    protected $productService;

    public function __construct(ProductService $productService)
    {
        $this->productService = $productService;
    }
    

    public function index()
    {
        $products = $this->productService->getAllProducts();
        return view("product.index",compact('products'));
    }

    
    public function create()
    {
        $shops = Shop::where('user_id',auth()->user()->id)->get();
        return view("product.create",compact('shops'));
    }

    public function store(StoreProductRequest $request)
    {
        $data = $request->validated();
        $products =  $this->productService->createProduct($data);
        return redirect()->back()->with("success","Siz yangi maxsulot qo`shdingiz ..");
    }

    public function show($id)
    {
        return $this->productService->getProductById($id);
    }

    public function edit($productid)
    {
        $product = $this->productService->getProductById($productid);
        return view('product.edit',compact('product'));
    }

    public function update(UpdateProductRequest $request, $id)
    {
        $data = $request->validated();
         $this->productService->updateProduct($id, $data);
         return redirect()->route('products.index')->with("success","Siz maxsulotni taxrirladingiz !");
    }

    public function destroy($id)
    {
        $this->productService->deleteProduct($id);
        return response()->json(['message' => 'Product deleted successfully']);
    }

    public function compare()
    {
          $products = $this->productService->getSortedProducts();
          return view('public-shop-product.compare',compact('products'));
    }
}
