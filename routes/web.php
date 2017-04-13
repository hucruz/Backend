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
    return view('welcome');
});

Route::get("test", "MensajeController@index");
Route::post("formulario", "MensajeController@registrar");
Route::get("formulario", "MensajeController@formulario");
Route::get("test/{variable}","MensajeController@index2");
