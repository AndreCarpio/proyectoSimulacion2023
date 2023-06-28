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
        Schema::create('estrategias', function (Blueprint $table) {
            $table->id();
            $table->text('beneficios')->nullable();
            $table->text('mayorIngreso')->nullable();
            $table->text('formaPago')->nullable();
            $table->text('comoPago')->nullable();
            $table->text('lugarVenta')->nullable();
            $table->text('intermediarios')->nullable();
            $table->text('formaVentaAlt')->nullable();
            $table->text('comunicacion')->nullable();
            $table->text('atraccionClientes')->nullable();
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
        Schema::dropIfExists('estrategias');
    }
}
