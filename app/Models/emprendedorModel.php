<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class emprendedorModel extends Model
{
    use HasFactory;
    protected $table = "emprendedor";
    protected $fillable = [
        'tipo',
        'nombre',
        'ci',
        'extension',
        'edad',
        'estadoCivil',
        'telefono',
        'direccion',
        'idSimulation', // Agrega este campo
    ];
}
