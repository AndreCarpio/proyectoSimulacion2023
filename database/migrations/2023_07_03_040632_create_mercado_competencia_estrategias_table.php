<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMercadoCompetenciaEstrategiasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mercado_competencia_estrategias', function (Blueprint $table) {
            $table->id();

            $table->string('clientes',500)->nullable();
            $table->string('potencialesClientes',500)->nullable();
            $table->string('relacionClientesPotenciales',500)->nullable();
            $table->string('competidoresCercanos',500)->nullable();
            $table->string('accionesFrenteCompetencia',500)->nullable();
            $table->string('caracteristicasBenficiosas',500)->nullable();
            $table->string('generaMayorIngreso',500)->nullable();
            $table->string('precioProductoServicio',500)->nullable();
            $table->string('comoDeterminaPrecio',500)->nullable();
            $table->string('lugarVenta',500)->nullable();
            $table->string('intermediarios',500)->nullable();
            $table->string('otraFormaVenta',500)->nullable();
            $table->string('comunicarExistencia',500)->nullable();
            $table->string('accionesAtraerCliente',500)->nullable();

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
        Schema::dropIfExists('mercado_competencia_estrategias');
    }
}
