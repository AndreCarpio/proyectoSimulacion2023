<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSimulationsTable extends Migration
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
            $table->string('ci',10);
            $table->string('extension',4)->nullable();
            $table->string('nombres',50)->nullable();
            $table->string('apellidos',50)->nullable();
            $table->date('fechaNacimiento')->nullable();
            $table->string('estadoCivil',50)->nullable();
            $table->string('direccion',100)->nullable();
            $table->string('contacto',10)->nullable();
            $table->string('tipo',1)->nullable();
            $table->bigIncrements('idEmprendimiento');
            $table->foreign('idEmprendimiento')->references('id')->on('empredimiento');
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
