<?php

namespace App\Repositories;

use App\Models\Post;
use Illuminate\Support\Facades\Cache;

class PostRepository
{
    public function countPosts()
    {
        return Cache::remember('count.posts', now()->addSecond(10), function () {
            return Post::count();
        });
    }

    public function getLatestPosts($quarterId, $limit = 3)
    {

        return Post::orderBy('id', 'DESC')
            ->where('quarter_id', $quarterId)
            ->with(['user', 'comments', 'likes'])
            ->limit($limit)
            ->get();
    }
    public function getPaginated($perPage = 8)
    {
        return Post::orderBy('id', 'DESC')
            ->where('quarter_id', $this->getQuarterIdByUser())
            ->paginate($perPage);
    }

    public function liked($post, $user)
    {
        if ($post->likedBy($user)) {
            return false; // Post already liked by the user
        }
        $post->likes()->create(['user_id' => $user->id]);
        return true; // Post liked successfully
    }

    public function unlike($post, $user)
    {
        $user->likes()->where('post_id', $post->id)->delete();
    }

    protected function getQuarterIdByUser()
    {
        return auth()->user()->quarter->id;
    }
}