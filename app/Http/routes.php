<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::resource('posts', 'PostController');


Route::group(['middleware' => ['web']], function () {

   Route::get('posteditor', 'PagesController@getPosteditor');
   Route::get('blogpost', 'PagesController@getBlogpost');
   Route::get('blog', 'PagesController@getBlog');
   Route::get('signup', 'PagesController@getSignup');
   Route::get('signin', 'PagesController@getSignin');
   Route::get('bootstrap', 'PagesController@getBootstrap');
   Route::get('/', 'PagesController@getIndex');

   //Route::get('posts/create', 'PostController@create');
});
