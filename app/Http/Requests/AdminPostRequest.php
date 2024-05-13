<?php
namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AdminPostRequest extends FormRequest
{
    public function authorize()
    {
        return true; 
    }

    public function rules()
    {
        return [
            'title' => ['required'],
            'body' => ['required'],
            'image' => ['image', 'mimes:jpg,jpeg,png', 'max:5120', 'required'],
        ];
    }
}
