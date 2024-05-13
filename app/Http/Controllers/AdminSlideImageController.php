<?php
namespace App\Http\Controllers;

use App\Http\Requests\SlideImageRequest;
use App\Services\SlideImageService;

class AdminSlideImageController extends Controller
{
    protected $slideImageService;

    public function __construct(SlideImageService $slideImageService)
    {
        $this->slideImageService = $slideImageService;
    }

    public function index()
    {
        $slides = $this->slideImageService->getAll();
        return view('admin.slide.index', ['slides' => $slides]);
    }

    public function create()
    {
        return view('admin.slide.create');
    }

    public function store(SlideImageRequest $request)
    {
        $this->slideImageService->createSlide(
            $request->title,
            $request->body,
            $request->file('image')
        );

        return redirect()->route('slide.index')->with('success', 'Yangi Rasm qo`shildi');
    }

    public function delete($id)
    {
        $this->slideImageService->deleteSlide($id);
        return back()->with('success', 'Rasm o`chirildi');
    }
}
