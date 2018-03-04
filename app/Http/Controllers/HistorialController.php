<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class HistorialController extends Controller
{
    //
    public function index(Request $request)
    {
        return view('inicio.historial');
    }
    public function show($username)
    {
        /*$pacientes = paciente::all();
        return view('paciente.paciente',['pacientes'=>$pacientes]);*/
        $paciente = DB::table('pacientes')
            ->where('pacientes.dni','=',$username)
            ->first();
        $historial = DB::table('pacientes')
        	->join('atenciones','dni','=','atenciones.dni_paciente')
            ->join('medicos','dni_medico','=','medicos.dni_me')
            ->where('pacientes.dni','=',$username)
            ->get();
        //dd($historials);
        return view('inicio.historialusuario',compact('historial','paciente'));
    }
}
