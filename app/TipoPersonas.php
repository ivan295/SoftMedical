<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TipoPersonas extends Model
{
  public $timestamps = false;
  protected $table = 'tipopersonas';
  protected $fillable = ['tipo', 'estado'];
}
