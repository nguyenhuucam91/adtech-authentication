<?php

namespace Adtech\Authentication\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthenticationController extends Controller
{
    public function showLoginForm()
    {
        return view('authentication::authentication.index');
    }

    public function createUser()
    {
        $user = new User();
        $user->email = 'nguyenhuucam92@gmail.com';
        $user->name = "camnh";
        $user->password = Hash::make('123456');
        $user->save();
    }

    public function login(Request $request)
    {
        $email = $request->input('email');
        $password = $request->input('password');
        if (Auth::attempt(['email' => $email, 'password' => $password])) {
            return 'successfully logged in';
        }

        return 'failed';
    }
}
