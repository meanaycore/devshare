<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

use App\Role;

class HomeController extends Controller
{
    public function index()
    {
        return view('home');
    }

   public function getAuthorPage()
   {
     return view('author');
   }

   public function getAdminPage()
   {
     $users = User::all();
     return view('admin', ['users' => $users]);
   }

   public function getGenerateArticle()
   {
     return response('Article generated!', 200);
   }

   public function postAdminAssignRoles(Request $request)
   {
     $user = User::where('email', $request['email'])->first();
     $user->roles()->detach();

     if($request['role_user']){
       $user->roles()->attach(Role::where('name', 'User')->first());
     }
     if($request['role_author']){
       $user->roles()->attach(Role::where('name', 'Author')->first());
     }
     if($request['role_admin']){
       $user->roles()->attach(Role::where('name', 'Admin')->first());
     }
     return redirect()->back();
   }
}
