<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableProyecto extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('proyectos', function (Blueprint $table) {
            $table->bigIncrements('proyecto_id');
            $table->string('nombre',50)->unique();
            $table->string('titulo');
            $table->date('fechainicio');
            $table->date('fechafin');
            $table->integer('horasestimadas');
            $table->unsignedBigInteger('empleadoRes');
            $table->timestamps();

            $table->foreign('empleadoRes')->references('empleado_id')->on('empleados');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('proyectos');
    }
}
