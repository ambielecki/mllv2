<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', 'StaticController@getHome');
Route::get('/registration', 'StaticController@getRegister');
Route::get('/about', 'StaticController@getAbout');

Route::get('/admin/addnews', 'AdminController@getAddNews');
Route::post('/admin/addnews', 'AdminController@postAddNews');

Route::get('/test', 'TestController@getTest');
Route::get('logs', '\Rap2hpoutre\LaravelLogViewer\LogViewerController@index');

//overide the auth logout method which is causing errors, also allows for flash message
Route::get('/logout', function(){
    Auth::logout();
    return redirect()->back()->with('flash_message', 'You have been logged out, see you again soon!');
});

Auth::routes();

