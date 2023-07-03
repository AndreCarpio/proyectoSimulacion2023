<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmprendimientoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('emprendimiento', function (Blueprint $table) {
            $table->id();
            $table->string('actividad',100)->nullable();
            $table->string('departamento',100)->nullable();
            $table->string('municipio',100)->nullable();
            $table->string('telefono',100)->nullable();
            $table->string('direccion',200)->nullable();
            $table->unsignedBigInteger('idSimulation');
            $table->foreign('idSimulation')->references('idSimulation')->on('simulations');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('emprendimiento');
    }
}
