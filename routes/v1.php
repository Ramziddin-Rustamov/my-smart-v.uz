<?php

use App\Http\Controllers\API\v1\Announcement\AnnouncementApiController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\v1\AuthController;
use App\Http\Controllers\API\v1\ClientView\ClientViewApiController;
use App\Http\Controllers\API\v1\Comment\CommentApiController;
use App\Http\Controllers\API\v1\Contact\ContactController;
use App\Http\Controllers\API\v1\Region\RegionController;
use App\Http\Controllers\API\v1\District\DistrictController;
use App\Http\Controllers\API\v1\EmergencyPhoneNumber\EmergencyPhoneNumberController;
use App\Http\Controllers\API\v1\People\PeopleController;
use App\Http\Controllers\API\v1\Post\PostsController;
use App\Http\Controllers\API\v1\PostLike\PostLikesController;
use App\Http\Controllers\API\v1\Product\ProductController;
use App\Http\Controllers\API\v1\Profile\MyProfileController;
use App\Http\Controllers\API\v1\Quarter\QuarterController;
use App\Http\Controllers\API\v1\Shop\ShopController;

Route::post('login', [AuthController::class, 'login']);
Route::post('register', [AuthController::class, 'register']);

Route::middleware(['auth:api'])->group(function () {
    Route::post('logout', [AuthController::class, 'logout']);
    Route::post('refresh', [AuthController::class, 'refresh']);

    Route::get('announcements/public', [AnnouncementApiController::class, 'publicAnnouncement']);
    Route::get('announcements', [AnnouncementApiController::class, 'index']);
    Route::post('announcements', [AnnouncementApiController::class, 'store']);
    Route::get('announcements/{id}', [AnnouncementApiController::class, 'show']);
    Route::put('announcements/{id}', [AnnouncementApiController::class, 'update']);
    Route::delete('announcements/{id}', [AnnouncementApiController::class, 'destroy']);

    // for client view 
    Route::get('client-views', [ClientViewApiController::class, 'index']);
    Route::post('client-views', [ClientViewApiController::class, 'store']);

    // commment 
    Route::post('comments', [CommentApiController::class, 'store']);
    Route::delete('comments/{postId}', [CommentApiController::class, 'delete']);

    // controller
    Route::post('contacts', [ContactController::class, 'store']);
    // Region routes
    Route::get('regions', [RegionController::class, 'index']);

    // District routes
    Route::get('districts', [DistrictController::class, 'index']);

    // Quarter routes
    Route::get('quarters', [QuarterController::class, 'index']);

    Route::get('emergency-phone-numbers', [EmergencyPhoneNumberController::class, 'index']);
    Route::post('emergency-phone-numbers', [EmergencyPhoneNumberController::class, 'store']);
    Route::get('emergency-phone-numbers/{id}', [EmergencyPhoneNumberController::class, 'show']);
    Route::put('emergency-phone-numbers/{id}', [EmergencyPhoneNumberController::class, 'update']);
    Route::delete('emergency-phone-numbers/{id}', [EmergencyPhoneNumberController::class, 'destroy']);


    //  for profile
    Route::get('profile', [MyProfileController::class, 'index']);
    Route::get('profile/{id}', [MyProfileController::class, 'show']);
    Route::get('profile/{id}/edit', [MyProfileController::class, 'edit']);
    Route::put('profile/{user}', [MyProfileController::class, 'update']);

    // people 
    Route::get('people', [PeopleController::class, 'index']);
    Route::get('people/{id}', [PeopleController::class, 'show']);

    // post like and dislike 
    Route::post('posts/{post}/like', [PostLikesController::class, 'store']);
    Route::delete('posts/{post}/dislike', [PostLikesController::class, 'destroy']);

    // post
    Route::get('all-post', [PostsController::class, 'allPosts']);
    Route::get('posts', [PostsController::class, 'index']);
    Route::get('posts/{post}', [PostsController::class, 'findOne']);
    Route::get('latest-posts', [PostsController::class, 'getThree']);

    // Product routes
    Route::get('products', [ProductController::class, 'index']);
    Route::post('products', [ProductController::class, 'store']);
    Route::get('products/{product}', [ProductController::class, 'show']);
    Route::put('products/{product}', [ProductController::class, 'update']);
    Route::delete('products/{product}', [ProductController::class, 'destroy']);

    // Shops
    Route::get('/shops', [ShopController::class, 'index']);
    Route::post('/shops', [ShopController::class, 'store']);
    Route::get('/shops/{id}', [ShopController::class, 'show']);
    Route::put('/shops/{id}', [ShopController::class, 'update']);
    Route::delete('/shops/{id}', [ShopController::class, 'destroy']);
    Route::get('/public-shops', [ShopController::class, 'publicShops']);
    Route::get('/shops/{shopId}/products', [ShopController::class, 'shopProducts']);
});