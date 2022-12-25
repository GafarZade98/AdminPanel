<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
{
    public function rules()
    {
        return [
            'category_id' => 'integer|nullable',
            'description' => 'string|nullable',
            'quantity'    => 'integer|nullable',
            'keyword'     => 'string|nullable',
            'weight'      => 'integer|nullable',
            'stock'       => 'integer|required',
            'price'       => 'integer|required',
            'color'       => 'string|nullable',
            'image'       => 'nullable|image|mimes:jpg,jpeg,gif,png|max:4096',
            'name'        => 'string|required',
            'size'        => 'string|nullable',
            'tax'         => 'integer|required',
        ];
    }
}
