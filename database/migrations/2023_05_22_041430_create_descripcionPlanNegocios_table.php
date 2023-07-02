<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDescripcionPlanNegociosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('descripcionPlanNegocios', function (Blueprint $table) {
            $table->id();
            $table->string('descripcion',500)->nullable();
            $table->tinyInteger('enFuncionando')->nullable();
            $table->integer('mesesFuncionando')->nullable();
            $table->string('descripcionInversiones',500)->nullable();
            $table->string('descripcionRentabilidades',500)->nullable();
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
        Schema::dropIfExists('descripcionPlanNegocios');
    }
}
