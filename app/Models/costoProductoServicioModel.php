<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class costoProductoServicioModel extends Model
{
    use HasFactory;
    protected $table = "costo_producto_servico";
    protected $fillable = [
        'productoServicio',
        'tipo',
        'cantidad',
        'unidad',
        'frecuencia',
        'precioCompra',
        'precioVenta',
        'idSimulation'
    ];
}
