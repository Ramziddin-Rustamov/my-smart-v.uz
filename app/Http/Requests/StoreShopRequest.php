<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreShopRequest extends FormRequest
{
    
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'name' => 'string',
            'address' => 'string',
            'opened_date' => 'date',
            'image' => 'nullable|image|mimes:jpeg,png,jpg|max:3048',
            'phone' => 'nullable|string',
        ];
    }
}
