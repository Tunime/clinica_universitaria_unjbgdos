<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\paciente;

class PacienteController extends Controller
{
    //
    public function create(Request $request){
        $paciente = new paciente();
        
        $paciente -> nombre = $request -> nombre;
        $paciente -> apellido = $request -> apellido;
        $paciente -> celular = $request -> celular;
        $paciente -> dni = $request -> dni;
        $paciente -> fech_nacimiento = $request -> fech_naci;   
        $paciente -> direccion = $request -> direccion;
        $paciente -> estado_civil = $request -> estado_civil;
        $paciente -> genero = $request -> genero;
        $paciente -> save();

        return redirect('/pacientes');
    }
    public function read(Request $request){
        $pacientes = paciente::all();
        return view('paciente',['pacientes'=>$pacientes]);
    }

}
