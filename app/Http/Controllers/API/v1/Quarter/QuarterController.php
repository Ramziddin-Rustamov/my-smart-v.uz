<?php

namespace App\Http\Controllers\API\v1\Quarter;

use App\Http\Controllers\Controller;
use App\Services\QuarterService;
use App\Http\Requests\StoreQuarterRequest;
use App\Http\Requests\UpdateQuarterRequest;
use App\Http\Resources\API\v1\Quarter\QuarterResource;
use Illuminate\Http\JsonResponse;

class QuarterController extends Controller
{
    protected $quarterService;

    public function __construct(QuarterService $quarterService)
    {
        $this->quarterService = $quarterService;
    }


    public function index()
    {
        $quarters = $this->quarterService->getAllQuarters();
        return response()->json(QuarterResource::collection($quarters));
    }
}