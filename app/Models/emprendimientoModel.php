<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class emprendimientoModel extends Model
{
    use HasFactory;

    protected $table = "emprendimiento";
    protected $fillable = [
        'actividad',
        'departamento',
        'municipio',
        'telefono',
        'direccion',
        'idSimulation'
    ];
}
