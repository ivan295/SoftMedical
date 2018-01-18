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
Route::get('/', function () {return redirect('/login');});
Route::get('/home', function () {return redirect('/admin/index');});
Route::get('/admin/index', 'HomeController@index');
Route::get('/register', 'HomeController@register');
Route::get('/personas/search', 'TipoPersonaController@search');



Route::group(['prefix' => 'admin'], function () {
      Route::resource('/tipoPersona', 'TipoPersonaController');
      Route::resource('/Persona','PersonaController');
      Route::resource('/tipoMedicamento','TipoMedicamentoController');
});
