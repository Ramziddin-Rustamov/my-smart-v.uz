<?php
namespace App\Http\Controllers;

// services

use App\Services\AdminService;
use App\Services\InfoVillageService;
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
    private $infoVillageService;

    public function __construct( PostService $postService, UserService $userService,
        SlideImageService $slideImageService, VillageInfoService $villageInfoService,
     AdminService $adminService , InfoVillageService $infoVillageService)
    {
        $this->postService = $postService;
        $this->userService = $userService;
        $this->slideImageService = $slideImageService;
        $this->villageInfoService = $villageInfoService;
        $this->adminService = $adminService;
        $this->infoVillageService = $infoVillageService;
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
        $infoVillage = $this->infoVillageService->getAll();
        return view('welcome', compact('posts','team','slides','postCount','teamCount','villageInfo','director','infoVillage'));
    }
}
