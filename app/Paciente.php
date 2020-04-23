<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Paciente extends Model
{
    use SoftDeletes;
    protected $fillable = ['cedulap','numeroregistro','numerocama','nombre','direccion',
    'fechanacimiento','sexo'];
}
