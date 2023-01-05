<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FaqRequest extends FormRequest
{

    public function rules()
    {
        return [
            'question' => 'string|required',
            'answer'   => 'string|required',
            'ordering' => 'integer|nullable',
        ];
    }
}
