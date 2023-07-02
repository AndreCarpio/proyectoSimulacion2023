<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class presupuestoModel extends Model
{
    use HasFactory;

    protected $table = "presupuesto";
    protected $fillable = [
        'tipo',
        'detalle',
        'procedencia',
        'aportePropio',
        'idSimulation'
    ];
}
