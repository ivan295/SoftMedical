<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePersonasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombres',100);
            $table->string('apellidos',100);
            $table->string('cedula',10)->unique();
            $table->string('sexo',1);
            $table->string('telefono',10);
            $table->string('direccion',100);
            $table->string('especialidad',50);
            $table->boolean('estado'); 
            $table->integer('idtipoPersona')->unsigned()->index();
            $table->foreign('idtipoPersona')->references('id')->on('tipo_personas'); 
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('personas');
    }
}
