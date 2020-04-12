<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Consulta extends Model
{
    protected $fillable = ['fechac','idMedico','idPaciente','nombrem','nombre'];
}
