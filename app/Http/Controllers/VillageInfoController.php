<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\VillageInfoService;

class VillageInfoController extends Controller
{
    protected $villageInfoService;

    public function __construct(VillageInfoService $villageInfoService)
    {
        $this->villageInfoService = $villageInfoService;
    }

    public function index()
    {
        $villageInfo = $this->villageInfoService->getAll();
        return view('admin.village-info.index',[
            'villageInfo' =>$villageInfo
        ]);
    }

    public function create()
    {
        return view('admin.village-info.create');
    }

    public function store(Request $request)
    {
        $this->villageInfoService->create($request->all());

        return redirect()->route('village_infos.index')->with('success', 'Village info created successfully.');
    }

    public function edit($id)
    {
        $villageInfo = $this->villageInfoService->find($id);
        return view('admin.village-info.edit', compact('villageInfo'));
    }

    public function update(Request $request, $id)
    {

        $this->villageInfoService->update($request, $id);

        return redirect()->route('village_infos.index')->with('success', 'Village info updated successfully.');
    }

    public function destroy($id)
    {
        $this->villageInfoService->delete($id);

        return redirect()->route('village_infos.index')->with('success', 'Village info deleted successfully.');
    }
}
