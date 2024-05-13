<?php

namespace App\Repositories;

use App\Models\SlideImage;
use Illuminate\Support\Facades\File;

class SlideImageRepository
{
    public function getAll()
    {
        return SlideImage::where('quarter_id',$this->quarter())->get();
    }

    public function create($title, $body, $image)
    {
        $filename = $this->uploadImage($image);

        return SlideImage::create([
            'quarter_id' => $this->quarter(),
            'title' => $title,
            'body' => $body,
            'image' => $filename,
        ]);
    }

    public function delete($id)
    {
        $slide = SlideImage::where('id',$id)->where('quarter_id',$this->quarter())->first();

        if ($slide) {
            $this->deleteImage($slide->image);
            $slide->delete();
        }
    }

    private function uploadImage($image)
    {
        $extension = $image->getClientOriginalExtension();
        $filename = 'image/slide/' . time() . '.' . $extension;
        $image->move('image/slide/', $filename);

        return $filename;
    }

    private function deleteImage($path)
    {
        if (File::exists(public_path($path))) {
            File::delete(public_path($path));
        }
    }

    private  function quarter()
    {
        return auth()->user()->quarter->id;
    }
}
