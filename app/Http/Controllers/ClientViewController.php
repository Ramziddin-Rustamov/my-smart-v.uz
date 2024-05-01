<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Services\ClientViewService;
use App\Http\Requests\ClientViewRequest;

class ClientViewController extends Controller
{
    private $clientViewService;

    public function __construct(ClientViewService $clientViewService)
    {
        $this->clientViewService = $clientViewService;
    }

    public function index()
    {
       $clientviews = $this->clientViewService->paginate(80);
       return view('clients.index', compact('clientviews'));
    }

    public function store(ClientViewRequest $request)
    {
        $request->validated();
        $this->clientViewService->create($request->clientView, $request->user()->id);
    
        return back()->with('success', 'Bizga bildirgan fikringiz uchun rahmat');
    }

}
