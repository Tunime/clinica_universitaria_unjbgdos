<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class paciente extends Model
{
    //conectamos la tabla pacientes
    protected $table = 'pacientes';
    protected $fillable = ['pa_nombre', 'pa_apellido', 'celular', 'dni', 'fech_nacimiento','direccion','estado_civil','genero','ocupacion'];
    public $timestamps =false;

    public function scopeNombre($query,$name)
	{
		if(trim($name) != "")
		{
			$query->where('pa_nombre',"LIKE","%$name%");
		}
	}
}
