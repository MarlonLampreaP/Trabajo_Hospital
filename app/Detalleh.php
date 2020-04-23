<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Detalleh extends Model
{
    use SoftDeletes;
    protected $fillable = ['descripciondetalleh','fechac'];
}
