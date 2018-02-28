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
    return view('inicio.inicio');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('/inicio', function () {
    return view('inicio');
});

Route::resource('/usuario', 'UsuarioController');
Route::resource('/pacientes', 'PacienteController');

Route::get('/medicos', function () {
    return view('medico');
});
Route::get('/atenciones', function () {
    return view('atenciones');
});
Route::get('/reportes', function () {
    return view('reportes');
});