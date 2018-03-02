<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Auditoriamedico extends Model
{
    //hacemos el enlase a la tabla del auditoriamedicos
    protected $table = 'auditoriamedicos';
    public $timestamps =false;
}
