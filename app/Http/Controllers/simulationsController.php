<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class simulationsController extends Controller
{
    function simulationsList()
   {
      $usuario = Auth::user();

      return view("newRoutes.simulations", compact('usuario'));
   }
}
