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
            'name' => 'string|max:60|min:5',
            'address' => 'string|max:100|min:10',
            'opened_date' => 'date',
            'image' => 'nullable|image|mimes:jpeg,png,jpg|max:3048',
            'phone' => 'nullable|string',
        ];
    }
}