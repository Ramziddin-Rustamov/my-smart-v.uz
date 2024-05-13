<?php
namespace App\Services;

use App\Models\Post;
use App\Repositories\PostRepository;
use Illuminate\Support\Facades\Auth;

class PostService
{
    protected $postRepository;

    public function __construct(PostRepository $postRepository)
    {
        $this->postRepository = $postRepository;
    }

    public function countPosts()
    {
        return $this->postRepository->countPosts();
    }

    public function getLatestPosts($limit = 3)
    {
        $quarterId = $this->getQuarterId();
        return $this->postRepository->getLatestPosts($quarterId, $limit);
    }

    public function getPaginated()
    {
        return $this->postRepository->getPaginated();
    }

    public function likePost(Post $post)
    {
        $user = Auth::user();
        return $this->postRepository->liked($post, $user);
    }

    public function unlikePost(Post $post)
    {
        $user = Auth::user();
        $this->postRepository->unlike($post, $user);
    }

    private function getQuarterId()
    {
        return Auth::user()->quarter->id;
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
