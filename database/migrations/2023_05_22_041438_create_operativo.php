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
        Schema::create('operativo', function (Blueprint $table) {
            $table->id();
            $table->integer('cantidad')->nullable();
            $table->string('unidad',15)->nullable();
            $table->string('detalle',100)->nullable();
            $table->double('aportePropio',9,2)->nullable();
            $table->double('seInvertira',9,2)->nullable();
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
        Schema::dropIfExists('operativo');
    }
}
