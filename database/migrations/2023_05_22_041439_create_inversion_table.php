<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInversionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inversion', function (Blueprint $table) {
            $table->id();
            $table->integer('cantidad')->nullable();
            $table->string('unidad',15)->nullable();
            $table->string('detalle',100)->nullable();
            $table->double('aportePropio',10,2)->nullable();
            $table->double('seInvertira',10,2)->nullable();
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
        Schema::dropIfExists('inversion');
    }
}
