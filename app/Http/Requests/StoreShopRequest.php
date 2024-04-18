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
            'user_id' => 'exists:users,id',
            'image' => 'nullable|string',
            'phone' => 'nullable|string',
        ];
    }
}
