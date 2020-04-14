<?php

use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

Auth::routes();


Route::get('/', 'EstufaController@index')->name('index');


Route::resource('/admin/estufas', 'Admin\EstufasController');


Route::resource('/admin/estufasReparar', 'Admin\EstufasReparacionesController');

Route::resource('/admin/usuarios', 'Admin\UsuarioController');


Route::get('/search', 'Admin\EstufasController@search');
Route::get('/search', 'Admin\EstufasReparacionesController@search');


