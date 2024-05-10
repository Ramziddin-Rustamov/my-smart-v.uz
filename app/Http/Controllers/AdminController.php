<?php
namespace App\Http\Controllers;

use App\Services\AdminService;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    protected $service;

    public function __construct(AdminService $service)
    {
        $this->service = $service;
    }

    public function index()
    {
        $admins = $this->service->all();
        return view('admin.admins.index', compact('admins'));
    }

    // public function show($id)
    // {
    //     $admin = $this->service->find($id);
    //     return view('admin.admins.show', compact('admin'));
    // }

    public function create()
    {
        $users = $this->service->users();
        $quarters = $this->service->quarters();
        return view('admin.admins.create',compact('users','quarters'));
    }

    public function store(Request $request)
    {
        $admin = $this->service->create($request->all());
        return redirect()->route('admins.index')->with('success','Yangi admin qo\'shildi');
    }

    public function update(Request $request, $id)
    {
        $this->service->update($id, $request->all());
        return redirect()->route('admins.index')->with('success','Yangilandi ');
    }

    public function destroy($id)
    {
        $this->service->delete($id);
        return redirect()->route('admins.index')->with('success','O`chirildi');
    }
}
