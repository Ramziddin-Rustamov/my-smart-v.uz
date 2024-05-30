<?php

namespace App\Http\Controllers\API\v1\Contact;

use App\Http\Controllers\Controller;
use App\Http\Requests\ContactRequest;
use App\Services\ContactService;
use App\Http\Resources\API\v1\Contact\ContactResource;
use Illuminate\Http\JsonResponse;

class ContactController extends Controller
{
    private $contactService;

    public function __construct(ContactService $contactService)
    {
        $this->contactService = $contactService;
    }

    public function store(ContactRequest $request)
    {
        try {
            $contact = $this->contactService->createContactMessage($request);
            return response()->json([
                'success' => true,
                'message' => 'Message sent successfully',
                'data' => new ContactResource($contact)
            ], 201);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Failed to send message',
                'error' => $e->getMessage()
            ], 500);
        }
    }
}