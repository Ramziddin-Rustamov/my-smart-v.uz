<?php
namespace App\Http\Controllers;

// services
use App\Services\PortfolioService;
use App\Services\PostService;
use App\Services\SlideImageService;
use App\Services\UserService;

class WelcomeController extends Controller
{
    private $postService;
    private $userService;
    private $portfolioService;
    private $slideImageService;

    public function __construct(
        PostService $postService,
        UserService $userService,
        PortfolioService $portfolioService,
        SlideImageService $slideImageService,
    ) {
        $this->postService = $postService;
        $this->userService = $userService;
        $this->portfolioService = $portfolioService;
        $this->slideImageService = $slideImageService;
    }
    public function index()
    {
        $postCount = $this->postService->countPosts();
        $teamCount = $this->userService->countUsers();
        $portfolioCount = $this->portfolioService->countPortfolioes();

        $team = $this->userService->getAdminUsers(4);
        $slides = $this->slideImageService->getSlideImages(3);
        $posts = $this->postService->getLatestPosts(6);
        $portfolio = $this->portfolioService->getLatestPortfolioes(6);
        return view('welcome', compact('posts','team','portfolio','slides','postCount','teamCount','portfolioCount'));
    }
}
