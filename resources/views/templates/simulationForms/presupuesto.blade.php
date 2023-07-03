<p class="titulo-seccion">▶ Presupuesto Del Emprendimiento</p>

<div class="mb-3">
    <label class="form-label">¿Con que Efectivo cuenta para realizar el emprendimiento?</label>
    <table class="table table-bordered  tabla-presupuesto-emprendimiento tabla-tipo2 ">
        <thead>
            <tr>
                <th colspan="2" scope="col">DETALLE </th>
                <th scope="col">PROCEDENCIA</th>
                <th scope="col">MONTO APORTE PROPIO</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th style="vertical-align: middle">EFECTIVO/ORIGEN</th>
                <td><input name="efectivo_detalle" type="text" class="form-control"
                        value="{{ $presupuestoEfectivo->detalle ?? 'Efectivo' }}"></td>
                <td><input name="efectivo_procedencia" type="text" class="form-control"
                        value="{{ $presupuestoEfectivo->procedencia ?? 'Ahorro' }}"></td>
                <td><input name="efectivo_aporte" type="number"
                        oninput="validarInputNumber(event); actualizarSubTotalMontoEmprendimiento();"
                        class="form-control monto-presupuesto-emprendimiento"
                        value="{{ $presupuestoEfectivo->aportePropio ?? '0' }}"></td>
            </tr>
            <tr>
                <th>CAJA DE AHORRO/ENTIDAD FINACIERA</th>
                <td><input name="caja_ahorro_detalle" type="text" class="form-control"
                        value="{{ $presupuestoCaja->detalle ?? '' }}"></td>
                <td><input name="caja_ahorro_procedencia" type="text" class="form-control"
                        value="{{ $presupuestoCaja->procedencia ?? '' }}"></td>
                <td><input name="caja_ahorro_aporte" type="number"
                        oninput="validarInputNumber(event); actualizarSubTotalMontoEmprendimiento();"
                        class="form-control monto-presupuesto-emprendimiento"
                        value="{{ $presupuestoCaja->aportePropio ?? '0' }}"></td>
            </tr>
            <tr>
                <th style="vertical-align: middle">OTROS</th>
                <td><input name="otros_detalle" type="text" class="form-control"
                        value="{{ $presupuestoOtros->detalle ?? '' }}"></td>
                <td><input name="otros_procedencia" type="text" class="form-control"
                        value="{{ $presupuestoOtros->procedencia ?? '' }}"></td>
                <td><input name="otros_aporte" type="number"
                        oninput="validarInputNumber(event); actualizarSubTotalMontoEmprendimiento();"
                        class="form-control monto-presupuesto-emprendimiento"value="{{ $presupuestoOtros->aportePropio ?? '0' }}">
                </td>
            </tr>
            <tr>
                <th colspan="3" style="text-align: right; vertical-align: middle">SUB TOTAL</th>
                <td style="text-align: center; vertical-align: middle" class="subTotalMontoEmprendimiento">0.00</td>
            </tr>
        </tbody>
    </table>

    <div class="col cotenedor-fieldset seccion-capital-operativo">
        <p class="cotenedor-legenda"> Capital Operativo </p>
        <label class="form-label">Mano de Obra del Emprendedor</label>

        <table class="table table-bordered tabla-mano-obra-emprendedor tabla-tipo2 ">
            <thead>
                <tr>
                    <th scope="col">CANTIDAD </th>
                    <th scope="col">UNIDAD </th>
                    <th scope="col">DETALLE</th>
                    <th scope="col">APORTE PROPIO (BS)</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th style="vertical-align: middle">1</th>
                    <th style="vertical-align: middle">GLOBAL</th>
                    <th style="vertical-align: middle">MANO DE OBRA DEL EMPRENDEDOR HASTA LA INSTALACION DEL NEGOCIO
                    </th>
                    <td><input type="number" oninput="validarInputNumber(event); actualizarTotalOperativoInversion();"
                            class="form-control input-aporte-propio mano-obra-aporte-propio"
                            @foreach ($capital as $item)
                                 @if ($item->tipo == 'manoObra')
                                     value="{{ $item->aportePropio }}"
                                 @endif @endforeach>
                    </td>
                </tr>
            </tbody>
        </table>

        <label class="form-label">Materia Prima, Insumos y/o animales de engorde</label>

        @component('templates.presupuestoTableTemplate', [
            'nombreTabla' => 'tabla-materia-prima',
            'tipo' => 'materiaPrima',
            'capital' => $capital,
        ])
        @endcomponent

        <label class="form-label">Requerimientos promocionales</label>
        @component('templates.presupuestoTableTemplate', [
            'nombreTabla' => 'tabla-requerimientos-promocionales',
            'tipo' => 'requePromocionales',
            'capital' => $capital,
        ])
        @endcomponent


        <label class="form-label">Gastos operativos (Mano de obra, Alquileres, Servicios Básicos, etc)</label>
        @component('templates.presupuestoTableTemplate', [
            'nombreTabla' => 'tabla-gastos-operativos',
            'tipo' => 'gastoOperativos',
            'capital' => $capital,
        ])
        @endcomponent

        <table class="table table-bordered">
            <tbody>
                <tr style="text-align: center">
                    <th style="text-align: right">
                        Total Capital Operativo
                    </th>
                    <td style="width: 150px" class="total-aporte-propio-operativo">
                        0.00
                    </td>
                    <td style="width: 150px" class="total-inversion-operativo">
                        0.00
                    </td>
                </tr>
            </tbody>
        </table>

    </div>

    <div class="col cotenedor-fieldset seccion-capital-inversion">

        <p class="cotenedor-legenda"> Capital De Inversion </p>

        <label class="form-label"> Infraestructura y/o terrenos y/o plantines</label>

        @component('templates.presupuestoTableTemplate', [
            'nombreTabla' => 'tabla-infraestructura',
            'tipo' => 'infraestructura',
            'capital' => $capital,
        ])
        @endcomponent

        <label class="form-label"> Maquinaria, Equipos, Vehículos y/o Ganado</label>

        @component('templates.presupuestoTableTemplate', [
            'nombreTabla' => 'tabla-Maquinaria',
            'tipo' => 'maquinaria',
            'capital' => $capital,
        ])
        @endcomponent

        <label class="form-label"> Requerimientos legales </label>

        @component('templates.presupuestoTableTemplate', [
            'nombreTabla' => 'tabla-requerimientos-legales',
            'tipo' => 'requeLegales',
            'capital' => $capital,
        ])
        @endcomponent
        <table class="table table-bordered">
            <tbody>
                <tr style="text-align: center">
                    <th style="text-align: right">
                        Total Capital De Inversion
                    </th>
                    <td style="width: 150px" class="total-aporte-propio-inversion">
                        0.00
                    </td>
                    <td style="width: 150px" class="total-inversion-inversion">
                        0.00
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
