<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CartRequest extends FormRequest
{

    public function rules()
    {
        return [
            'product_id' => 'integer|required',
            'color' => 'string|nullable',
            'size' => 'string|nullable',
            'weight' => 'string|nullable',
            'quantity' => 'integer|nullable'
        ];
    }
}
