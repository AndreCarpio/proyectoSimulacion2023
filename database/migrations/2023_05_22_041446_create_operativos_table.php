<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOperativosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('operativos', function (Blueprint $table) {
            $table->id();
            $table->double('total',10,2)->nullable();
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
        Schema::dropIfExists('operativos');
    }
}
