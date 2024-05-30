<?php

namespace App\Http\Controllers\API\v1\Post;

use App\Http\Controllers\Controller;
use App\Http\Resources\API\v1\Post\GetOnePostResource;
use App\Http\Resources\API\v1\Post\NewPostsResource;
use App\Models\Post;
use App\Services\PostService;
use App\Http\Resources\API\v1\Post\PostResource;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    private $postService;

    public function __construct(PostService $postService)
    {
        $this->postService = $postService;
    }

    public function index()
    {
        $allposts = $this->postService->getLatestPosts();
        return PostResource::collection($allposts);
    }

    public function findOne(Post $post)
    {
        if ($this->postService->countPosts()) {
            return new GetOnePostResource($post);
        }
        return response()->json(['message' => 'Post not found'], 404);
    }

    public function allPosts()
    {
        $allposts = $this->postService->getPaginated();
        return response()->json(new PostResource($allposts));
    }

    public function getThree()
    {
        $three = $this->postService->getLatestPosts();
        return response()->json(NewPostsResource::collection($three));
    }
}