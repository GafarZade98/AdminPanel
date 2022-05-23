<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TestRequest extends FormRequest
{

    public function rules()
    {
        return [
            'name'=> 'string|nullable',
            'detail'=> 'string|nullable',
        ];
    }
}