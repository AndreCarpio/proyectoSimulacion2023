<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCostoProductoServicoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('costo_producto_servico', function (Blueprint $table) {
            $table->id();

            $table->string('productoServicio',200)->nullable();
            $table->string('tipo',100)->nullable();
            $table->integer('cantidad')->nullable();
            $table->string('unidad',100)->nullable();
            $table->string('frecuencia',100)->nullable();

            $table->double('precioCompra')->nullable();
            $table->double('precioVenta')->nullable();

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
        Schema::dropIfExists('costo_producto_servico');
    }
}
