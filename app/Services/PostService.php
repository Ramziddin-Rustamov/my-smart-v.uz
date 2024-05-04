<?php

namespace App\Services;

use App\Models\Post;
use Illuminate\Support\Facades\Cache;

class PostService
{
    private $postModel;

    public function __construct(Post $post)
    {
        $this->postModel = $post;
    }

    public function countPosts()
    {
        return Cache::remember('count.posts', now()->addSecond(60), function () {
            return $this->postModel->count();
        });
    }

    public function getLatestPosts($limit = 3)
    {
        $cacheKey = "latest_posts_{$limit}";

        return Cache::remember($cacheKey, now()->addSeconds(5), function () use ($limit) {
            return $this->postModel::orderBy('id', 'DESC')
                ->with(['user', 'comments', 'likes'])
                ->limit($limit)
                ->get();
        });
    }

    public function getPaginate()
    {
        return $this->postModel->orderBy('id', 'DESC')->paginate(8);
    }


    public function liked($post,$request)
    {
        if($post->likedBy($request->user())){
          return redirect()->back();
         }
        $post->likes()->create(['user_id' =>$request->user()->id]);
    }

    public function delete($post,$request)
    {
        $request->user()->likes()->where('post_id',$post->id)->delete();
    }
}
