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
Route::get('/register', 'StaticController@getRegister');
Route::get('/about', 'StaticController@getAbout');

Route::get('/admin/addnews', 'AdminController@getAddNews');
Route::post('/admin/addnews', 'AdminController@postAddNews');

Route::get('/test', 'TestController@getTest');
Route::get('logs', '\Rap2hpoutre\LaravelLogViewer\LogViewerController@index');