<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMedicamentosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('medicamentos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('descripcion',100);
            $table->string('unidad',30);
            $table->integer('peso');
            $table->integer('cantidad');
            $table->datetime('fecha_ingreso');
            $table->datetime('fecha_vencimiento');
            $table->integer('idtipoMedicina')->unsigned()->index();
            $table->foreign('idtipoMedicina')->references('id')->on('tipo_medicinas'); 
           
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('medicamentos');
    }
}
