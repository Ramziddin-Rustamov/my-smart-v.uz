<?php

namespace App\Http\Controllers\API\v1\PostLike;

use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Services\PostService;
use Illuminate\Http\Request;

class PostLikesController extends Controller
{
    private $postService;

    public function __construct(PostService $postService)
    {
        $this->postService = $postService;
    }

    public function store(Post $post, Request $request)
    {
        $this->postService->Liked($post, $request);
        return response()->json(['message' => 'Post liked successfully'], 201);
    }

    public function destroy(Post $post, Request $request)
    {
        $this->postService->delete($post, $request);
        return response()->json(['message' => 'Like removed successfully'], 200);
    }
}
