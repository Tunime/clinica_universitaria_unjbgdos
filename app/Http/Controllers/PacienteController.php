<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\paciente;
use App\usuario;
use App\Auditoriapaciente;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Input;
use Hash;
use DB;

class PacienteController extends Controller
{
    //
    public function mySearch(Request $request)
    {
        $pacientes = DB::table('pacientes')
        ->where('pa_nombre','like','%'.$request->search.'%')
        ->paginate(5);
        return view('paciente.paciente',compact('pacientes'));
        
    }

    public function index(Request $request)
    {
        $pacientes = paciente::paginate(5);
        return view('paciente.paciente',['pacientes'=>$pacientes]);
        
    }
    public function store(Request $request)
    {
        $paciente = new paciente();
        
        $paciente -> pa_nombre = $request -> nombre;
        $paciente -> pa_apellido = $request -> apellido;
        $paciente -> celular = $request -> celular;
        $paciente -> dni = $request -> dni;
        $paciente -> fech_nacimiento = $request -> dia.'/'.$request -> mes.'/'.$request -> ano;   
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
    }
    public function edit(Paciente $paciente)
    {
        return view('paciente/editpaciente',compact('paciente'));
        //return view('usuario/editusuario');
    }
    public function update(Request $request, Paciente $paciente)
    {
        $pacientes=paciente::findOrfail($paciente->id);
        $pacientes -> pa_nombre = $request -> nombre;
        $pacientes -> pa_apellido = $request -> apellido;
        $pacientes -> celular = $request -> celular;
        $pacientes -> dni = $request -> dni;
        $pacientes -> fech_nacimiento = $request -> fecha;   
        $pacientes -> direccion = $request -> direccion;
        $pacientes -> estado_civil = $request -> estado_civil;
        $pacientes -> genero = $request -> genero;
        $pacientes -> ocupacion = $request -> ocupacion;
        $pacientes->save();
        //namos la BD de auditoria paciente
        $auditoripacientes = new Auditoriapaciente();

        $auditoripacientes -> id_paciente = $paciente->id;
        $auditoripacientes -> nombre = $request -> autnombre;
        $auditoripacientes -> apellido = $request -> autapellido;
        $auditoripacientes -> celular = $request -> autcelular;
        $auditoripacientes -> dni = $request -> autdni;
        $auditoripacientes -> fech_nacimiento = $request -> autfecha;   
        $auditoripacientes -> direccion = $request -> autdireccion;
        $auditoripacientes -> estado_civil = $request -> autestado_civil;
        $auditoripacientes -> genero = $request -> autgenero;
        $auditoripacientes -> ocupacion = $request -> autocupacion;
        $auditoripacientes -> razon = $request -> autrazon;
        $auditoripacientes->save();
        return redirect('/pacientes');
        //dd($request->all());
    }

}
