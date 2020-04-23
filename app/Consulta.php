<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Consulta extends Model
{    
    use SoftDeletes;
    protected $fillable = ['fechac','idMedico','idPaciente','nombrem','nombre'];
}
