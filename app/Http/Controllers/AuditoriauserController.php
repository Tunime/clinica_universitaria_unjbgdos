<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Auditoriauser;

class AuditoriauserController extends Controller
{
    //
    public function index(Request $request)
    {
        $auditoriausers = Auditoriauser::paginate(5);
        return view('auditoria.usuarios',['auditoriausers'=>$auditoriausers]);
    }
}
