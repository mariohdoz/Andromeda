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

use App\Herramienta;
use andromeda\Tipoherramienta;
use App\Models\Tipoherramientum;

Route::get('/', function () {return view('welcome');});

Route::get('/', 'ListController@show'); //Llama al controlador e invoca la funcion show

Route::get('tipoherramienta/insher', function() {
 tipoherramienta::create(['marcatipo'=>'Hola', 'modelotipo'=>'Hola2', 'tipotipo'=>'cuatico', 'ottipo'=>true,]);
 return 'Se ingreso la wea';
});

Route::get('tipoherramienta/ver', function(){
  $tipoherramienta = new Tipoherramienta();
  $data = $tipoherramienta->all();
  foreach ($data as $post) {
    echo $post->idtipo . '-' . $post->tipotipo .'<br>';
  }
});

Route::group(['middleware' => ['web']], function () {
    Route::resource('Tipoherramienta', 'TipoherramientaController');
});

// Templates
Route::group(array('prefix'=>'/templates/'),function(){
    Route::get('{template}', array( function($template)
    {
        $template = str_replace(".html","",$template);
        View::addExtension('html','php');
        return View::make('templates.'.$template);
    }));
});


Auth::routes();

Route::get('/tipoherramienta', 'TipoherramientaController@index');
Route::get('/home', 'HomeController@index');

Route::get('/logout', function() {
  Auth::logout();
  return redirect('/');
});

Route::group(['middleware' => 'web'], function () {
    Route::auth();
    Route::get('/admin', 'HomeController@index');

});

Route::group(['middleware' => 'web'], function () {
    Route::auth();
    Route::get('/admin', 'HomeController@index');

});
