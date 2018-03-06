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
        //return view('inicio');
        $paciente = DB::table('pacientes')
            ->selectRaw('count(*) as pacount')
            ->first();
        $doctor = DB::table('medicos')
            ->selectRaw('count(*) as docount')
            ->first();
        $atencion = DB::table('atenciones')
            ->selectRaw('count(*) as atecount')
            ->first();
        //dd($users);
        return view('inicio',compact('paciente','doctor','atencion'));
    });
    Route::resource('/usuario', 'UsuarioController');
    Route::resource('/pacientes', 'PacienteController');
    Route::resource('/medicos', 'MedicoController');
    Route::resource('/atenciones', 'AtencionController');
    Route::resource('/auditoria/medico', 'AuditoriamedicoController');
    Route::resource('/auditoria/paciente', 'AuditoriapacienteController');
});

Route::get('/reportes', function () {
    return view('reportes');
});
Route::get('/dni', function () {
    $paciente = DB::table('pacientes')
    ->select("dni","pa_nombre","pa_apellido")
    ->get();
    return Response::json($paciente);
});