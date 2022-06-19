<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
{

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'login' => 'required|exists:users,login',
            'password' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'login.required' => 'Логин обязателен',
            'login.exists' => 'Логин введен неверно',
            'password.required' => 'Пароль обязателен',
        ];
    }
}
