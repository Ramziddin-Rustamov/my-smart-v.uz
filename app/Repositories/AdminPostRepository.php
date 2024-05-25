<?php

namespace App\Repositories;

use App\Models\Post;
use Illuminate\Support\Facades\File;

class AdminPostRepository
{
    public function getAllPostsPaginated()
    {
        return Post::orderBy('id', 'DESC')->where('quarter_id', $this->quarter())->with(['user', 'comments', 'likes'])->paginate(20);
    }

    public function create($userId, $title, $body, $image)
    {
        $filename = $this->uploadImage($image);

        return Post::create([
            'user_id' => $userId,
            'quarter_id' => $this->quarter(),
            'title' => $title,
            'body' => $body,
            'image' => $filename,
        ]);
    }

    public function update(Post $post, $userId, $title, $body, $image = null)
    {
        if ($image) {
            $this->deleteImage($post->image);
            $filename = $this->uploadImage($image);
            $post->image = $filename;
        }

        $post->user_id = $userId;
        $post->title = $title;
        $post->body = $body;
        $post->save();
    }

    public function delete($post)
    {

        $post = $this->getById($post);
        $this->deleteImage($post->image);
        $post->delete();
    }

    private function uploadImage($image)
    {
        $extension = $image->getClientOriginalExtension();
        $filename = 'image/post/' . time() . '.' . $extension;
        $image->move('image/post/', $filename);

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

    public function getById($id)
    {
        return Post::orderBy('id', 'DESC')->where('id', $id)
            ->where('quarter_id', $this->quarter())->with(['user', 'comments', 'likes'])
            ->first();
    }
}
