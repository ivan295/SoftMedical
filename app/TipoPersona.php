<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TipoPersona extends Model
{
  public $timestamps = false;
  protected $table = 'tipopersona';
  protected $fillable = ['tipo'];
}
