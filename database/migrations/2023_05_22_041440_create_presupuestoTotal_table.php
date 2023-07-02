<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePresupuestoTotalTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('presupuestoTotal', function (Blueprint $table) {
            $table->id();
            $table->double('apGastosOperativos')->nullable();
            $table->double('apMateriaPrima')->nullable();
            $table->double('apRquePromocionales')->nullable();
            $table->double('apInfraestructura')->nullable();
            $table->double('apMaquinaria')->nullable();
            $table->double('apRequeLegales')->nullable();

            $table->double('primerDesembolso')->nullable();
            $table->double('segundoDesembolso')->nullable();
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
        Schema::dropIfExists('presupuestoTotal');
    }
}
