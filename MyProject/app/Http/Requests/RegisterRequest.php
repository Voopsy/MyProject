<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required',
            'email' => 'required',
            'login' => 'required|exists:users,login',
            'password' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'login.required' => 'Логин обязателен',
            'password.required' => 'Пароль обязателен',
        ];
    }
}
