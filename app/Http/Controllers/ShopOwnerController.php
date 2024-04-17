<?php
namespace App\Http\Controllers;

use App\Http\Requests\StoreShopOwnerRequest;
use App\Http\Requests\UpdateShopOwnerRequest;
use App\Services\ShopOwnerService;
use Illuminate\Http\Request;

class ShopOwnerController extends Controller
{
    protected $shopOwnerService;

    public function __construct(ShopOwnerService $shopOwnerService)
    {
        $this->shopOwnerService = $shopOwnerService;
    }

    public function index()
    {
        return $this->shopOwnerService->getAllShopOwners();
    }

    public function store(StoreShopOwnerRequest $request)
    {
        return $this->shopOwnerService->createShopOwner($request->validated());
    }

    public function show($id)
    {
        return $this->shopOwnerService->getShopOwnerById($id);
    }

    public function update(UpdateShopOwnerRequest $request, $id)
    {
        return $this->shopOwnerService->updateShopOwner($request->validated(), $id);
    }

    public function destroy($id)
    {
        return $this->shopOwnerService->deleteShopOwner($id);
    }
}
