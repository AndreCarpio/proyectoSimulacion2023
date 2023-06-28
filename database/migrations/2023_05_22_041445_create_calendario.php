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
        Schema::create('calendario', function (Blueprint $table) {
            $table->id();
            $table->string('enero',1)->nullable();
            $table->string('febrero',1)->nullable();
            $table->string('marzo',1)->nullable();
            $table->string('abril',1)->nullable();
            $table->string('mayo',1)->nullable();
            $table->string('junio',1)->nullable();
            $table->string('julio',1)->nullable();
            $table->string('agosto',1)->nullable();
            $table->string('septiembre',1)->nullable();
            $table->string('octubre',1)->nullable();
            $table->string('noviembre',1)->nullable();
            $table->string('diciembre',1)->nullable();
            $table->bigIncrements('idEmprendimiento');
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
        Schema::dropIfExists('calendario');
    }
}
