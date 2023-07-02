<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class personaJuridicaModel extends Model
{
    use HasFactory;

    protected $table = "persona_juridica";
    protected $fillable = [
        'razonSocial',
        'nit',
        'sigla',
        'tipoSociedad',
        'repreLegales',
        'domicilio',
        'idSimulation'
    ];
}
