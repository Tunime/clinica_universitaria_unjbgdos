<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class medico extends Model
{
    //conectamos la tabla medicos
    protected $table = 'medicos';
    public $timestamps =false;
}
