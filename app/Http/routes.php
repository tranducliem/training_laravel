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

//Route::get('/', function () { return view('welcome'); });
Route::get('/', 'WelcomeController@index');
Route::get('/contact', 'WelcomeController@contact');
Route::get('/about', 'WelcomeController@about');
Route::get('/aboutme', 'PagesController@about_me');
/*Route::get('/articles', 'ArticlesController@index');
Route::get('/articles/create', 'ArticlesController@create');
Route::post('/articles', 'ArticlesController@store');*/

Route::resource('articles', 'ArticlesController');
Route::resource('tasks', 'TasksController');
