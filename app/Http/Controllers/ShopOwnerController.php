<?php
namespace App\Http\Controllers;

use App\Http\Requests\StoreShopOwnerRequest;
use App\Http\Requests\UpdateShopOwnerRequest;
use App\Services\ShopOwnerService;
use Illuminate\Http\Request;
use App\Models\User;

class ShopOwnerController extends Controller
{
    protected $shopOwnerService;

    public function __construct(ShopOwnerService $shopOwnerService)
    {
        $this->shopOwnerService = $shopOwnerService;
    }

    public function index()
    {
       $shopOwners = $this->shopOwnerService->getAllShopOwners();
      
       return view("admin.shop-owner.index",compact('shopOwners'));
    }

    public function create()
    {
      $users = User::whereDoesntHave('shopOwner')->get();
      return view('admin.shop-owner.create',compact('users'));
    }

    public function store(StoreShopOwnerRequest $request)
    {
        $this->shopOwnerService->createShopOwner($request->validated());
        return redirect()->route('admin.shop-owners.index')->with('success', 'Foydalanuvchi qo`shildi ..');
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
