<?php

namespace App\Http\Controllers;

// use Illuminate\Http\Request;
use App\Http\Requests\UpdateAnnouncementRequest;
use App\Http\Requests\StoreAnnouncementRequest;
use App\Models\Announcement;
use App\Services\AnnounceService;
class AnnouncementController extends Controller
{
    protected  $announcementService;

    public function __construct(AnnounceService $announcementService)
    {
        $this->announcementService = $announcementService;
    }
    public function publicAnnouncement()
    {
        $announcements = $this->announcementService->getAllAnnouncements();
        return view('public-announcement.index', compact('announcements'));
    }

    public function index()
    {
        $announcements = $this->announcementService->getAllForAuth();
        return view('announcements.index', compact('announcements'));
    }

    public function create()
    {
        return view('announcements.create');
    }

    public function store(StoreAnnouncementRequest $request)
    {
        $this->announcementService->createAnnouncement($request->validated());
        return redirect()->route('announcements.index')->with('success', 'Announcement created successfully.');
    }

    public function edit($id)
    {
        // Retrieve the announcement by ID
        $announcement = $this->announcementService->getAnnouncementById($id);

        // Return the edit view with the announcement data
        return view('announcements.edit', compact('announcement'));
    }

    public function update(UpdateAnnouncementRequest $request, $id)
    {
        $this->announcementService->updateAnnouncement($id, $request->validated());
        return redirect()->route('announcements.index')->with('success', 'Announcement updated successfully.');
    }

    public function destroy($id)
    {
        // dd("a");
        $this->announcementService->deleteAnnouncement($id);
        return redirect()->route('announcements.index')->with('success', 'Ma`lumotlar o`chirildi !');
    }
}
