<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCapitalTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('capital', function (Blueprint $table) {
            $table->id();
            $table->string('tipo',100)->nullable();
            $table->integer('cantidad')->nullable();
            $table->string('unidad',100)->nullable();
            $table->string('detalle',200)->nullable();
            $table->double('aportePropio')->nullable();
            $table->double('seInvertira')->nullable();
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
        Schema::dropIfExists('capital');
    }
}
