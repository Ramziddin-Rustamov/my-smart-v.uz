<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\ShopService;

use App\Http\Requests\StoreShopRequest;
use App\Http\Requests\UpdateShopRequest;


class ShopController extends Controller
{
    protected $shopService;

    public function __construct(ShopService $shopService)
    {
        $this->shopService = $shopService;
    }

    public function index()
    {
        $shops = $this->shopService->getAll();

        return $shops;
    }

    public function store(StoreShopRequest $request)
    {
        $data = $request->validated();
        $this->shopService->create($data);

        return "Shop created";
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
        $shop = $this->shopService->findById($id);
        $this->shopService->delete($shop);

        return response()->json(null, 204);
    }
    
    // You can add more methods as needed...
}
