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
    return view('welcome');
})->name('main');

    Route::get('/author', [

        'uses'  =>  'HomeController@getAuthorPage',
        'as'    =>  'author'

    ]);

    Route::get('/author/generate-article', [

        'uses'  =>  'HomeController@getGenerateArticle',
        'as'    =>  'author.article'

    ]);

    Route::get('/admin', [

        'uses'  =>  'HomeController@getAdminPage',
        'as'    =>  'admin'
      
    ]);

    Route::post('/admin/assign-roles', [

        'uses'  =>  'HomeController@postAdminAssignRoles',
        'as'    =>  'admin.assign'

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
