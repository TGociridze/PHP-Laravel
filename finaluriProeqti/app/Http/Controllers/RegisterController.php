<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
    public function index ()
    {
        return view('users.register');
    }

    public function register (RegisterRequest $request) {
        $user = User::create([
            'name' =>$request->get('name'),
            'email' =>$request->get('email'),
            'password' => bcrypt( $request->get('password')),
        ]);

        $token = $user->createToken('Api_token')->accessToken;
        return redirect('login/index');
    }



}
