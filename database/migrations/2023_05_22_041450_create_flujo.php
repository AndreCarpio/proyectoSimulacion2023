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
        Schema::create('flujo', function (Blueprint $table) {
            $table->id();
            $table->date('desembolsoEst')->nullable();
            $table->date('implemenEst')->nullable();
            $table->double('van',10,2)->nullable();
            $table->double('tir',10,2)->nullable();
            $table->bigIncrements('idEmprendimiento');
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
        Schema::dropIfExists('flujo');
    }
}
