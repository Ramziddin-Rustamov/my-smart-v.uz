<?php

// app/Services/InfoVillageService.php
namespace App\Services;

use App\Models\InfoVillage;
use App\Repositories\InfoVillageRepository;
use App\Repositories\InfoVillageRepositoryInterface;
use App\Repositories\VillageInfoRepository;
use Illuminate\Validation\ValidationException;

class InfoVillageService
{
    protected $infoVillageRepository;

    public function __construct(InfoVillageRepository $infoVillageRepository)
    {
        $this->infoVillageRepository = $infoVillageRepository;
    }

    public function getAll()
    {
        return $this->infoVillageRepository->getAll();
    }

    public function find($id)
    {
        return $this->infoVillageRepository->find($id);
    }

    public function create($request)
    {
        return $this->infoVillageRepository->create($request);
    }

    public function update($id, $request)
    {

        return $this->infoVillageRepository->update($id, $request);
    }

    public function delete($id)
    {
        return $this->infoVillageRepository->delete($id);
    }

    protected function validate(array $data)
    {
        // Validation rules here
    }
}
