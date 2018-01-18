<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Medicamento extends Model
{
    public $timestamps = false;
  	protected $table = 'medicamento';
  	protected $fillable = ['descripcion', 'unidad','peso', 'cantidad', 'fecha_ingreso','fecha_vencimiento','idtipoMedicina'];
}
