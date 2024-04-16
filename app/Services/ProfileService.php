<?php
namespace App\Services;

use Illuminate\Support\Facades\File;
use App\Models\User;

class ProfileService
{

    public function updateProfile(User $user, $request)
    {
        $data = $request->validated();
        if ($request->hasfile('image')) {
            $this->deleteOldImage($user->image);
            $user->image = $this->uploadNewImage($request);
        }

        $user->update([
            'first_name' => $data['first_name'],
            'last_name' => $data['last_name'],
            'father_name' => $data['father_name'],
        ]);
        
        $user->profiles->update([
            'instagram' => $data['instagram'],
            'telegram' => $data['telegram'],
            'whatsup' => $data['whatsup'],
            'job' => $data['job'],
            'location' => $data['location'],
            'phone' => $data['phone'],
            'about' => $data['about'],
        ]);
    }



    protected function deleteOldImage($imagePath)
    {
        $destinationPath = 'public/' . $imagePath;
        if (File::exists($destinationPath)) {
            File::delete($destinationPath);
        }
    }


    public function getUserProfile($userId)
    {
        return User::findOrFail($userId);
    }

//  inner function
    protected function uploadNewImage($data)
    {
        $file = $data->file('image');
        $extension = $file->getClientOriginalExtension();
        $filename = 'image/' . $data->user()->first_name.''.$data->user()->last_name.'.' . $extension;
        $file->move('image/', $filename);
        return $filename;
    }


}
