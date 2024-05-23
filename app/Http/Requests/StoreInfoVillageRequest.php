<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreInfoVillageRequest extends FormRequest
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
            'image' => 'nullable|image|mimes:jpg,jpeg,png,gif|max:2048',
            'title' => 'required',
            'number' => 'required|integer|min:1',
            'territory' => 'required|string|max:255',
            'workers_count' => 'required|integer|min:1',
            'rooms' => 'required|integer|min:1',
            'condition' => 'required|string|max:255',
            'about' => 'required|string|max:1000',
            'customers' => 'required|integer|min:0',
        ];
    }
}
