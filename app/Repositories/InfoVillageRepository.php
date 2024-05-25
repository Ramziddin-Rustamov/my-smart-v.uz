<?php
// app/Repositories/InfoVillageRepository.php
namespace App\Repositories;

use App\Models\InfoVillage;
use Illuminate\Support\Facades\File;

class InfoVillageRepository
{
    public function getAll()
    {
        return InfoVillage::where('quarter_id',$this->userVillageId())->get();
    }

    public function find($id)
    {
        return InfoVillage::findOrFail($id);
    }

    public function create($request)
    {
        $data =  $request->validated();
        if ($request->hasfile('image')) {
            $data['image'] = $this->uploadNewImage($request);
        }        
        $quarterId = $this->getVillageIdByUser();
        if ($quarterId !== null) {
            $data['quarter_id'] = $quarterId;
        } else {
            return response()->json(['error' => 'Quarter ID not found for the user'], 400);
        }
        return InfoVillage::create($data);
    }

    public function update($id,  $request)
    {
        $data = $request->validated();
        $infoVillage = $this->find($id);
        if($request->hasFile('image')){
            $this->deleteOldImage($infoVillage->image);
            $infoVillage->image = $this->uploadNewImage($request);
        }
        $data['image'] = $infoVillage->image;
        $infoVillage->update($data);
        return $infoVillage;
    }

    public function delete($id)
    {
        $infoVillage = $this->find($id);
        if($infoVillage->image){
            $this->deleteOldImage($infoVillage->image);
        }
        $infoVillage->delete();
        return $infoVillage;
    }
    
    private function getVillageIdByUser()
    {
        $user = auth()->user();

        if ($user && $user->quarter) {
            return $user->quarter->id;
        }

        return null;
    }


    protected function uploadNewImage($data)
    {
        $file = $data->file('image');
        $extension = $file->getClientOriginalExtension();
        $filename = 'image/info-village/' .uniqid().'.' . $extension;
        $file->move('image/info-village/', $filename);
        return $filename;
    }

    protected function deleteOldImage($imagePath)
    {
        $destinationPath = public_path($imagePath);
        if (File::exists($destinationPath)) {
            File::delete($destinationPath);
        }
    }

    private function userVillageId()
    {
        return auth()->user()->quarter->id;
    }
}
