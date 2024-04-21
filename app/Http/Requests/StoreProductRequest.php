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
            'name' => 'required',
            'price' => 'required|min:0|max:20',
            'body' => 'required',
            'quantity' => 'required|min:0|max:30',
            // 'image' => 'required|image|mimes:jpeg,png,jpg,svg',
        ];
    }
}
