<?php

namespace App\Http\Controllers\API\v1\Comment;

use App\Http\Controllers\Controller;
use App\Http\Requests\CommentRequest;
use App\Http\Resources\API\v1\Comment\CommentResource;
use App\Services\CommentService;
use Illuminate\Http\JsonResponse;

class CommentApiController extends Controller
{
    private $commentService;

    public function __construct(CommentService $commentService)
    {
        $this->commentService = $commentService;
    }

    public function store(CommentRequest $request)
    {

        try {
            $comment = $this->commentService->createComment($request);
            return response()->json([
                'success' => true,
                'message' => 'Comment created successfully',
                'data' => new CommentResource($comment)
            ], 201);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Failed to create comment',
                'error' => $e->getMessage()
            ], 500);
        }
    }

    public function delete($postId)
    {
        try {
            $this->commentService->deleteComment($postId);
            return response()->json([
                'success' => true,
                'message' => 'Comment deleted successfully'
            ], 200);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Failed to delete comment',
                'error' => $e->getMessage()
            ], 500);
        }
    }
}