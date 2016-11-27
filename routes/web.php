<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::group(['middleware' => 'web'], function () {
  Route::get('/', function () {
    return view('home');
})->name('main');

    Route::get('/author', [

        'uses'  =>  'HomeController@getAuthorPage',
        'as'    =>  'author',
        'middleware' => 'roles',
        'roles' => ['Admin', 'Author']

    ]);

    Route::get('/author/generate-article', [

        'uses'  =>  'HomeController@getGenerateArticle',
        'as'    =>  'author.article',
        'middleware' => 'roles',
        'roles' => ['Author']

    ]);

    Route::get('/admin', [

        'uses'  =>  'HomeController@getAdminPage',
        'as'    =>  'admin',
        'middleware' => 'roles',
        'roles' => ['Admin']

    ]);

    Route::post('/admin/assign-roles', [

        'uses'  =>  'HomeController@postAdminAssignRoles',
        'as'    =>  'admin.assign',
        'middleware' => 'roles',
        'roles' => ['Admin']

    ]);

    Route::get('/signup', [

        'uses'  =>  'AuthController@getSignUpPage',
        'as'    =>  'signup'

    ]);

    Route::post('/signup', [

        'uses'  =>  'AuthController@getSignUpPage',
        'as'    =>  'signup'

    ]);

    Route::get('/signin', [

        'uses'  =>  'AuthController@getSignInPage',
        'as'    =>  'signin'

    ]);

    Route::post('/signin', [

        'uses'  =>  'AuthController@postSignIn',
        'as'    =>  'signin'

    ]);

    Route::get('/logout', [

        'uses'  =>  'AuthController@getLogout',
        'as'    =>  'logout'

    ]);

});
