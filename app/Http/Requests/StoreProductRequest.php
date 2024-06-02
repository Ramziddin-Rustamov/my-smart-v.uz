<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProductRequest extends FormRequest
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
            'shop_id' => 'required|exists:shops,id',
            'name' => 'required|min:3|max:20',
            'price' => 'required|min:2|max:20',
            'body' => 'required|min:10|max:150',
            'quantity' => 'required|min:1|max:20',
            'image' => 'image|mimes:jpeg,png,jpg|max:10062',
        ];
    }
}
