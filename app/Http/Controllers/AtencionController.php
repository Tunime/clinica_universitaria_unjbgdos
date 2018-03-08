<?php

namespace App\Http\Controllers;
use App\atencion;
use Illuminate\Http\Request;
use Carbon\Carbon;
use DB;
use PDF;

class AtencionController extends Controller
{
    //
    public function mySearch(Request $request)
    {
        $atenciones = DB::table('atenciones')
        ->where('dni_paciente','like','%'.$request->search.'%')
        ->paginate(5);
        return view('atencion.atenciones',compact('atenciones'));
        
    }
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
     public function destroy()
     {
         
        /* usuario::destroy($id);
         return redirect('/usuario');*/
     }
     public function edit($id)
     {
         //dd($id);
         /*$paciente = DB::table('pacientes')
            ->where('pacientes.dni','=',$username)
            ->first();
        $historial = DB::table('pacientes')
        	->join('atenciones','dni','=','atenciones.dni_paciente')
            ->join('medicos','dni_medico','=','medicos.dni_me')
            ->where('pacientes.dni','=',$username)
            ->get();
*/

         $atencion = DB::table('atenciones')
         ->where('atenciones.id','=',$id)
         ->join('pacientes','dni','=','atenciones.dni_paciente')
         ->join('medicos','dni_me','=','atenciones.dni_medico')
         ->first();
         //dd($atencion);


         PDF::setOptions(['dpi' => 150, 'defaultPaperSize' => 'a6']);
         $pdf = PDF::loadView('pdf.pdfatenciones', compact('atencion'));
         return $pdf->download('hdtuto.pdf');
         //return $pdf->stream();
         //return view('usuario/editusuario');
     }
}
