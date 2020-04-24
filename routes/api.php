<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});



Route::apiResource('apiEstufasInstalaciones', 'EstufasApiController');

Route::apiResource('apiEstufasReparaciones', 'EstufasApiReparacionesControllerController');


Route::get('/searchApiInstalaciones', 'EstufasApiController@search');
Route::get('/searchApiReparaciones', 'EstufasApiReparacionesControllerController@search');

Route::middleware('auth:api','trabajadorApi')->get('/servicio',
    function (Request $request) {
        return ['mensaje' => 'Hola trabajador'];
    });

Route::get('/soloTrabajadores',
    function() {
        return ["mensaje" => "Este servicio es solo para trabajadores"];
    })->name('api.soloTrabajadores');