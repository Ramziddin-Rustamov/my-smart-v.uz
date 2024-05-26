<?php

use App\Http\Controllers\API\v1\Announcement\AnnouncementApiController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\v1\AuthController;

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
});