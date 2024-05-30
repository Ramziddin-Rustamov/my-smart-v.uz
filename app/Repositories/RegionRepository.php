<?php

namespace App\Repositories;

use App\Models\Region;

class RegionRepository
{
    public function getAll()
    {
        return Region::all();
    }

    public function create(array $data): Region
    {
        return Region::create($data);
    }

    public function find(int $id): Region
    {
        return Region::findOrFail($id);
    }

    public function update(int $id, array $data): Region
    {
        $region = $this->find($id);
        $region->update($data);
        return $region;
    }

    public function delete(int $id): void
    {
        $region = $this->find($id);
        $region->delete();
    }
}