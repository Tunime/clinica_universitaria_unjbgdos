<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class paciente extends Model
{
    //conectamos la tabla pacientes
    protected $table = 'pacientes';
    public $timestamps =false;
}
