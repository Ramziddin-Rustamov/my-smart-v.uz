<?php

namespace App\Services;

use App\Repositories\RegionRepository;
use App\Models\Region;

class RegionService
{
    private $regionRepository;

    public function __construct(RegionRepository $regionRepository)
    {
        $this->regionRepository = $regionRepository;
    }

    public function getAllRegions()
    {
        return $this->regionRepository->getAll();
    }

    public function createRegion(array $data): Region
    {
        return $this->regionRepository->create($data);
    }

    public function getRegionById(int $id): Region
    {
        return $this->regionRepository->find($id);
    }

    public function updateRegion(int $id, array $data): Region
    {
        return $this->regionRepository->update($id, $data);
    }

    public function deleteRegion(int $id): void
    {
        $this->regionRepository->delete($id);
    }
}