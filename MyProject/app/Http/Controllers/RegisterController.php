<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Http\Requests\RegisterRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
    public function show() {
        return view('auth.register');
    }
    public function submit(RegisterRequest $request) {

        $user = new User();
        $user->name = $req->input('name');
        $user->email = $req->input('email');
        $user->password = Hash::make($request->input('password'));
        $user->save();
        return redirect()->route('home');
    }
}
