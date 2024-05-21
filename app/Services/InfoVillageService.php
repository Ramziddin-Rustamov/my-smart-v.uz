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

    public function create(array $data)
    {
        $this->validate($data);

        return $this->infoVillageRepository->create($data);
    }

    public function update($id, array $data)
    {
        $this->validate($data);

        return $this->infoVillageRepository->update($id, $data);
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
