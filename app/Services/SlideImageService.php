<?php 

namespace App\Services;

use App\Repositories\SlideImageRepository;
use Illuminate\Http\UploadedFile;

class SlideImageService
{
    protected $slideImageRepository;

    public function __construct(SlideImageRepository $slideImageRepository)
    {
        $this->slideImageRepository = $slideImageRepository;
    }

    public function getAll()
    {
        return $this->slideImageRepository->getAll();
    }

    public function createSlide($title, $body, UploadedFile $image)
    {
        return $this->slideImageRepository->create($title, $body, $image);
    }

    public function deleteSlide($id)
    {
        $this->slideImageRepository->delete($id);
    }
}
