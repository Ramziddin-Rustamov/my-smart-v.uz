<?php

namespace App\Repositories;

use App\Models\Quarter;

class QuarterRepository
{
    public function getAll()
    {
        return Quarter::all();
    }

    public function create(array $data): Quarter
    {
        return Quarter::create($data);
    }

    public function find(int $id): Quarter
    {
        return Quarter::findOrFail($id);
    }

    public function update(int $id, array $data): Quarter
    {
        $quarter = $this->find($id);
        $quarter->update($data);
        return $quarter;
    }

    public function delete(int $id): void
    {
        $quarter = $this->find($id);
        $quarter->delete();
    }
}