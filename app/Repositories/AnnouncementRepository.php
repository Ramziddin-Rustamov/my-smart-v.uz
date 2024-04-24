<?php

namespace App\Repositories;

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
        return $this->model->orderBy('id','desc')->where('user_id',auth()->user()->id)->get();
    }

    public function getById($id)
    {
        if (Auth::check()) {
            return $this->model->where('id', $id)
                               ->where('user_id', Auth::user()->id)
                               ->get();
        } else {
            
           return abort(403, 'Bu ma`lumotga sizga ruxsat yo\'q '); 
        }
    }
    public function create(array $data)
    {
        $data['user_id'] = auth()->user()->id;
        return $this->model->create($data);
    }

    public function update($id, array $data)
    {
        $announcement = $this->getById($id);

        return $announcement->update($data);
    }
    public function delete($id)
    {
        $announcement = Announcement::where('id',$id)->where('user_id',auth()->user()->id)->get();
        return $announcement[0]->delete();
    }
}
