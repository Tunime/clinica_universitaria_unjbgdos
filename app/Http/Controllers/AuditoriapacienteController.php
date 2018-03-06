<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Auditoriapaciente;

class AuditoriapacienteController extends Controller
{
    //
    public function index(Request $request)
    {
        $auditoriapacientes = Auditoriapaciente::all();
        return view('auditoria.pacientes',['auditoriapacientes'=>$auditoriapacientes]);
    }
    
}
