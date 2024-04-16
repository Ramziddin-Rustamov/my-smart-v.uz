<?php

namespace App\Services;

use Illuminate\Support\Facades\Cache;
use App\Models\Contact;

class ContactService
{
    public function getAllContacts()
    {
        $cacheKey = 'all_contacts';
         return Cache::remember($cacheKey, now()->addMinute(2), function () {
            return Contact::orderBy('id', 'DESC')->paginate(20);
        });
    }

    public function getContactById($id)
    {
        $cacheKey = "contact_{$id}";
        return  Cache::remember($cacheKey, now()->addMinutes(15), function () use ($id) {
            return Contact::findOrFail($id);
        });
    }

    public function deleteContact($id)
    {
        $cacheKey = 'all_contacts';
        Cache::forget($cacheKey);

        $contact = Contact::findOrFail($id);
        $contact->delete();
    }

    public function createContactMessage($data)
    {
        $contact = new Contact([
            'reason' => $data['reason'],
            'message' => $data['message'],
            'name' => $data['name'],
            'phone' => $data['phone']
        ]);
        $contact->save();
        return redirect()->back();
    }
    
}