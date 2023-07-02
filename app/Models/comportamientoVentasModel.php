<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class comportamientoVentasModel extends Model
{
    use HasFactory;
    protected $table = "comportamiento_ventas";
    protected $fillable = [
        'alta',
        'media',
        'baja',

        'enero',
        'febrero',
        'marzo',
        'abril',
        'mayo',
        'junio',
        'julio',
        'agosto',
        'septiembre',
        'octubre',
        'noviembre',
        'diciembre',
        'idSimulation'
    ];
}
