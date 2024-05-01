<?php
namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Services\ContactService;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    private $contactService;
    private $contactRequest;

    public function __construct(ContactService $contactService)
    {
        $this->contactService = $contactService;
    }


    public function store(ContactRequest $contactRequest)
    {
        $this->contactService->createContactMessage($contactRequest->validated());
        return redirect()->back()->with("success","Xabaringiz yuborildi");
    }

}
