<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class analisisFinancieroModel extends Model
{
    use HasFactory;

    protected $table = "analisis_financiero";
    protected $fillable = [
        'impuestos',
        'alimentacion',
        'servicioLuz',
        'servicioAgua',
        'servicioGas',
        'servicioTelefono',
        'servicioInternet',
        'servicioAlquiler',
        'ServicioTransporte',
        'materialEscritorio',
        'pagoEmpleados',
        'promocion',
        'vestimenta',
        'salud',
        'otros',
        'frecuencia',
        'poliza',
        'monto',
        'plazoMeses',
        'tipoCuota',
        'actividad',
        'idSimulation'
    ];
}
