<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use App\User;

use App\Role;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
       return view('home');
    }

    public function signup() {  return view('register'); }

    public function getAdminPage()
    {
        $users = User::all();
        return view('admin', ['users' => $users]);
    }

    public function getAuthorPage() { return view('author'); }

    public function getGenerateArticle()
    {
        return response('Article generated!', 200);
    }

    public function postAdminAssignRoles(Request $request)
    {

        $users  = User::where('email', $request['email'])->first();
        $user->roles()->detach();
        if($request['role_user'])
        {
            $user->roles()->attach(Role::where('name', 'User')->first());
        }
        if($request['role_author'])
        {
            $user->roles()->attach(Role::where('name', 'Author')->first());
        }
        if($request['role_admin'])
        {
            $user->roles()->attach(Role::where('name', 'Admin')->first());
        }
        return  redirect()->back();
    }
}
