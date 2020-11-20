<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmpleadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('empleados', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('codigo');
            $table->string('nombre');
            $table->double('salarioDolares',null,null);
            $table->double('salarioPesos',null,null);
            $table->string('direccion');
            $table->string('estado');
            $table->string('ciudad');
            $table->string('telefono');
            $table->string('correo');

          //  $table->tinyInteger('activo',0);
          //  $table->timestamp('deleted_as',null);
          //  $table->timestamp('created_as',null);
          //  $table->timestamp('updated_as',null);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('empleados');
    }
}
