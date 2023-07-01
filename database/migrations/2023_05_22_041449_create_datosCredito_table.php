<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDatosCreditoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('datosCredito', function (Blueprint $table) {
            $table->id();
            $table->string('frecuencia',30)->nullable();
            $table->double('poliza',10,3)->nullable();
            $table->double('monto',10,2)->nullable();
            $table->integer('plazo')->nullable();
            $table->double('tasaInteres',4,2)->nullable();
            $table->string('cuota',30)->nullable();
            $table->string('actividad',30)->nullable();
            $table->double('cuentaAproximada',10,2)->nullable();
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
        Schema::dropIfExists('datosCredito');
    }
}
