<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class usuario extends Model
{
    //defnimos la tabla
    protected $table = 'users';
    public $timestamps =false;
}
