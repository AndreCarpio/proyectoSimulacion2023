<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\analisisFinancieroModel;
use App\Models\capitalModel;
use App\Models\comportamientoVentasModel;
use App\Models\costoProductoServicioModel;
use App\Models\descripcionPlanNegociosModel;
use App\Models\descripcionProductoServicioModel;
use App\Models\emprendedorModel;
use App\Models\emprendimientoModel;
use App\Models\mercadoCompetenciaEstrategiasModel;
use App\Models\personaJuridicaModel;
use App\Models\presupuestoModel;
use App\Models\presupuestoTotalModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Exception;

date_default_timezone_set("America/La_Paz");

class simulationController extends Controller
{
   function saveSimulation(Request $request)
   {
      $usuario = Auth::user();

      try {
         $deudor = emprendedorModel::updateOrCreate(
            [
               'idSimulation' => $request->input('idSimulation'),
               'tipo' => 'deudor'
            ],
            [
               'nombre' => $request->input('deudor_nombre_apellidos'),
               'ci' => $request->input('deudor_ci'),
               'extension' => $request->input('deudor_extension'),
               'edad' => $request->input('deudor_edad'),
               'estadoCivil' => $request->input('deudor_estado_civil'),
               'telefono' => $request->input('deudor_telefono'),
               'direccion' => $request->input('deudor_direccion')
            ]
         );

         $codeudor = emprendedorModel::updateOrCreate(
            [
               'idSimulation' => $request->input('idSimulation'),
               'tipo' => 'codeudor'
            ],
            [
               'nombre' => $request->input('codeudor_nombre_apellidos'),
               'ci' => $request->input('codeudor_ci'),
               'extension' => $request->input('codeudor_extension'),
               'edad' => $request->input('codeudor_edad'),
               'estadoCivil' => $request->input('codeudor_estado_civil'),
               'telefono' => $request->input('codeudor_telefono'),
               'direccion' => $request->input('codeudor_direccion')
            ]
         );

         $personaJuridica = personaJuridicaModel::updateOrCreate(
            [
               'idSimulation' => $request->input('idSimulation')
            ],
            [
               'razonSocial' => $request->input('persona_juridica_razon_social'),
               'nit' => $request->input('persona_juridica_nit'),
               'sigla' => $request->input('persona_juridica_sigla'),
               'tipoSociedad' => $request->input('persona_juridica_tipo_sociedad'),
               'repreLegales' => $request->input('persona_juridica_representante'),
               'domicilio' => $request->input('persona_juridica_domicilio')
            ]
         );

         $emprendimiento = emprendimientoModel::updateOrCreate(
            [
               'idSimulation' => $request->input('idSimulation')
            ],
            [
               'actividad' => $request->input('emprendimiento_actividad'),
               'departamento' => $request->input('emprendimiento_departamento'),
               'municipio' => $request->input('emprendimiento_municipio'),
               'telefono' => $request->input('emprendimiento_telefono'),
               'direccion' => $request->input('emprendimiento_direccion')
            ]
         );

         $desPlanNegocios = descripcionPlanNegociosModel::updateOrCreate(
            ['idSimulation' => $request->input('idSimulation')],
            [
               'descripcion' => $request->input('descripcion_actividad'),
               'enFuncionando' => $request->input('actividad_en_funcionamiento'),
               'mesesFuncionando' => $request->input('hace_cuanto_inicio'),
               'descripcionInversiones' => $request->input('que_inversiones_necesita'),
               'descripcionRentabilidades' => $request->input('porque_sera_rentable')
            ]
         );

         $mercadoCompetenciaEstrategias = mercadoCompetenciaEstrategiasModel::updateOrCreate(
            ['idSimulation' => $request->input('idSimulation')],
            [
               'clientes' =>  $request->input('clientes'),
               'potencialesClientes' =>  $request->input('potencialesClientes'),
               'relacionClientesPotenciales' =>  $request->input('relacionClientesPotenciales'),
               'competidoresCercanos' =>  $request->input('competidoresCercanos'),
               'accionesFrenteCompetencia' =>  $request->input('accionesFrenteCompetencia'),
               'caracteristicasBenficiosas' =>  $request->input('caracteristicasBenficiosas'),
               'generaMayorIngreso' =>  $request->input('generaMayorIngreso'),
               'precioProductoServicio' =>  $request->input('precioProductoServicio'),
               'comoDeterminaPrecio' =>  $request->input('comoDeterminaPrecio'),
               'lugarVenta' =>  $request->input('lugarVenta'),
               'intermediarios' =>  $request->input('intermediarios'),
               'otraFormaVenta' =>  $request->input('otraFormaVenta'),
               'comunicarExistencia' =>  $request->input('comunicarExistencia'),
               'accionesAtraerCliente' =>   $request->input('accionesAtraerCliente')
            ]
         );

         $presupuestoEfectivo = presupuestoModel::updateOrCreate(
            [
               'idSimulation' => $request->input('idSimulation'),
               'tipo' => 'efectivo'
            ],
            [
               'detalle' => $request->input('efectivo_detalle'),
               'procedencia' => $request->input('efectivo_procedencia'),
               'aportePropio' => $request->input('efectivo_aporte')
            ]
         );
         $presupuestoCaja = presupuestoModel::updateOrCreate(
            [
               'idSimulation' => $request->input('idSimulation'),
               'tipo' => 'caja'
            ],
            [
               'detalle' => $request->input('caja_ahorro_detalle'),
               'procedencia' => $request->input('caja_ahorro_procedencia'),
               'aportePropio' => $request->input('caja_ahorro_aporte')
            ]
         );
         $presupuestoOtros = presupuestoModel::updateOrCreate(
            [
               'idSimulation' => $request->input('idSimulation'),
               'tipo' => 'otros'
            ],
            [
               'detalle' => $request->input('otros_detalle'),
               'procedencia' => $request->input('otros_procedencia'),
               'aportePropio' => $request->input('otros_aporte')
            ]
         );

         $filasTablasCapital = json_decode($request->input('filasTablasCapital'), true);
         capitalModel::where('idSimulation', $request->input('idSimulation'))->delete();

         foreach ($filasTablasCapital as $elemento) {
            $registro = new capitalModel();
            $registro->tipo = $elemento['tipo'];
            $registro->cantidad = $elemento['cantidad'];
            $registro->unidad = $elemento['unidad'];
            $registro->detalle = $elemento['detalle'];
            $registro->aportePropio = $elemento['aportePropio'];
            $registro->seInvertira = $elemento['seInvertira'];
            $registro->idSimulation = $request->input('idSimulation');
            $registro->save();
         }

         $filasDescripcionProductoServicio = json_decode($request->input('filasDescripcionProductoServicio'), true);
         descripcionProductoServicioModel::where('idSimulation', $request->input('idSimulation'))->delete();

         foreach ($filasDescripcionProductoServicio as $elemento) {
            $registro = new descripcionProductoServicioModel();
            $registro->nombre = $elemento['nombre'];
            $registro->proceso = $elemento['proceso'];
            $registro->caracteristicas = $elemento['caracteristicas'];
            $registro->idSimulation = $request->input('idSimulation');
            $registro->save();
         }


         $presupuestoTotal = presupuestoTotalModel::updateOrCreate(
            [
               'idSimulation' => $request->input('idSimulation')
            ],
            [
               'apGastosOperativos'  => $request->input('apGastosOperativos'),
               'apMateriaPrima' => $request->input('apMateriaPrima'),
               'apRquePromocionales' => $request->input('apRquePromocionales'),
               'apInfraestructura' => $request->input('apInfraestructura'),
               'apMaquinaria' => $request->input('apMaquinaria'),
               'apRequeLegales' => $request->input('apRequeLegales'),
               'primerDesembolso' => $request->input('primerDesembolso'),
               'segundoDesembolso' => $request->input('segundoDesembolso')
            ]
         );



         $comportamientoVentas = comportamientoVentasModel::updateOrCreate(
            [
               'idSimulation' => $request->input('idSimulation')
            ],
            [
               'alta' => $request->input('rangoVentasAlto'),
               'media' => $request->input('rangoVentasMedio'),
               'baja' => $request->input('rangoVentasBajo'),
               'enero' => $request->input('mes1'),
               'febrero' => $request->input('mes2'),
               'marzo' => $request->input('mes3'),
               'abril' => $request->input('mes4'),
               'mayo' => $request->input('mes5'),
               'junio' => $request->input('mes6'),
               'julio' => $request->input('mes7'),
               'agosto' => $request->input('mes8'),
               'septiembre' => $request->input('mes9'),
               'octubre' => $request->input('mes10'),
               'noviembre' => $request->input('mes11'),
               'diciembre' => $request->input('mes12'),
            ]
         );

         $filasCostoProductoServicio = json_decode($request->input('filasCostoProductoServicio'), true);
         costoProductoServicioModel::where('idSimulation', $request->input('idSimulation'))->delete();

         foreach ($filasCostoProductoServicio as $elemento) {
            $registro = new costoProductoServicioModel();
            $registro->productoServicio = $elemento['productoServicio'];
            $registro->tipo = $elemento['tipo'];
            $registro->cantidad = $elemento['cantidad'];
            $registro->unidad = $elemento['unidad'];
            $registro->frecuencia = $elemento['frecuencia'];
            $registro->precioCompra = $elemento['precioCompra'];
            $registro->precioVenta = $elemento['precioVenta'];
            $registro->idSimulation = $request->input('idSimulation');
            $registro->save();
         }


         $analisisFinanciero = analisisFinancieroModel::updateOrCreate(
            [
               'idSimulation' => $request->input('idSimulation')
            ],
            [
               'impuestos' => $request->input('impuestos'),
               'alimentacion' => $request->input('alimentacion'),
               'servicioLuz' => $request->input('servicioLuz'),
               'servicioAgua' => $request->input('servicioAgua'),
               'servicioGas' => $request->input('servicioGas'),
               'servicioTelefono' => $request->input('servicioTelefono'),
               'servicioInternet' => $request->input('servicioInternet'),
               'servicioAlquiler' => $request->input('servicioAlquiler'),
               'ServicioTransporte' => $request->input('ServicioTransporte'),
               'materialEscritorio' => $request->input('materialEscritorio'),
               'pagoEmpleados' => $request->input('pagoEmpleados'),
               'promocion' => $request->input('promocion'),
               'vestimenta' => $request->input('vestimenta'),
               'salud' => $request->input('salud'),
               'otros' => $request->input('otros'),
               'frecuencia' => $request->input('frecuencia'),
               'poliza' => $request->input('poliza'),
               'monto' => $request->input('montoAnlisisFinanciero'),
               'plazoMeses' => $request->input('plazoMeses'),
               'tipoCuota' => $request->input('tipoCuota'),
               'actividad' => $request->input('actividad')
            ]
         );
      } catch (Exception $e) {
         return response()->json([
            "Error" => $e->getMessage()
         ]);
      }
      return  $request;
      /*return response()->json([
         "Exito" => $request
      ]);*/
   }
}
