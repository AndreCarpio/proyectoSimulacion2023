<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\simulationModel;
use App\Models\usersModel;
use Illuminate\Support\Facades\Auth;



class simulationsController extends Controller
{
   function simulationsList()
   {
      $usuario = Auth::user();
      $tabla = new simulationModel();
      $simulaciones = $tabla->where('idUser', $usuario->id)->orderBy('created_at', 'desc')->get();
      return view("newRoutes.simulations", compact('usuario', 'simulaciones'));
   }

   function createSimulation(Request $request)
   {

      $usuario = Auth::user();

      $simulation = new simulationModel();
      $simulation->idUser = $usuario->id;
      $simulation->title = $request->input('input-nombre-simulacion');
      $simulation->save();

      $simulation->save();

      return response()->json([
         "alerta" => "success"
      ]);
   }

   function deleteSimulation(Request $request)
   {
      $usuario = Auth::user();
      $elemento = simulationModel::where('idUser', $usuario->id)->where('idSimulation', $request->input('idSimulation'))->first();

      if ($elemento) {
         $elemento->delete();
      } else {
         // en caso de no encontrar el registro
      }

      return redirect(route('simulations'));
   }

   function simulationShow($idSimulacion)
   {
      return view('newRoutes.simulation',compact('idSimulacion'));
   }
}
