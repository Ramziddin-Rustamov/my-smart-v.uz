<?php

namespace App\Services;

use App\Repositories\DistrictRepositoryInterface;
use App\Models\District;
use App\Repositories\DistrictRepository;

class DistrictService
{
    protected $districtRepository;

    public function __construct(DistrictRepository $districtRepository)
    {
        $this->districtRepository = $districtRepository;
    }

    public function getAllDistricts()
    {
        return $this->districtRepository->getAll();
    }

    public function getDistrictById($id)
    {
        return $this->districtRepository->getById($id);
    }

    public function createDistrict(array $data)
    {
        return $this->districtRepository->create($data);
    }

    public function updateDistrict(District $district, array $data)
    {
        return $this->districtRepository->update($district, $data);
    }

    public function deleteDistrict(District $district)
    {
        return $this->districtRepository->delete($district);
    }
}
