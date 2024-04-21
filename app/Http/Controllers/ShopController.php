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

    public function delete ($id)
    {
        $shop = $this->shopService->findById($id);
        $this->shopService->delete($shop);

        return "Deleted";
    }
}
