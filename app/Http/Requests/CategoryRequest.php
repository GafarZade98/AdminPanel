<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CategoryRequest extends FormRequest
{
    public function rules()
    {
        return [
            'category_id' => 'integer|nullable',
            'description' => 'string|nullable',
            'keyword'     => 'string|nullable',
            'image'       => 'nullable|image|mimes:jpg,jpeg,gif,png|max:4096',
            'name'        => 'string|required',
        ];
    }
}
