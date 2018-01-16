<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Receta extends Model
{
    public $timestamps = false;
  	protected $table = 'receta';
	protected $fillable = ['descripcion', 'fecha_atencion', 'idPersona'];
}
