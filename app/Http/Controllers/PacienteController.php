<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\paciente;
use App\usuario;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Input;
use Hash;

class PacienteController extends Controller
{
    //
    public function index(Request $request)
    {
        $pacientes = paciente::all();
        return view('paciente.paciente',['pacientes'=>$pacientes]);
    }
    public function store(Request $request)
    {
        $paciente = new paciente();
        
        $paciente -> nombre = $request -> nombre;
        $paciente -> apellido = $request -> apellido;
        $paciente -> celular = $request -> celular;
        $paciente -> dni = $request -> dni;
        $paciente -> fech_nacimiento = $request -> fech_naci;   
        $paciente -> direccion = $request -> direccion;
        $paciente -> estado_civil = $request -> estado_civil;
        $paciente -> genero = $request -> genero;
        $paciente -> ocupacion = $request -> ocupacion;
        $paciente -> save();

        $usuario = new usuario();
        $usuario -> nombre = $request -> nombre;
        $usuario -> apellido = $request -> apellido;
        $usuario -> username = $request -> dni;
        $usuario -> email = $request -> dni.'@unjbg.edu.pe';
        $usuario -> password = Hash::make($request -> dni);
        $usuario -> tipo_usuario = 'paciente';
        $usuario->save();

        return redirect('/pacientes');
    }
    public function show($id)
    {
    }
    //funcion que elimina datos
    public function destroy($id)
    {
        paciente::destroy($id);
        return redirect('/pacientes');
    }
    public function edit(Request $request)
    {
        //return view('usuario/editusuario');
    }

}
