<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Services\PostService;
use Illuminate\Http\Request;

class PostLikesController extends Controller
{
    private $postService;

    public function __construct(PostService $postS)
    {
        $this->postService = $postS;
    }
    public function store(Post $post,Request $request)
    {
        $this->postService->Liked($post,$request);
        return back();
    }

    public function destroy(Post $post , Request $request)
    {
       $this->postService->delete($post,$request);
        return back();
    }
}
