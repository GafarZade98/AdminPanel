<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SolutionRequest extends FormRequest
{

    public function rules()
    {
        return [
            'description' => 'string|nullable',
            'ordering'    => 'integer|nullable',
            'image'       => 'required|image|mimes:jpg,jpeg,gif,png|max:4096',
            'title'       => 'string|required',
            'link'        => 'string|nullable',
        ];
    }
}
