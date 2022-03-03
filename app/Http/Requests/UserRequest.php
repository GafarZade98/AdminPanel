<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
{
    public function rules()
    {
        $password = $this->isMethod('POST') && !$this->routeIs('account.edit') ? 'required' : 'nullable';
        $unique_user = $this->isMethod('POST') && !$this->routeIs(['account.edit','users.edit']) ? null : $this->user->id;

        return [
            'name'           => 'nullable|string|max:255',
            'avatar'         => 'nullable|image|mimes:jpg,jpeg,gif,png|max:2048',
            'email'          => 'nullable|email:rfc,dns|unique:users,email,' . $unique_user,
            'phone'          => 'nullable|string|max:255',
            'country'        => 'nullable|string|max:255',
            'address'        => 'nullable|string|max:255',
            'about'          => 'nullable|string|max:500',
            'company'        => 'nullable|string|min:1',
            'role_id'        => 'nullable|integer|min:1',
            'is_admin'        => 'nullable',
            'password'       => "$password|confirmed|min:6|string",
        ];
    }
}
