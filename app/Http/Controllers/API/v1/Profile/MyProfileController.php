<?php

namespace App\Http\Controllers\API\v1\Profile;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProfileRequest;
use App\Services\ProfileService;
use App\Http\Resources\API\v1\UserProfile\UserProfileResource;
use Illuminate\Http\Request;
use App\Models\User;

class MyProfileController extends Controller
{
    protected $profileService;

    public function __construct(ProfileService $profileService)
    {
        $this->middleware('auth:api');
        $this->profileService = $profileService;
    }

    public function index(Request $request)
    {
        $user = $this->profileService->getUserProfile($request);
        return new UserProfileResource($user);
    }

    public function show(Request $request)
    {
        $user = $this->profileService->getUserProfile($request);
        return new UserProfileResource($user);
    }

    public function edit(Request $request,  $id)
    {
        $user = $this->profileService->getUserProfile($request);
        return new UserProfileResource($user);
    }
    public function update(ProfileRequest $request, User $user)
    {
        $user = $this->profileService->updateProfile($user, $request);
        return response()->json([
            'message' => 'Profile updated successfully',
            'user' => new UserProfileResource($user)
        ]);
    }
}