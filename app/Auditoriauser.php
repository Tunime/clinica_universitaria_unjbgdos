<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Auditoriauser extends Model
{
    //realisamos la referencia a el campo de la BD
    protected $table = 'auditoriausers';
    public $timestamps =false;
    protected $primaryKey = 'id_user';
}
