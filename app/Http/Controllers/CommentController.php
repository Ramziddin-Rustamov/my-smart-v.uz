<?php

namespace App\Http\Controllers;

use App\Http\Requests\CommentRequest;
use App\Services\CommentService;

class CommentController extends Controller
{
    private $commentService;

    public function __construct(CommentService $commentService)
    {
        $this->commentService = $commentService;
    }

    public function store(CommentRequest $request)
    {
        // dd($request->all());
        $this->commentService->createComment($request);
        return back();
    }

    public function delete($postId)
    {
        try {
            $this->commentService->deleteComment($postId);
             return  redirect()->back()->with('success', 'Siz yozgan fikr o`chirildi !');
        } catch (\Exception $e) {
           return redirect()->back()->with('error', 'Xatolik sodir bo`ldi !');
        }
    
        return redirect()->back();
    }
    
}
