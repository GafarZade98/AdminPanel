<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PartnerRequest extends FormRequest
{
    public function rules()
    {
        return [
            'name'        => 'string|required',
            'image'       => 'nullable|image|mimes:jpg,jpeg,gif,png|max:4096',
            'ordering'    => 'integer|nullable',
        ];
    }
}
