<?php

namespace App\Repositories;

use App\Models\Post;
use App\Models\Comment;

class CommentRepository
{
    public function create($request)
     {
    if($request){
        $data =  $request->validated();
        $data['user_id'] = auth()->user()->id;
        $data['post_id'] = $request->post_id;
        return Comment::create($data);
    }
    throw new \InvalidArgumentException("Provided data is not array!");
    }

    public function delete($id)
    {
        Comment::findOrFail($id)->delete();
    }
}
