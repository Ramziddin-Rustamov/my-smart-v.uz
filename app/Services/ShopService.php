<?php

namespace App\Services;

use App\Repositories\ShopRepository;

class ShopService
{
    protected $shopRepository;

    public function __construct(ShopRepository $shopRepository)
    {
        $this->shopRepository = $shopRepository;
    }

    public function getPublicShops()
    {
        return $this->shopRepository->getPublicShops();
    }

    public function getAllByUser()
    {
        return $this->shopRepository->getAllByUser();
    }

    public function findById($id)
    {
        return $this->shopRepository->findById($id);
    }

    public function create($request)
    {
        return $this->shopRepository->create($request);
    }

    public function update($id, $request)
    {
        $shop = $this->shopRepository->findById($id);
        return $this->shopRepository->update($shop, $request);
    }

    public function delete($id)
    {
        return $this->shopRepository->delete($id);
    }

}
