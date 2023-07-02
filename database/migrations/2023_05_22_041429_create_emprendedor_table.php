<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmprendedorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    
    {
        Schema::create('emprendedor', function (Blueprint $table) {
            $table->id();
            $table->string('tipo',10)->nullable();
            $table->string('nombre',100)->nullable();
            $table->string('ci',100)->nullable();
            $table->string('extension',100)->nullable();
            $table->integer('edad')->nullable();
            $table->string('estadoCivil',100)->nullable();
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
        Schema::dropIfExists('emprendedor');
    }
}
