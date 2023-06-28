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
        Schema::create('descripcionProductos', function (Blueprint $table) {
            $table->id();
            $table->text('nombre')->nullable();
            $table->text('procesos')->nullable();
            $table->text('comerciales')->nullable();
            $table->bigIncrements('idEmprendimiento')->nullable();
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
        Schema::dropIfExists('descripcionProductos');
    }
}
