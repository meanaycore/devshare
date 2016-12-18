<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

use App\User;

use App\Role;

class AuthController extends Controller
{

    public function getSignUpPage()
    {
        return view('auth.register');
    }

    public function getSignInPage()
    {
        return view('auth.login');
    }

    public function postSignUp(Request $request)
    {
        $user = new User;
        $user->first_name = $request['first_name'];
        $user->last_name  = $request['last_name'];
        $user->email      = $request['email'];
        $user->password   = $request['password'];
        $user->save();
        $user->roles()->attach(Role::where('name', 'User')->first());
        Auth::login($user);
        return redirect()->route('main');
    }

    public function postSignIn(Request $request)
    {
        if(Auth::attempt(['email' => $request['email'], 'password' => $request['password']]))
        {
            return  redirect()->route('main');
        }
        return  redirect()->back();
    }

    public function getLogout()
    {
        Auth::logout();
        return redirect()->route('main');
    }
}
