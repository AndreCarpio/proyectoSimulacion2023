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
        Schema::create('operativosDetalle', function (Blueprint $table) {
            $table->id();
            $table->string('descripcion',255)->nullable();
            $table->double('monto',10,2)->nullable();
            $table->bigIncrements('idOperativo');
            $table->foreign('idOperativo')->references('id')->on('operativos');
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
        Schema::dropIfExists('operativosDetalle');
    }
}
