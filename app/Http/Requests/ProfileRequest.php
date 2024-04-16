<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProfileRequest extends FormRequest
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
            'first_name' => 'required|max:20',
            'last_name' => 'required|max:20',
            'father_name' => 'required|max:20',
            'image' => 'max:10240|mimes:jpg,bmp,png',
            'instagram' => 'nullable',
            'telegram' => 'nullable',
            'whatsup' => 'nullable',
            'job' => 'nullable|string',
            'location' => 'nullable|string',
            'phone' => 'nullable|string',
            'about' => 'nullable|string',
        ];
    }
}
