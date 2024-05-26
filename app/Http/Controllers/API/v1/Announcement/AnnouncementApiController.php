<?php

namespace App\Http\Controllers\API\v1\Announcement;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreAnnouncementRequest;
use App\Http\Requests\UpdateAnnouncementRequest;
use App\Http\Resources\API\v1\Announcement\AnnouncementApiResource;
use App\Services\AnnounceService;
use Illuminate\Support\Facades\Auth;

class AnnouncementApiController extends Controller
{
    protected $announcementService;

    public function __construct(AnnounceService $announcementService)
    {
        $this->announcementService = $announcementService;
    }

    public function publicAnnouncement()
    {
        $announcements = $this->announcementService->getAllAnnouncements();
        return AnnouncementApiResource::collection($announcements);
    }

    public function index()
    {
        $announcements = $this->announcementService->getAllForAuth();
        if($announcements){
            return AnnouncementApiResource::collection($announcements);
        }
        return response()->json(['message' => 'Sizda hali elonlar yoq`'], 404);
    }

    public function store(StoreAnnouncementRequest $request)
    {
        $announcement = $this->announcementService->createAnnouncement($request);
        return new AnnouncementApiResource($announcement);
    }

    public function show($id)
    {
        $announcement = $this->announcementService->getAnnouncementById($id);
        if ($announcement) {
            return new AnnouncementApiResource($announcement);
        } else {
            return response()->json(['message' => 'Bunday e`lon topilmadi'], 404);
        }
    }

    public function update(UpdateAnnouncementRequest $request, $id)
    {
        $updated = $this->announcementService->updateAnnouncement($id, $request);
        if ($updated) {
            $announcement = $this->announcementService->getAnnouncementById($id);
            return new AnnouncementApiResource($announcement);
        } else {
            return response()->json(['message' => 'Announcement not found.'], 404);
        }
    }

    public function destroy($id)
    {
        $deleted = $this->announcementService->deleteAnnouncement($id);
        if ($deleted) {
            return response()->json(['message' => 'Announcement deleted successfully.'], 200);
        } else {
            return response()->json(['message' => 'Announcement not found.'], 404);
        }
    }
}