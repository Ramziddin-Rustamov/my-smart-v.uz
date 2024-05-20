<?php
namespace App\Http\Controllers;

// services

use App\Services\AdminService;
use App\Services\PostService;
use App\Services\SlideImageService;
use App\Services\UserService;
use App\Services\VillageInfoService;

class WelcomeController extends Controller
{
    private $postService;
    private $userService;
    private $slideImageService;
    private $villageInfoService;
    private $adminService;

    public function __construct( PostService $postService, UserService $userService,
        SlideImageService $slideImageService, VillageInfoService $villageInfoService,
     AdminService $adminService )
    {
        $this->postService = $postService;
        $this->userService = $userService;
        $this->slideImageService = $slideImageService;
        $this->villageInfoService = $villageInfoService;
        $this->adminService = $adminService;
    }
    public function index()
    {
        $postCount = $this->postService->countPosts();
        $teamCount = $this->userService->countUsers();
        $team = $this->userService->getAdminUsers(4);
        $slides = $this->slideImageService->getAll();
        $posts = $this->postService->getLatestPosts(6);
        $villageInfo = $this->villageInfoService->getAll();
        $director = $this->adminService->getVillageDirector();
        return view('welcome', compact('posts','team','slides','postCount','teamCount','villageInfo','director'));
    }
}
