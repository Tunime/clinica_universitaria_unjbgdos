<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\usuario;
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
        return redirect('/usuario');
    }
    public function edit(Request $request)
    {
        return view('usuario/editusuario');
    }

}
