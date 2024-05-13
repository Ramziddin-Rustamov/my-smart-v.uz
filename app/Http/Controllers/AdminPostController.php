<?php
namespace App\Http\Controllers;

use App\Http\Requests\AdminPostRequest;
use App\Http\Requests\PostRequest;
use App\Models\Post;
use App\Services\AdminPostService;
use App\Services\PostService;
use Illuminate\Support\Facades\Auth;

class AdminPostController extends Controller
{
    protected $postService;

    public function __construct(AdminPostService $postService)
    {
        $this->postService = $postService;
    }

    public function index()
    {
        $posts = $this->postService->getAllPostsPaginated();
        return view('admin.post.index', ['posts' => $posts]);
    }

    public function create()
    {
        return view('admin.post.create');
    }

    public function store(AdminPostRequest $request)
    {
        $this->postService->createPost(
            Auth::user()->id,
            $request->title,
            $request->body,
            $request->file('image')
        );

        return back()->with('success', 'Yangilik qo\'shildi!');
    }

    public function edit(Post $post)
    {
        return view('admin.post.edit', ['post' => $post]);
    }

    public function update(AdminPostRequest $request, Post $post)
    {
        $this->postService->updatePost(
            $post,
            Auth::user()->id,
            $request->title,
            $request->body,
            $request->file('image')
        );

        return redirect()->route('posts.index')->with('success', 'Taxrirlandi!');
    }

    public function destroy($id)
    {
         $this->postService->deletePost($id);
         return back()->with('success', 'O`chirildi !');
    }
}
