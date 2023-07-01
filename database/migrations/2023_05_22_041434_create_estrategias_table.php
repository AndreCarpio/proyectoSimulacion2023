<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEstrategiasTable extends Migration
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
        Schema::dropIfExists('estrategias');
    }
}
