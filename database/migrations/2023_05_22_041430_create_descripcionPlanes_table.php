<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDescripcionPlanesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('descripcionPlanes', function (Blueprint $table) {
            $table->id();
            $table->string('descripcion',255)->nullable();
            $table->tinyInteger('funcionando')->nullable();
            $table->integer('inicio')->nullable();
            $table->text('inversiones')->nullable();
            $table->text('rentabilidades')->nullable();
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
        Schema::dropIfExists('descripcionPlanes');
    }
}
