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

Route::get('/', function () {
return View('Welcome');
});

Route::get('/pais','PaisController@index')->name('pais.index');
Route::get('/funcionarios', 'FuncionarioController@index')->name('funcionario.index');
Route::post('/funcionarios','FuncionarioController@store')->name('funcionario.create');
Route::get('/conyuges', 'ConyugeController@index')->name('conyuge.index');
Route::get('/conyuges/create/{id}', 'ConyugeController@create')->name('conyuge.create');
Route::post('/conyuges','ConyugeController@store')->name('conyuge.store');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
