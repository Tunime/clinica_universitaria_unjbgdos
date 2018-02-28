<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\medico;
use App\usuario;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Input;
use Hash;
class MedicoController extends Controller
{
    //
    public function index(Request $request)
    {
        $medicos = medico::all();
        return view('medico.medico',['medicos'=>$medicos]);
    }
    public function store(Request $request)
    {
        $medico = new medico();
        
        $medico -> nombre = $request -> nombre;
        $medico -> apellido = $request -> apellido;
        $medico -> celular = $request -> celular;
        $medico -> dni_me = $request -> dni;
        $medico -> fech_nacimiento = $request -> fech_naci;   
        $medico -> direccion = $request -> direccion;
        $medico -> especialidad = $request -> especialidad;
        $medico -> genero = $request -> genero;
        $medico -> codigo_medico = $request -> codmedico;
        $medico -> save();

        $usuario = new usuario();
        $usuario -> nombre = $request -> nombre;
        $usuario -> apellido = $request -> apellido;
        $usuario -> username = $request -> dni;
        $usuario -> email = $request -> dni.'@unjbg.edu.pe';
        $usuario -> password = Hash::make($request -> dni);
        $usuario -> tipo_usuario = 'paciente';
        $usuario->save();

        return redirect('/medicos');
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
