<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Nicolaslopezj\Searchable\SearchableTrait;

class usuario extends Model
{
    //defnimos la tabla

    protected $table = 'users';
    public $timestamps =false;

    use SearchableTrait;


}
