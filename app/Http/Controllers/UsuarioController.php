<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\usuario;
use App\Auditoriauser;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Input;
use Hash;


class UsuarioController extends Controller
{
    //esta funcion se ejcuta al principio
    public function index(Request $request)
    {
        $usuarios = usuario::all();
        return view('usuario/usuario',['usuarios'=>$usuarios]);
    }
    //funcion que relisa la insercion de datos
    public function store(Request $request)
    {
        $usuario = new usuario();
        $usuario -> nombre = $request -> nombre;
        $usuario -> apellido = $request -> apellido;
        $usuario -> username = $request -> nick;
        $usuario -> email = $request -> email;
        $usuario -> password = Hash::make($request -> contra);
        $usuario -> tipo_usuario = $request -> tipo;
        $usuario->save();
        return redirect('/usuario');
    }
    public function show($id)
    {
    }
    //funcion que elimina datos
    public function destroy($id)
    {
        
        usuario::destroy($id);
        Auditoriauser::destroy($id);
        return redirect('/usuario');
    }
    public function edit(Usuario $usuario)
    {
        return view('usuario/editusuario',compact('usuario'));
    }
    public function update(Request $request, Usuario $usuario)
    {
        $usurios=usuario::findOrfail($usuario->id);
        $usuario -> nombre = $request -> nombre;
        $usuario -> apellido = $request -> apellido;
        $usuario -> username = $request -> nick;
        $usuario -> email = $request -> email;
        $usuario -> password = Hash::make($request -> contra);
        $usuario -> tipo_usuario = $request -> tipo;
        $usuario->save();
        
        $auditoriausers = new Auditoriauser();
        $auditoriausers -> id_user = $usuario->id;
        $auditoriausers -> nombre = $request -> autnombre;
        $auditoriausers -> apellido = $request -> autapellido;
        $auditoriausers -> username = $request -> autnick;
        $auditoriausers -> email = $request -> autemail;
        $auditoriausers -> password = Hash::make($request -> autcontra);
        $auditoriausers -> tipo_usuario = $request -> auttipo;
        $auditoriausers -> razon = $request-> autrazon;
        $auditoriausers->save();
        return redirect('/usuario');
        //dd($request->all());
        
    }




}
