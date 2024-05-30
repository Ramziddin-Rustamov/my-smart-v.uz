<?php

namespace App\Http\Controllers\API\v1\EmergencyPhoneNumber;

use App\Http\Controllers\Controller;
use App\Http\Requests\EmergencyPhoneNumberRequest;
use App\Http\Resources\API\v1\EmergencyPhoneNumber\EmergencyPhoneNumberResource;
use App\Services\EmergencyPhoneNumberService;
use Illuminate\Http\JsonResponse;

class EmergencyPhoneNumberController extends Controller
{
    protected $emergencyPhoneNumberService;

    public function __construct(EmergencyPhoneNumberService $emergencyPhoneNumberService)
    {
        $this->emergencyPhoneNumberService = $emergencyPhoneNumberService;
    }

    public function index()
    {
        $emergencyPhoneNumbers = $this->emergencyPhoneNumberService->getAllEmergencyPhoneNumbers();
        return response()->json(EmergencyPhoneNumberResource::collection($emergencyPhoneNumbers));
    }

    public function show($id)
    {
        $emergencyPhoneNumber = $this->emergencyPhoneNumberService->getEmergencyPhoneNumberById($id);
        return response()->json(new EmergencyPhoneNumberResource($emergencyPhoneNumber));
    }

    public function store(EmergencyPhoneNumberRequest $request): JsonResponse
    {
        $data = $request->validated();
        $emergencyPhoneNumber = $this->emergencyPhoneNumberService->createEmergencyPhoneNumber($data);
        return response()->json(new EmergencyPhoneNumberResource($emergencyPhoneNumber), 201);
    }

    public function update(EmergencyPhoneNumberRequest $request, $id): JsonResponse
    {
        $data = $request->validated();
        $emergencyPhoneNumber = $this->emergencyPhoneNumberService->updateEmergencyPhoneNumber($id, $data);
        return response()->json(new EmergencyPhoneNumberResource($emergencyPhoneNumber));
    }

    public function destroy($id): JsonResponse
    {
        $this->emergencyPhoneNumberService->deleteEmergencyPhoneNumber($id);
        return response()->json(['message' => 'Emergency phone number deleted successfully']);
    }
}