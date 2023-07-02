<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePersonaJuridicaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('persona_juridica', function (Blueprint $table) {
            $table->id();
            $table->string('razonSocial', 200)->nullable();
            $table->string('nit', 200)->nullable();
            $table->string('sigla', 200)->nullable();
            $table->string('tipoSociedad', 200)->nullable();
            $table->string('repreLegales', 200)->nullable();
            $table->string('domicilio', 200)->nullable();
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
        Schema::dropIfExists('persona_juridica');
    }
}
