<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

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

    public function index() {  return view('home'); }

    public function signup() {  return view('register'); }

    public function admin()
    {
        $users = User::all();
        return view('admin', ['users' => $users]);
    }

    public function author() { return view('author'); }

}
