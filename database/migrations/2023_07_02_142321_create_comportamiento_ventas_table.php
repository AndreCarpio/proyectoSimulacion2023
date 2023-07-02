<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateComportamientoVentasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comportamiento_ventas', function (Blueprint $table) {
            $table->id();
            $table->double('alta')->nullable();
            $table->double('media')->nullable();
            $table->double('baja')->nullable();

            $table->string('enero',10)->nullable();
            $table->string('febrero',10)->nullable();
            $table->string('marzo',10)->nullable();
            $table->string('abril',10)->nullable();
            $table->string('mayo',10)->nullable();
            $table->string('junio',10)->nullable();
            $table->string('julio',10)->nullable();
            $table->string('agosto',10)->nullable();
            $table->string('septiembre',10)->nullable();
            $table->string('octubre',10)->nullable();
            $table->string('noviembre',10)->nullable();
            $table->string('diciembre',10)->nullable();
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
        Schema::dropIfExists('comportamiento_ventas');
    }
}
