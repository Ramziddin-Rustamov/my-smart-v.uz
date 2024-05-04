<?php

namespace App\Services;

use App\Repositories\ProductRepository;

class ProductService
{
    protected $productRepository;

    public function __construct(ProductRepository $productRepository)
    {
        $this->productRepository = $productRepository;
    }

    public function getAllProducts()
    {
        return $this->productRepository->getAll();
    }

    public function getAllShopsRelatedToUser()
    {
        return $this->productRepository->getAllShopsRelatedToUser();
    }

    public function findPublicProducts($id)
    {
        return $this->productRepository->findPublicProducts($id);
    }

    public function getProductById($id)
    {
        return $this->productRepository->getById($id);
    }

    public function createProduct($request)
    {
        return $this->productRepository->create($request);
    }

    public function updateProduct($id, $request)
    {
        return $this->productRepository->update($id, $request);
    }

    public function deleteProduct($id)
    {
        $this->productRepository->delete($id);
    }

    public function getSortedProducts()
    {
        return $this->productRepository->getSortedProducts();
    }
}
