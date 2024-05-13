<?php
namespace App\Services;

use App\Models\Post;
use App\Repositories\AdminPostRepository;
use Illuminate\Http\UploadedFile;

class AdminPostService
{
    protected $postRepository;

    public function __construct(AdminPostRepository $postRepository)
    {
        $this->postRepository = $postRepository;
    }

    public function getAllPostsPaginated()
    {
        return $this->postRepository->getAllPostsPaginated();
    }

    public function createPost($userId, $title, $body, UploadedFile $image)
    {
        return $this->postRepository->create($userId, $title, $body, $image);
    }

    public function updatePost(Post $post, $userId, $title, $body, UploadedFile $image = null)
    {
        return $this->postRepository->update($post, $userId, $title, $body, $image);
    }

    public function deletePost($post)
    {
        $this->postRepository->delete($post);
    }

    public function getById($id)
    {
        $this->postRepository->getById($id);
    }
}
