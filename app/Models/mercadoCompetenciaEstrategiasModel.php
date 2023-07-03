<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class mercadoCompetenciaEstrategiasModel extends Model
{
    use HasFactory;

    protected $table = "mercado_competencia_estrategias";
    protected $fillable = [
       'clientes',
       'potencialesClientes',
       'relacionClientesPotenciales',
       'competidoresCercanos',
       'accionesFrenteCompetencia',
       'caracteristicasBenficiosas',
       'generaMayorIngreso',
       'precioProductoServicio',
       'comoDeterminaPrecio',
       'lugarVenta',
       'intermediarios',
       'otraFormaVenta',
       'comunicarExistencia',
       'accionesAtraerCliente',
        'idSimulation'
    ];
    
}
