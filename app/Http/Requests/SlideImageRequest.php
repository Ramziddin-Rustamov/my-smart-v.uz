<?php
namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SlideImageRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'title' => ['max:100', 'required'],
            'body' => ['max:40', 'required'],
            'image' => ['image', 'required', 'mimes:jpg,png,jpeg,svg', 'max:10000'],
        ];
    }

}
