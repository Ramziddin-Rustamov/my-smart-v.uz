<?php

namespace App\Http\Controllers;

use App\Http\Requests\CommentRequest;
use App\Services\CommentService;
use Illuminate\Support\Facades\Request;

class CommentController extends Controller
{
    private $commentService;
    private $commentRequest;

    public function __construct(CommentService $commentService, CommentRequest $commentRequest )
    {
        $this->commentService = $commentService;
        $this->commentRequest = $commentRequest;
    }

    public function store(CommentRequest $request)
    {
        $data = $this->commentRequest->validated();
        $user = $request->user();
        $data['user_id'] = $user->id;
        $this->commentService->createComment($request);
        return back();
    }

    public function delete($id)
    {
        $this->commentService->deleteComment($id);
    }
}
