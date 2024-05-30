<?php

namespace App\Http\Controllers\API\v1\Region;

use App\Http\Controllers\Controller;
use App\Services\RegionService;
use App\Http\Resources\API\v1\Region\RegionResource;
use Illuminate\Http\JsonResponse;

class RegionController extends Controller
{
    protected $regionService;

    public function __construct(RegionService $regionService)
    {
        $this->regionService = $regionService;
    }

    public function index(): JsonResponse
    {
        $regions = $this->regionService->getAllRegions();
        return response()->json(RegionResource::collection($regions));
    }
}