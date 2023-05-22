<?php

namespace App\Http\Controllers;

use App\Models\simulationModel;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class simulationsController extends Controller
{
    function simulationsList()
   {
      $usuario = Auth::user();
      $tabla = new simulationModel();
      $simulaciones = $tabla -> where('idUser', $usuario -> id)->get();
      return view("newRoutes.simulations", compact('usuario','simulaciones'));
      
   }
}
