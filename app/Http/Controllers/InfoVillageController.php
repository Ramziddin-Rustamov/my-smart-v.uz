<?php

// app/Http/Controllers/InfoVillageController.php
namespace App\Http\Controllers;

use App\Http\Requests\StoreInfoVillageRequest;
use App\Services\InfoVillageService;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class InfoVillageController extends Controller
{
    protected $infoVillageService;

    public function __construct(InfoVillageService $infoVillageService)
    {
        $this->infoVillageService = $infoVillageService;
    }

    public function index()
    {
        $infoVillages = $this->infoVillageService->getAll();
        return view('admin.info_villages.index', compact('infoVillages'));
    }

    public function show($id)
    {
        $infoVillage = $this->infoVillageService->find($id);
        return view('admin.info_villages.show', compact('infoVillage'));
    }

    public function create()
    {
        return view('admin.info_villages.create');
    }

    public function store(StoreInfoVillageRequest $request)
    {

        try {
            $infoVillage = $this->infoVillageService->create($request);
            return redirect()->route('info_villages.index')->with('success', 'InfoVillage created successfully.');
        } catch (ValidationException $e) {
            return redirect()->back()->withErrors($e->errors())->withInput();
        }
    }

    public function edit($id)
    {
        $infoVillage = $this->infoVillageService->find($id);
        return view('admin.info_villages.edit', compact('infoVillage'));
    }

    public function update(StoreInfoVillageRequest $request, $id)
    {

        try {
            $infoVillage = $this->infoVillageService->update($id, $request);
            return redirect()->route('info_villages.index')->with('success', 'InfoVillage updated successfully.');
        } catch (ValidationException $e) {
            return redirect()->back()->withErrors($e->errors())->withInput();
        }
    }

    public function destroy($id)
    {
        $this->infoVillageService->delete($id);
        return redirect()->route('info_villages.index')->with('success', 'InfoVillage deleted successfully.');
    }
}
