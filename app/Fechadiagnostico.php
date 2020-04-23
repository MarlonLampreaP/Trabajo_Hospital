<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Fechadiagnostico extends Model
{
    use SoftDeletes;
    protected $fillable = ['codigod','fechadi'];
}
