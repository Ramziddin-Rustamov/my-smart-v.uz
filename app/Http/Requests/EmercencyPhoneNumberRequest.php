<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EmergencyPhoneNumberRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'fio' => 'required|string',
            'role' => 'required|string',
            'phone_number' => 'required|string',
            'quarter_id' => 'required|integer',
        ];
    }
}