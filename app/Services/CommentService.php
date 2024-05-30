<?php

namespace App\Services;

use App\Repositories\CommentRepository;
use App\Http\Requests\CommentRequest;

class CommentService
{
    private $commentRepository;

    public function __construct(CommentRepository $commentRepository)
    {
        $this->commentRepository = $commentRepository;
    }

    public function createComment(CommentRequest $request)
    {  
        return $this->commentRepository->create($request);
    }

    public function deleteComment($id)
    {
        $this->commentRepository->delete($id);
    }
}