<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\usuario;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Input;
use Hash;


class UsuarioController extends Controller
{
    //creamos a funcion para poder agregar una tabla
    //'title' => Crypt::encrypt($request->title),
    public function create(Request $request){
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
    public function read(Request $request){
        $usuarios = usuario::all();
        return view('/usuario',['usuarios'=>$usuarios]);
    }
    public function delete($id){
        $usuario=usuario::findOrFail($id);
        $usuario->delete();
        return redict('/usuario');
    }
}
