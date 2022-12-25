<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SettingRequest extends FormRequest
{
    public function rules()
    {
        return [
            'key'         => 'required|string',
            'value'       => 'nullable',
            'description' => 'nullable|string',
            'ordering'    => 'nullable|integer',
            'type'        => 'nullable',
            'status'      => 'nullable',
        ];
    }
}
