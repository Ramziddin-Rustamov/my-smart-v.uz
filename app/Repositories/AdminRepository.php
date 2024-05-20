<?php
namespace App\Repositories;

use App\Models\Admin;
use App\Models\Quarter;
use App\Models\User;

class AdminRepository
{
    public function all()
    {
        return Admin::orderBy('id')->get();
    }

    public function find($id)
    {
        return Admin::findOrFail($id);
    }

    public function create(array $attributes)
    {
        $userId = $attributes['user_id'];
        $attributes['quarter_id'] = $this->getVillageByUserId($userId);
        return Admin::create($attributes);
    }

    public function update($id, array $attributes)
    {
        $admin = $this->find($id);
        $admin['is_active'] = $attributes['is_active'];
        $admin->update();
        return $admin;
    }

    public function delete($id)
    {
        $admin = $this->find($id);
        $admin->delete();
    }

    public function users()
    {
        return User::whereDoesntHave('admin')
        ->orderBy('first_name')
        ->get();
    }

    public function quarters()
    {
        return Quarter::orderBy('name')->get();
    }

    // get only director
    public function getVillageDirector()
    {
        return User::where('quarter_id',$this->getQuarterIdByUser())->has('admin')->with(['profiles','admin'])->first();
    }

    private function getVillageByUserId($id)
    {
        $user = User::findOrFail($id);
        return $user->quarter->id;
    }

    private function getQuarterIdByUser()
    {
        return auth()->user()->quarter->id;
    }
}