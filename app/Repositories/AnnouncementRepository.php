<?php

namespace App\Repositories;

use Illuminate\Support\Facades\File;
use App\Models\Announcement;
use Illuminate\Support\Facades\Auth;
class AnnouncementRepository
{
    protected $model;

    public function __construct(Announcement $announcement)
    {
        $this->model = $announcement;
    }

    public function getAll()
    {
        return $this->model->all();
    }

    public function getAllForAuth()
    {
        return $this->model->orderBy('id','desc')->where('user_id',$this->userId())->get();
    }

    public function getById($id)
    {
        if ($this->userId()) {
            return $this->model->where('id', $id)
                               ->where('user_id', $this->userId())
                               ->first();
        } 
        return null;
    }
    public function store($request)
    { 
        $data =  $request->validated();
        if ($request->hasfile('photo')) {
            $data['photo'] = $this->uploadNewImage($request);
        }
        $data['user_id'] = $this->userId();
        return $this->model->create($data);
    }

    public function update($id, $request)
    {
        $announcement = $this->getById($id);
        $data = $request->validated();
        if($request->hasFile('photo')){
            $this->deleteOldImage($announcement->photo);
            $announcement->photo = $this->uploadNewImage($request);
        }
        $data["photo"] = $announcement->photo;

        return $announcement->update($data);
    }
    public function delete($id)
    {
        $announcement = Announcement::where('id',$id)->where('user_id',$this->userId())->first();
        if($announcement->photo){
            $this->deleteOldImage($announcement->photo);
        }
        return $announcement->delete();
    }

    protected function deleteOldImage($imagePath)
    {
        $destinationPath = public_path($imagePath);
        if (File::exists($destinationPath)) {
            File::delete($destinationPath);
        }
    }

    protected function uploadNewImage($data)
    {
        $file = $data->file('photo');
        $extension = $file->getClientOriginalExtension();
        $filename = 'image/announcement/' .uniqid().'.' . $extension;
        $file->move('image/announcement/', $filename);
        return $filename;
    }

    protected function userId()
    {
        return Auth::user()->id;
    }

}