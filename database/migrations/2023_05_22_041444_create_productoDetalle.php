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
        Schema::create('productoDetalle', function (Blueprint $table) {
            $table->id();
            $table->string('insumo',50)->nullable();
            $table->integer('cantidad')->nullable();
            $table->string('unidad',15)->nullable();
            $table->integer('unidades')->nullable();
            $table->double('precioUnitario',10,2)->nullable();
            $table->double('total',10,2)->nullable();
            $table->bigIncrements('idProducto');
            $table->foreign('idProducto')->references('id')->on('producto');
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
        Schema::dropIfExists('productoDetalle');
    }
}
