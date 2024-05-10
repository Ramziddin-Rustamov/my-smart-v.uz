<?php

namespace App\Repositories;

use App\Models\VillageInfo;

class VillageInfoRepository
{
    public function getAll()
    {
        return VillageInfo::where('quarter_id',$this->villageId())->first();
    }

    public function create($request)
    {
        $request['quarter_id'] = $this->villageId();
        return VillageInfo::create($request);
    }

    public function find($id)
    {
        return $this->findById($id);
    }

    public function update($request, $id)
    {
        $villageInfo = $this->findById($id);
        $request['quarter_id'] = $this->villageId();

        $villageInfo->update($request->all());
        return $villageInfo;
    }

    public function delete($id)
    {
        if($this->findById($id)){
            return VillageInfo::destroy($id);
        }
    }

    private function findById($id)
    {
       return VillageInfo::where('quarter_id',$this->villageId())->findOrFail($id);
    }

    private function villageId()
    {
       return  auth()->user()->quarter->id;
    }
}
