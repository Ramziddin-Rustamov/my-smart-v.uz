<?php
namespace App\Http\Controllers\API\v1\ClientView;

use App\Http\Controllers\Controller;
use App\Services\ClientViewService;
use App\Http\Requests\ClientViewRequest;
use App\Http\Resources\API\v1\ClientView\ClientViewApiResource;
use Illuminate\Http\Request;

class ClientViewApiController extends Controller
{
    private $clientViewService;

    public function __construct(ClientViewService $clientViewService)
    {
        $this->clientViewService = $clientViewService;
    }

    public function index()
    {
        $clientviews = $this->clientViewService->paginate(50);
        return ClientViewApiResource::collection($clientviews);
    }

    public function store(ClientViewRequest $request)
    {
        $validated = $request->validated();
        $clientView = $this->clientViewService->create($validated['clientView'], $request->user()->id);
    
        return new ClientViewApiResource($clientView);
    }
}