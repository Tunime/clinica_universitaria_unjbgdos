<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\medico;
use App\usuario;
use App\Auditoriamedico;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Input;
use Hash;
class MedicoController extends Controller
{
    //
    public function index(Request $request)
    {
        $medicos = medico::paginate(5);
        return view('medico.medico',['medicos'=>$medicos]);
    }
    public function store(Request $request)
    {
        $medico = new medico();
        
        $medico -> nombre = $request -> nombre;
        $medico -> apellido = $request -> apellido;
        $medico -> celular = $request -> celular;
        $medico -> dni_me = $request -> dni;
        $medico -> fech_nacimiento = $request -> dia.'/'.$request -> mes.'/'.$request -> dia;   
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
        $usuario -> tipo_usuario = 'especialista';
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
    public function edit(Medico $medico)
    {
        //return view('usuario/editusuario');
        return view('medico/editmedico',compact('medico'));
    }
    public function update(Request $request, Medico $medico)
    {
        $medicos=medico::findOrfail($medico->id);
        $medicos -> nombre = $request -> nombre;
        $medicos -> apellido = $request -> apellido;
        $medicos -> celular = $request -> celular;
        $medicos -> dni_me = $request -> dni;
        $medicos -> fech_nacimiento = $request -> fecha;   
        $medicos -> direccion = $request -> direccion;
        $medicos -> especialidad = $request -> especialidad;
        $medicos -> genero = $request -> genero;
        $medicos -> codigo_medico = $request -> codmedico;
        $medicos -> save();
        //namos la BD de auditoria paciente
        $auditoriamedicos = new Auditoriamedico();

        $auditoriamedicos -> id_medico = $medico->id;
        $auditoriamedicos -> nombre = $request -> autnombre;
        $auditoriamedicos -> apellido = $request -> autapellido;
        $auditoriamedicos -> celular = $request -> autcelular;
        $auditoriamedicos -> dni_me = $request -> autdni;
        $auditoriamedicos -> fech_nacimiento = $request -> autfecha;   
        $auditoriamedicos -> direccion = $request -> autdireccion;
        $auditoriamedicos -> especialidad = $request -> autespecialidad;
        $auditoriamedicos -> genero = $request -> autgenero;
        $auditoriamedicos -> codigo_medico = $request -> autcodmedico;
        $auditoriamedicos -> razon = $request -> autrazon;
        $auditoriamedicos->save();
        return redirect('/medicos');
        //dd($request->all());
    }
}
