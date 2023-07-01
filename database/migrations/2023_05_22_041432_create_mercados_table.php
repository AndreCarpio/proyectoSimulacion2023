<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMercadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mercados', function (Blueprint $table) {
            $table->id();
            $table->text('quienes')->nullable();
            $table->text('porque')->nullable();
            $table->text('relaciones')->nullable();
            $table->integer('clientesAtencionMax')->nullable();
            $table->integer('clientesAtencionMin')->nullable();
            $table->integer('cantidadProductosMax')->nullable();
            $table->integer('cantidadProductosMin')->nullable();
            $table->integer('cantidadProduccionMax')->nullable();
            $table->integer('cantidadProduccionMin')->nullable();
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
        Schema::dropIfExists('mercados');
    }
}
