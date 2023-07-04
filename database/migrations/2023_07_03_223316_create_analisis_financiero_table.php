<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnalisisFinancieroTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('analisis_financiero', function (Blueprint $table) {
            $table->id();
            
            $table->double('impuestos')->nullable();
            $table->double('alimentacion')->nullable();
            $table->double('servicioLuz')->nullable();
            $table->double('servicioAgua')->nullable();
            $table->double('servicioGas')->nullable();
            $table->double('servicioTelefono')->nullable();
            $table->double('servicioInternet')->nullable();
            $table->double('servicioAlquiler')->nullable();
            $table->double('ServicioTransporte')->nullable();
            $table->double('materialEscritorio')->nullable();
            $table->double('pagoEmpleados')->nullable();
            $table->double('promocion')->nullable();
            $table->double('vestimenta')->nullable();
            $table->double('salud')->nullable();
            $table->double('otros')->nullable();
            $table->double('frecuencia')->nullable();
            $table->double('poliza')->nullable();
            $table->double('monto')->nullable();
            $table->double('plazoMeses')->nullable();
            $table->double('tipoCuota')->nullable();
            $table->double('actividad')->nullable();

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
        Schema::dropIfExists('analisis_financiero');
    }
}
