<?php

namespace App\Services;

use Illuminate\Support\Facades\Cache;
use App\Models\Contact;

class ContactService
{
    public function getAllContacts()
    {
        $cacheKey = 'all_contacts';
         return Cache::remember($cacheKey, now()->addMinute(1), function () {
            return Contact::orderBy('id', 'DESC')->where('quarter_id',$this->getQuarterId())->paginate(20);
        });
    }

    private function getQuarterId()
    {
        return auth()->user()->quarter->id;
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
        $contact = Contact::where('id',$id)->where('quarter_id',$this->getQuarterId())->first();
       if($contact){
         return  $contact->delete();
       }
    }

    public function createContactMessage($contactRequest)
    {
        $data = $contactRequest->validated();
        $contact = new Contact([
            'quarter_id' => $this->getQuarterId(),
            'reason' => $data['reason'],
            'message' => $data['message'],
            'name' => $data['name'],
            'phone' => $data['phone']
        ]);
        $contact->save();
        return redirect()->back();
    }
    
}