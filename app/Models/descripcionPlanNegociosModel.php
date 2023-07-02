<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class descripcionPlanNegociosModel extends Model
{
    use HasFactory;
    protected $table = "descripcionPlanNegocios";
    protected $fillable = [
        'descripcion',
        'enFuncionando',
        'mesesFuncionando',
        'descripcionInversiones',
        'descripcionRentabilidades',
        'idSimulation'
    ];
}
