<?php

namespace App\Repositories;

use App\Models\EmergencyPhoneNumber;

class EmergencyPhoneNumberRepository
{
    protected $emergencyPhoneNumber;

    public function __construct(EmergencyPhoneNumber $emergencyPhoneNumber)
    {
        $this->emergencyPhoneNumber = $emergencyPhoneNumber;
    }

    public function all()
    {
        return $this->emergencyPhoneNumber->all();
    }

    public function find($id)
    {
        return $this->emergencyPhoneNumber->find($id);
    }

    public function create(array $data)
    {
        return $this->emergencyPhoneNumber->create($data);
    }

    public function update($id, array $data)
    {
        $emergencyPhoneNumber = $this->find($id);
        return $emergencyPhoneNumber ? $emergencyPhoneNumber->update($data) : null;
    }

    public function delete($id)
    {
        $emergencyPhoneNumber = $this->find($id);
        return $emergencyPhoneNumber ? $emergencyPhoneNumber->delete() : null;
    }
}