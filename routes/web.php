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


Route::get('/funcionario', 'FuncionarioController@index')->name('funcionario.index');
Route::post('/funcionario','FuncionarioController@create')->name('funcionario.create');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
