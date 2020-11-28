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

// Home
Route::get('/', function () {
    return 'home';
});

// Usuario 
Route::get('/usuario', 'UserController@index');

// Usuario Nuevo 
Route::get('/usuario/nuevo', 'UserController@create');

// Usuario id
Route::get('/usuario/{id}', 'UserController@show')
    ->where('id', '[0-9]+');

// Saludo name nickname
Route::get('saludo/{name}/{nickname?}','WelcomeController');

 