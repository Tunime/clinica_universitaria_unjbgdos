<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Auditoriapaciente;

class AuditoriapacienteController extends Controller
{
    //
    public function index(Request $request)
    {
        $auditoriapacientes = Auditoriapaciente::paginate(5);
        return view('auditoria.pacientes',['auditoriapacientes'=>$auditoriapacientes]);
    }
    
}
