<?php

namespace App\Http\Controllers;
use App\atencion;
use Illuminate\Http\Request;
use Carbon\Carbon;

class AtencionController extends Controller
{
    //
     //esta funcion se ejcuta al principio
     public function index(Request $request)
     {
         $atenciones = atencion::paginate(5);
         return view('atencion.atenciones',['atenciones'=>$atenciones]);
     }
     //funcion que relisa la insercion de datos
     public function store(Request $request)
     {
        $dt = Carbon::now();
         $atencion = new atencion();
         $atencion -> fech_atencion = $dt->toDateString();
         $atencion -> hora_atencion = $dt->toTimeString();
         $atencion -> observacion = $request -> observacion;
         $atencion -> peso = $request -> peso;
         $atencion -> talla = $request -> talla;
         $atencion -> dni_paciente = $request -> dnipaciente;
         $atencion -> dni_medico = $request -> dnidoctor;
         $atencion -> tratamiento = $request -> tratamiento;
         $atencion -> diagnostico = $request -> diagnostico;
         
         $atencion->save();
         return redirect('/atenciones');
     }
     public function show($id)
     {
     }
     //funcion que elimina datos
     public function destroy($id)
     {
         
        /* usuario::destroy($id);
         return redirect('/usuario');*/
     }
     public function edit(Request $request)
     {
         //return view('usuario/editusuario');
     }
}
