<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Auditoriamedico;

class AuditoriamedicoController extends Controller
{
    //
    public function index(Request $request)
    {
        $auditoriamedicos = Auditoriamedico::all();
        return view('auditoria.medicos',['auditoriamedicos'=>$auditoriamedicos]);
    }
}
