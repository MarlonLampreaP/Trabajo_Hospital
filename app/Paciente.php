<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Paciente extends Model
{
    protected $fillable = ['cedulap','numeroregistro','numerocama','nombre','direccion',
    'fechanacimiento','sexo'];
}
