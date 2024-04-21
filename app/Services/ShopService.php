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

    public function getAll()
    {
        return $this->shopRepository->getAll();
    }

    public function findById($id)
    {
        return $this->shopRepository->findById($id);
    }

    public function create(array $data)
    {
        return $this->shopRepository->create($data);
    }

    public function update($id, array $data)
    {
        $shop = $this->shopRepository->findById($id);
        return $this->shopRepository->update($shop, $data);
    }

    public function delete($id)
    {
        $shop = $this->shopRepository->findById($id);
        $this->shopRepository->delete($shop);
    }

    // You can add more methods as needed...
}