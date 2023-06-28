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
        Schema::create('complementario', function (Blueprint $table) {
            $table->id();
            $table->text('ingresos')->nullable();
            $table->text('deudas')->nullable();
            $table->text('experiencia',10,2)->nullable();
            $table->text('garantia',10,2)->nullable();
            $table->text('otros',10,2)->nullable();
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
        Schema::dropIfExists('complementario');
    }
}
