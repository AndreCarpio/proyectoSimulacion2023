<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class capitalModel extends Model
{
    use HasFactory;

    protected $table = "capital";
    protected $fillable = [
        'tipo',
        'cantidad',
        'unidad',
        'detalle',
        'aportePropio',
        'seInvertira',
        'idSimulation'
    ];
}
