<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class OrderRequest extends FormRequest
{
    public function rules()
    {
        return [
            'name' => 'string|nullable',
            'phone' => 'string|nullable',
            'zip' => 'string|nullable',
            'city' => 'string|nullable',
            'address' => 'string|nullable',
            'amount' => 'string|nullable',
            'shipping' => 'string|nullable',
        ];
    }
}
