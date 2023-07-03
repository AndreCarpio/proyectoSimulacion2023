<?php

namespace App\Http\Controllers;

use App\Models\capitalModel;
use App\Models\comportamientoVentasModel;
use App\Models\costoProductoServicioModel;
use App\Models\descripcionPlanNegociosModel;
use App\Models\descripcionProductoServicioModel;
use App\Models\emprendedorModel;
use App\Models\emprendimientoModel;
use App\Models\personaJuridicaModel;
use App\Models\presupuestoModel;
use App\Models\presupuestoTotalModel;
use Illuminate\Http\Request;

use App\Models\simulationModel;
use App\Models\usersModel;
use Illuminate\Support\Facades\Auth;

date_default_timezone_set("America/La_Paz");

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

         capitalModel::where('idSimulation', $request->input('idSimulation'))->delete();
         comportamientoVentasModel::where('idSimulation', $request->input('idSimulation'))->delete();
         costoProductoServicioModel::where('idSimulation', $request->input('idSimulation'))->delete();
         descripcionPlanNegociosModel::where('idSimulation', $request->input('idSimulation'))->delete();
         descripcionProductoServicioModel::where('idSimulation', $request->input('idSimulation'))->delete();
         emprendedorModel::where('idSimulation', $request->input('idSimulation'))->delete();
         emprendimientoModel::where('idSimulation', $request->input('idSimulation'))->delete();
         personaJuridicaModel::where('idSimulation', $request->input('idSimulation'))->delete();
         presupuestoModel::where('idSimulation', $request->input('idSimulation'))->delete();
         presupuestoTotalModel::where('idSimulation', $request->input('idSimulation'))->delete();

         $elemento->delete();
      } else {
         // en caso de no encontrar el registro
      }

      return redirect(route('simulations'));
   }

   function simulationShow($idSimulacion)
   {
      $usuario = Auth::user();
      $tabla = new simulationModel();

      $simulacion = $tabla->where('idUser', $usuario->id)
         ->where('idSimulation', $idSimulacion)
         ->orderBy('created_at', 'desc')
         ->get();

      if ($simulacion->isEmpty()) {
         $simulaciones = $tabla->where('idUser', $usuario->id)->orderBy('created_at', 'desc')->get();
         return view("newRoutes.simulations", compact('usuario', 'simulaciones'));
      }


      $tablaEmprendedor = new emprendedorModel();
      $simulationEmprendedores = $tablaEmprendedor->where('idSimulation', $idSimulacion)
         ->get();

      $deudor = $simulationEmprendedores->whereIn('tipo', ['deudor'])
         ->first();
      $codeudor = $simulationEmprendedores->whereIn('tipo', ['codeudor'])
         ->first();

      $tablaEmprendimiento = new emprendimientoModel();
      $emprendimiento = $tablaEmprendimiento->where('idSimulation', $idSimulacion)
         ->first();

      $tablaPersonaJuridica = new personaJuridicaModel();
      $personaJuridica = $tablaPersonaJuridica->where('idSimulation', $idSimulacion)
         ->first();

      $tablaPlanNegocion = new descripcionPlanNegociosModel();

      $descripcionPlanNegocios = $tablaPlanNegocion->where('idSimulation', $idSimulacion)
         ->first();

      $tablaPresupuesto = new presupuestoModel();

      $presupuestoEfectivo = $tablaPresupuesto->where('idSimulation', $idSimulacion)
         ->where('tipo', 'efectivo')
         ->first();

      $presupuestoCaja = $tablaPresupuesto->where('idSimulation', $idSimulacion)
         ->where('tipo', 'caja')
         ->first();

      $presupuestoOtros = $tablaPresupuesto->where('idSimulation', $idSimulacion)
         ->where('tipo', 'otros')
         ->first();

      $tablaCapital = new capitalModel();

      $capital = $tablaCapital->where('idSimulation', $idSimulacion)
         ->get();

      $tablaDescripcionProductoServicio = new descripcionProductoServicioModel();
      $descripcionProductoServicio = $tablaDescripcionProductoServicio->where('idSimulation', $idSimulacion)
         ->get();

      $tablaPresupuestoTotal = new presupuestoTotalModel();
      $presupuestoTotal = $tablaPresupuestoTotal->where('idSimulation', $idSimulacion)
         ->first();


      $tablaComportamientoVentas = new comportamientoVentasModel();
      $comportamientoVentas = $tablaComportamientoVentas->where('idSimulation', $idSimulacion)
         ->first();


      $tablaCostoProductoServico = new costoProductoServicioModel();
      $costoProdutoServico = $tablaCostoProductoServico->where('idSimulation', $idSimulacion)
         ->get();





      // obtener todo los datos de la simulacion de la bade de datos
      return view('newRoutes.simulation', compact(
         'idSimulacion',
         'usuario',
         'simulacion',
         'simulationEmprendedores',
         'deudor',
         'codeudor',
         'emprendimiento',
         'personaJuridica',
         'descripcionPlanNegocios',
         'presupuestoEfectivo',
         'presupuestoCaja',
         'presupuestoOtros',
         'capital',
         'descripcionProductoServicio',
         'presupuestoTotal',
         'comportamientoVentas',
         'costoProdutoServico'
      ));
   }



   function simulationCostos()
   {
      return view('costos.costos');
   }
}
