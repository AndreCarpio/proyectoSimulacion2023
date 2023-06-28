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
        Schema::create('producto', function (Blueprint $table) {
            $table->id();
            $table->integer('nombre',15)->nullable();
            $table->string('tipo',15)->nullable();
            $table->double('unidadMedida',10,2)->nullable();
            $table->double('totalCosto',10,2)->nullable();
            $table->double('precioVenta',3,2)->nullable();
            $table->bigIncrements('idCostoProducto');
            $table->foreign('idCostoProducto')->references('id')->on('costosProducto');
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
        Schema::dropIfExists('producto');
    }
}
