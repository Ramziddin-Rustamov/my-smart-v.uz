<?php

namespace App\Http\Controllers;

use App\Http\Requests\EmergencyPhoneNumberRequest;
use App\Services\EmergencyPhoneNumberService;
use Illuminate\Http\Request;

class EmergencyPhoneNumberController extends Controller
{
    protected $emergencyPhoneNumberService;

    public function __construct(EmergencyPhoneNumberService $emergencyPhoneNumberService)
    {
        $this->emergencyPhoneNumberService = $emergencyPhoneNumberService;
    }

    public function publicIndex()
    {
        $emergencyPhoneNumbers = $this->emergencyPhoneNumberService->getAllEmergencyPhoneNumbers();
        return view('phonenumbers.emergency', compact('emergencyPhoneNumbers'));
    }

    public function index()
    {
        $emergencyPhoneNumbers = $this->emergencyPhoneNumberService->getAllEmergencyPhoneNumbers();
        return view('emergency_phone_numbers.index', compact('emergencyPhoneNumbers'));
    }

    public function show($id)
    {
        $emergencyPhoneNumber = $this->emergencyPhoneNumberService->getEmergencyPhoneNumberById($id);
        return view('emergency_phone_numbers.show', compact('emergencyPhoneNumber'));
    }

    public function create()
    {
        return view('emergency_phone_numbers.create');
    }

    public function store(EmergencyPhoneNumberRequest $request)
    {
        $data = $request->validated();
        $this->emergencyPhoneNumberService->createEmergencyPhoneNumber($data);
        return redirect()->route('emergency_phone_numbers.index');
    }

    public function edit($id)
    {
        $emergencyPhoneNumber = $this->emergencyPhoneNumberService->getEmergencyPhoneNumberById($id);
        return view('emergency_phone_numbers.edit', compact('emergencyPhoneNumber'));
    }

    public function update(EmergencyPhoneNumberRequest $request, $id)
    {
        $data = $request->validated();

        $this->emergencyPhoneNumberService->updateEmergencyPhoneNumber($id, $data);
        return redirect()->route('emergency_phone_numbers.index');
    }

    public function destroy($id)
    {
        $this->emergencyPhoneNumberService->deleteEmergencyPhoneNumber($id);
        return redirect()->route('emergency_phone_numbers.index');
    }
}