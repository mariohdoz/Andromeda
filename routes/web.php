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

Route::get('/', function () {return view('welcome');});

Route::get('/', 'ListController@show'); //Llama al controlador e invoca la funcion show

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::get('/logout', function() {
  Auth::logout();
  return redirect('/');
});