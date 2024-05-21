<?php
// app/Repositories/InfoVillageRepository.php
namespace App\Repositories;

use App\Models\InfoVillage;

class InfoVillageRepository
{
    public function getAll()
    {
        return InfoVillage::all();
    }

    public function find($id)
    {
        return InfoVillage::findOrFail($id);
    }

    public function create(array $data)
    {
        
        return InfoVillage::create($data);
    }

    public function update($id, array $data)
    {
        $infoVillage = InfoVillage::findOrFail($id);
        $infoVillage->update($data);
        return $infoVillage;
    }

    public function delete($id)
    {
        $infoVillage = InfoVillage::findOrFail($id);
        $infoVillage->delete();
        return $infoVillage;
    }
    
    private function getVillageByUserId()
    {
        return auth()->user()->quarter->id;
    }
}
