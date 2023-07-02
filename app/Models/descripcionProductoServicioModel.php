<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class descripcionProductoServicioModel extends Model
{
    use HasFactory;

    protected $table = "descripcionProductoServicio";

    protected $fillable = [
        'nombre',
        'proceso',
        'caracteristicas',
        'idSimulation'
     ];
}
