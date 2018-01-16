<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TipoMedicina extends Model
{
    public $timestamps = false;
 	protected $table = 'tipomedicina';
  	protected $fillable = ['tipo'];
}
