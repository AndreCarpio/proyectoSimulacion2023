<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCostosProductoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('costosProducto', function (Blueprint $table) {
            $table->id();
            $table->integer('cantidad')->nullable();
            $table->string('frecuencia',15)->nullable();
            $table->double('totalCompra',10,2)->nullable();
            $table->double('totalVenta',10,2)->nullable();
            $table->double('mub',3,2)->nullable();
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
        Schema::dropIfExists('costosProducto');
    }
}
