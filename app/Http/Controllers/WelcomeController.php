<?php
namespace App\Http\Controllers;

// services
use App\Services\PostService;
use App\Services\SlideImageService;
use App\Services\UserService;

class WelcomeController extends Controller
{
    private $postService;
    private $userService;
    private $slideImageService;

    public function __construct(
        PostService $postService,
        UserService $userService,
        SlideImageService $slideImageService,
    ) {
        $this->postService = $postService;
        $this->userService = $userService;
        $this->slideImageService = $slideImageService;
    }
    public function index()
    {
        $postCount = $this->postService->countPosts();
        $teamCount = $this->userService->countUsers();

        $team = $this->userService->getAdminUsers(4);
        $slides = $this->slideImageService->getSlideImages(3);
        $posts = $this->postService->getLatestPosts(6);
        return view('welcome', compact('posts','team','slides','postCount','teamCount'));
    }
}
