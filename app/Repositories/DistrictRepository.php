<?php

namespace App\Repositories;

use App\Models\District;

class DistrictRepository
{
    public function getAll()
    {
        return District::all();
    }

    public function getById($id)
    {
        return District::findOrFail($id);
    }

    public function create(array $data)
    {
        return District::create($data);
    }

    public function update(District $district, array $data)
    {
        return $district->update($data);
    }

    public function delete(District $district)
    {
        return $district->delete();
    }
}