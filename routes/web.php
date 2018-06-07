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


Route::get('add','UniversidadController@create');
Route::post('add','UniversidadController@store');

Route::get('universidad','UniversidadController@index');

Route::get('edit/{id}','UniversidadController@edit');
Route::post('edit/{id}','UniversidadController@update');

Route::delete('{id}','UniversidadController@destroy');

Auth::routes();
