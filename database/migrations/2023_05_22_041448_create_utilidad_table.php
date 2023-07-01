<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUtilidadTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('utilidad', function (Blueprint $table) {
            $table->id();
            $table->double('ingresos',10,2)->nullable();
            $table->double('costos',10,2)->nullable();
            $table->double('utilidadBruta',10,2)->nullable();
            $table->double('costoOperativo',10,2)->nullable();
            $table->double('utilidadOperativa',10,2)->nullable();
            $table->unsignedBigInteger('idEmprendimiento');
            $table->foreign('idEmprendimiento')->references('id')->on('emprendimiento');
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
        Schema::dropIfExists('utilidad');
    }
}
