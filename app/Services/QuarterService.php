<?php

namespace App\Services;

use App\Repositories\QuarterRepository;
use App\Models\Quarter;

class QuarterService
{
    private $quarterRepository;

    public function __construct(QuarterRepository $quarterRepository)
    {
        $this->quarterRepository = $quarterRepository;
    }

    public function getAllQuarters()
    {
        return $this->quarterRepository->getAll();
    }

    public function createQuarter(array $data): Quarter
    {
        return $this->quarterRepository->create($data);
    }

    public function getQuarterById(int $id): Quarter
    {
        return $this->quarterRepository->find($id);
    }

    public function updateQuarter(int $id, array $data): Quarter
    {
        return $this->quarterRepository->update($id, $data);
    }

    public function deleteQuarter(int $id): void
    {
        $this->quarterRepository->delete($id);
    }
}