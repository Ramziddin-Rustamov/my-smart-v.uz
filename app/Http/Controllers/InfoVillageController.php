<?php

// app/Http/Controllers/InfoVillageController.php
namespace App\Http\Controllers;

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

    public function store(Request $request)
    {
        $data = $request->all();

        try {
            $infoVillage = $this->infoVillageService->create($data);
            return redirect()->route('admin.info_villages.index')->with('success', 'InfoVillage created successfully.');
        } catch (ValidationException $e) {
            return redirect()->back()->withErrors($e->errors())->withInput();
        }
    }

    public function edit($id)
    {
        $infoVillage = $this->infoVillageService->find($id);
        return view('admin.info_villages.edit', compact('infoVillage'));
    }

    public function update(Request $request, $id)
    {
        $data = $request->all();

        try {
            $infoVillage = $this->infoVillageService->update($id, $data);
            return redirect()->route('admin.info_villages.index')->with('success', 'InfoVillage updated successfully.');
        } catch (ValidationException $e) {
            return redirect()->back()->withErrors($e->errors())->withInput();
        }
    }

    public function destroy($id)
    {
        $this->infoVillageService->delete($id);
        return redirect()->route('admin.info_villages.index')->with('success', 'InfoVillage deleted successfully.');
    }
}
