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
    return view('Login.index');
});
Route::get('/regresar', function () {
    return view('Login.index');
});

Route::get('/persons', function () {
    return view('peple.index');
});

Route::resources([
    'dispositivos'=>'DispositivosController',
    'animales'=>'AnimalesController',
    'tganado'=>'TganadoController',
    'peple'=>'UsuariosController'
]);