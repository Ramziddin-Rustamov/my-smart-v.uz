<?php
namespace App\Services;

use App\Repositories\ShopOwnerRepository;

class ShopOwnerService
{
    protected $shopOwnerRepository;

    public function __construct(ShopOwnerRepository $shopOwnerRepository)
    {
        $this->shopOwnerRepository = $shopOwnerRepository;
    }

    public function getAllShopOwners()
    {
        return $this->shopOwnerRepository->getAll();
    }

    public function createShopOwner(array $data)
    {
        return $this->shopOwnerRepository->create($data);
    }

    public function getShopOwnerById($id)
    {
        return $this->shopOwnerRepository->getById($id);
    }

    public function updateShopOwner(array $data, $id)
    {
        return $this->shopOwnerRepository->update($data, $id);
    }

    public function deleteShopOwner($id)
    {
        return $this->shopOwnerRepository->delete($id);
    }
}
