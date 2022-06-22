<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Models\User;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function show()
    {
        return view('auth.login');
    }
    public function submit(LoginRequest $request)
    {
        return view('home', ['users' => $users]);
    }
}
