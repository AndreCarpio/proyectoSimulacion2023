<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class presupuestoTotalModel extends Model
{
    use HasFactory;

    protected $table = "presupuestoTotal";
    protected $fillable = [
        'apGastosOperativos',
        'apMateriaPrima',
        'apRquePromocionales',
        'apInfraestructura',
        'apMaquinaria',
        'apRequeLegales',
        'primerDesembolso',
        'segundoDesembolso',
        'idSimulation'
    ];
}
