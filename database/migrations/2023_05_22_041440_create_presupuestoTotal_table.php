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
            $table->double('totalAportePropio',10,2)->nullable();
            $table->double('totalPlanInversion',10,2)->nullable();
            $table->double('totalProyecto',10,2)->nullable();
            $table->double('porAportePropio',10,2)->nullable();
            $table->double('montoFinanciar',10,2)->nullable();
            $table->double('primerDesembolso',10,2)->nullable();
            $table->double('segundoDesembolso',10,2)->nullable();
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
        Schema::dropIfExists('presupuestoTotal');
    }
}
