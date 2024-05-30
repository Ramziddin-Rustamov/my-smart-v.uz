<?php

namespace App\Http\Controllers\API\v1\District;

use App\Http\Controllers\Controller;
use App\Services\DistrictService;
use App\Http\Resources\API\v1\District\DistrictResource;

class DistrictController extends Controller
{
    protected $districtService;

    public function __construct(DistrictService $districtService)
    {
        $this->districtService = $districtService;
    }


    public function index()
    {
        $districts = $this->districtService->getAllDistricts();
        return response()->json(DistrictResource::collection($districts));
    }
}
