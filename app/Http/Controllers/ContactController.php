<?php
namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Services\ContactService;
use App\Services\TechnologyService;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    private $technologyService;
    private $contactService;
    private $contactRequest;

    public function __construct(ContactService $contactService ,  TechnologyService $service , )
    {
        // dd('ss');
        $this->technologyService = $service;
        $this->contactService = $contactService;
    }

    // public function index()
    // {
    //     $technologies =  $this->technologyService->getAll();
    //     return view('contact.index',compact('technologies'));
    // }

    public function store(ContactRequest $contactRequest)
    {
        $this->contactService->createContactMessage($contactRequest->validated());
        return redirect()->back()->with("success","Xabaringiz yuborildi");
    }

}
