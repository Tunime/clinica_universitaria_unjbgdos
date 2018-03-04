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
Route::resource('/historial', 'HistorialController');
//Route::resource('/usuario/historial','HistorialController');
/*Route::post('/usuario/historial', function () {
    return view('inicio.historialusuario');
});*/

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware' => 'rolesusuario'], function () {
    Route::get('/inicio', function () {
        return view('inicio');
    });
    Route::resource('/usuario', 'UsuarioController');
    Route::resource('/pacientes', 'PacienteController');
    Route::resource('/medicos', 'MedicoController');
    Route::resource('/atenciones', 'AtencionController');
});

Route::get('/reportes', function () {
    return view('reportes');
});