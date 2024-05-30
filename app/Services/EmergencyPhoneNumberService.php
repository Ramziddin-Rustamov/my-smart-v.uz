<?php

namespace App\Services;

use App\Repositories\EmergencyPhoneNumberRepository;

class EmergencyPhoneNumberService
{
    protected $emergencyPhoneNumberRepository;

    public function __construct(EmergencyPhoneNumberRepository $emergencyPhoneNumberRepository)
    {
        $this->emergencyPhoneNumberRepository = $emergencyPhoneNumberRepository;
    }

    public function getAllEmergencyPhoneNumbers()
    {
        return $this->emergencyPhoneNumberRepository->all();
    }

    public function getEmergencyPhoneNumberById($id)
    {
        return $this->emergencyPhoneNumberRepository->find($id);
    }

    public function createEmergencyPhoneNumber(array $data)
    {
        return $this->emergencyPhoneNumberRepository->create($data);
    }

    public function updateEmergencyPhoneNumber($id, array $data)
    {
        return $this->emergencyPhoneNumberRepository->update($id, $data);
    }

    public function deleteEmergencyPhoneNumber($id)
    {
        return $this->emergencyPhoneNumberRepository->delete($id);
    }
}