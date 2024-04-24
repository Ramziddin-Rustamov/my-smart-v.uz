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
        $this->commentRepository->create([
            'post_id' => $request->input('post_id'),
            'user_id' => $request->user()->id,
            'body' => $request->input('body')
        ]);
        return back();
    }

    public function deleteComment($id)
    {
        $this->commentRepository->delete($id);
    }
}
