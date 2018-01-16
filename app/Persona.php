<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{
  public $timestamps = false;
  protected $table = 'persona';
  protected $fillable = ['nombres', 'apellidos', 'cedula', 'edad','sexo','telefono','direccion','especialidad','estado','idtipoPersona'];
}
