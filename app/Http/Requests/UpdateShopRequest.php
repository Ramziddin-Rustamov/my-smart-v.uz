<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateShopRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'string|max:60|min:5',
            'address' => 'string|max:100|min:10',
            'opened_date' => 'date',
            'image' => 'nullable|image|mimes:jpeg,png,jpg|max:1048',
            'phone' => 'nullable|string',
        ];
    }
}
