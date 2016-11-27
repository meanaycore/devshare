<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

use Illuminate\Http\Request;

use App\User;

use App\Role;

class AuthController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest', ['except' => 'logout']);
    }

    public function getSignUpPage()
    {
        return view('auth.signup');
    }

    public function getSignInPage()
    {
        return view('auth.signin');
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
