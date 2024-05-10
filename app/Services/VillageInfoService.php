<?php

namespace App\Services;

use App\Repositories\VillageInfoRepository;

class VillageInfoService
{
    protected $villageInfoRepository;

    public function __construct(VillageInfoRepository $villageInfoRepository)
    {
        $this->villageInfoRepository = $villageInfoRepository;
    }

    public function getAll()
    {
        return $this->villageInfoRepository->getAll();
    }

    public function create($request)
    {
        return $this->villageInfoRepository->create($request);
    }

    public function find($id)
    {
        return $this->villageInfoRepository->find($id);
    }

    public function update($request, $id)
    {
        return $this->villageInfoRepository->update($request, $id);
    }

    public function delete($id)
    {
        return $this->villageInfoRepository->delete($id);
    }
}
