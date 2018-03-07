<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Auditoriamedico;

class AuditoriamedicoController extends Controller
{
    //
    public function index(Request $request)
    {
        $auditoriamedicos = Auditoriamedico::paginate(5);
        return view('auditoria.medicos',['auditoriamedicos'=>$auditoriamedicos]);
    }
}
