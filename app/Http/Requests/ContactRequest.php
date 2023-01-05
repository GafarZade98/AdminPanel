<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
{

    public function rules()
    {
        return [
            'name' => 'string|nullable',
            'email' => 'email|nullable',
            'phone' => 'string|nullable',
            'message' => 'string|nullable',
        ];
    }
}
