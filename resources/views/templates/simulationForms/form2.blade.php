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
                <td><input type="text" class="form-control" value="Efectivo"></td>
                <td><input type="text" class="form-control" value="Ahorro"></td>
                <td><input type="number" oninput="validarInputNumber(event)"
                        class="form-control monto-presupuesto-emprendimiento" value="0"></td>
            </tr>
            <tr>
                <th>CAJA DE AHORRO/ENTIDAD FINACIERA</th>
                <td><input type="text" class="form-control"></td>
                <td><input type="text" class="form-control"></td>
                <td><input type="number" oninput="validarInputNumber(event)"
                        class="form-control monto-presupuesto-emprendimiento" value="0"></td>
            </tr>
            <tr>
                <th style="vertical-align: middle">OTROS</th>
                <td><input type="text" class="form-control"></td>
                <td><input type="text" class="form-control"></td>
                <td><input type="number" oninput="validarInputNumber(event)"
                        class="form-control monto-presupuesto-emprendimiento" value="0"></td>
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
                            class="form-control input-aporte-propio" value="0">
                    </td>
                </tr>
            </tbody>
        </table>

        <label class="form-label">Materia Prima, Insumos y/o animales de engorde</label>
        <table class="table table-bordered tabla-materia-prima tabla-tipo2 ">
            <thead>
                <tr>
                    <th class="tabla-tipo2-celda-pequenia" scope="col">CANTIDAD </th>
                    <th class="tabla-tipo2-celda-pequenia" scope="col">UNIDAD </th>
                    <th class="input-grande" scope="col">DETALLE</th>
                    <th class="tabla-tipo2-celda-pequenia" scope="col">APORTE PROPIO (BS)</th>
                    <th class="tabla-tipo2-celda-pequenia" scope="col">SE INVERTIRÁ (BS)</th>
                    <th class="tabla-tipo2-celda-btn" scope="col">
                        <button class="btn btn-primary " onclick="agregarFilaTablaTipo2(this);"><i class="fa fa-plus"
                                aria-hidden="true"></i>
                        </button>
                    </th>

                </tr>
            </thead>
            <tbody>
                <tr>
                    <th style="vertical-align: middle">
                        <input type="text" class="form-control">
                    </th>
                    <th style="vertical-align: middle">
                        <input type="text" class="form-control">
                    </th>
                    <th style="vertical-align: middle">
                        <input type="text" class="form-control">
                    </th>
                    <td>
                        <input type="number" oninput="validarInputNumber(event); actualizarTotalOperativoInversion();"
                            class="form-control input-aporte-propio" value="0">
                    </td>
                    <td>
                        <input type="number" oninput="validarInputNumber(event); actualizarTotalOperativoInversion();"
                            class="form-control input-inversion" value="0">
                    </td>
                    <th>
                        <button onclick="eliminarFilaTablaTipo2(this)" type="text" id=""
                            class="btn btn-danger ">
                            <i class="fa fa-trash" aria-hidden="true"></i>
                        </button>
                    </th>
                </tr>
            </tbody>
        </table>


        <label class="form-label">Requerimientos promocionales</label>

        <table class="table table-bordered tabla-reque-promocionales tabla-tipo2 ">
            <thead>
                <tr>
                    <th class="tabla-tipo2-celda-pequenia" scope="col">CANTIDAD </th>
                    <th class="tabla-tipo2-celda-pequenia" scope="col">UNIDAD </th>
                    <th class="input-grande" scope="col">DETALLE</th>
                    <th class="tabla-tipo2-celda-pequenia" scope="col">APORTE PROPIO (BS)</th>
                    <th class="tabla-tipo2-celda-pequenia" scope="col">SE INVERTIRÁ (BS)</th>
                    <th class="tabla-tipo2-celda-btn" scope="col">
                        <button class="btn btn-primary " onclick="agregarFilaTablaTipo2(this);"><i class="fa fa-plus"
                                aria-hidden="true"></i>
                        </button>
                    </th>

                </tr>
            </thead>
            <tbody>
                <tr>
                    <th style="vertical-align: middle">
                        <input type="text" class="form-control">
                    </th>
                    <th style="vertical-align: middle">
                        <input type="text" class="form-control">
                    </th>
                    <th style="vertical-align: middle">
                        <input type="text" class="form-control">
                    </th>
                    <td>
                        <input type="number" oninput="validarInputNumber(event); actualizarTotalOperativoInversion();"
                            class="form-control input-aporte-propio" value="0">
                    </td>
                    <td>
                        <input type="number" oninput="validarInputNumber(event); actualizarTotalOperativoInversion();"
                            class="form-control input-inversion" value="0">
                    </td>
                    <th>
                        <button onclick="eliminarFilaTablaTipo2(this)" type="text" id=""
                            class="btn btn-danger ">
                            <i class="fa fa-trash" aria-hidden="true"></i>
                        </button>
                    </th>
                </tr>
            </tbody>
        </table>


        <label class="form-label">Gastos operativos (Mano de obra, Alquileres, Servicios Básicos, etc)</label>
        <table class="table table-bordered tabla-gastos-operativos tabla-tipo2 ">
            <thead>
                <tr>
                    <th class="tabla-tipo2-celda-pequenia" scope="col">CANTIDAD </th>
                    <th class="tabla-tipo2-celda-pequenia" scope="col">UNIDAD </th>
                    <th class="input-grande" scope="col">DETALLE</th>
                    <th class="tabla-tipo2-celda-pequenia" scope="col">APORTE PROPIO (BS)</th>
                    <th class="tabla-tipo2-celda-pequenia" scope="col">SE INVERTIRÁ (BS)</th>
                    <th class="tabla-tipo2-celda-btn" scope="col">
                        <button class="btn btn-primary " onclick="agregarFilaTablaTipo2(this);"><i class="fa fa-plus"
                                aria-hidden="true"></i>
                        </button>
                    </th>

                </tr>
            </thead>
            <tbody>
                <tr>
                    <th style="vertical-align: middle">
                        <input type="text" class="form-control">
                    </th>
                    <th style="vertical-align: middle">
                        <input type="text" class="form-control">
                    </th>
                    <th style="vertical-align: middle">
                        <input type="text" class="form-control">
                    </th>
                    <td>
                        <input type="number" oninput="validarInputNumber(event); actualizarTotalOperativoInversion();"
                            class="form-control input-aporte-propio" value="0">
                    </td>
                    <td>
                        <input type="number" oninput="validarInputNumber(event); actualizarTotalOperativoInversion();"
                            class="form-control input-inversion" value="0">
                    </td>
                    <th>
                        <button onclick="eliminarFilaTablaTipo2(this)" type="text" id=""
                            class="btn btn-danger ">
                            <i class="fa fa-trash" aria-hidden="true"></i>
                        </button>
                    </th>
                </tr>
            </tbody>
        </table>

        <table class="table table-bordered">
            <tbody>
                <tr style="text-align: center">
                    <th style="text-align: right">
                        Total Capital Operativo
                    </th>
                    <td style="width: 150px" class="total-aporte-propio-operativo">
                        0
                    </td>
                    <td style="width: 150px" class="total-inversion-operativo">
                        0
                    </td>
                </tr>
            </tbody>
        </table>

    </div>

    <div class="col cotenedor-fieldset seccion-capital-inversion">
        <p class="cotenedor-legenda"> Capital De Inversion </p>

        <label class="form-label"> Infraestructura y/o terrenos y/o plantines</label>
        <table class="table table-bordered tabla-infraestructura tabla-tipo2 ">
            <thead>
                <tr>
                    <th class="tabla-tipo2-celda-pequenia" scope="col">CANTIDAD </th>
                    <th class="tabla-tipo2-celda-pequenia" scope="col">UNIDAD </th>
                    <th class="input-grande" scope="col">DETALLE</th>
                    <th class="tabla-tipo2-celda-pequenia" scope="col">APORTE PROPIO (BS)</th>
                    <th class="tabla-tipo2-celda-pequenia" scope="col">SE INVERTIRÁ (BS)</th>
                    <th class="tabla-tipo2-celda-btn" scope="col">
                        <button class="btn btn-primary " onclick="agregarFilaTablaTipo2(this);"><i class="fa fa-plus"
                                aria-hidden="true"></i>
                        </button>
                    </th>

                </tr>
            </thead>
            <tbody>
                <tr>
                    <th style="vertical-align: middle">
                        <input type="text" class="form-control">
                    </th>
                    <th style="vertical-align: middle">
                        <input type="text" class="form-control">
                    </th>
                    <th style="vertical-align: middle">
                        <input type="text" class="form-control">
                    </th>
                    <td>
                        <input type="number" oninput="validarInputNumber(event); actualizarTotalOperativoInversion(); "
                            class="form-control input-aporte-propio" value="0">
                    </td>
                    <td>
                        <input type="number" oninput="validarInputNumber(event); actualizarTotalOperativoInversion(); "
                            class="form-control input-inversion" value="0">
                    </td>
                    <th>
                        <button onclick="eliminarFilaTablaTipo2(this)" type="text" id=""
                            class="btn btn-danger ">
                            <i class="fa fa-trash" aria-hidden="true"></i>
                        </button>
                    </th>
                </tr>
            </tbody>
        </table>
        <label class="form-label"> Maquinaria, Equipos, Vehículos y/o Ganado</label>

        <table class="table table-bordered tabla-infraestructura tabla-tipo2 ">
            <thead>
                <tr>
                    <th class="tabla-tipo2-celda-pequenia" scope="col">CANTIDAD </th>
                    <th class="tabla-tipo2-celda-pequenia" scope="col">UNIDAD </th>
                    <th class="input-grande" scope="col">DETALLE</th>
                    <th class="tabla-tipo2-celda-pequenia" scope="col">APORTE PROPIO (BS)</th>
                    <th class="tabla-tipo2-celda-pequenia" scope="col">SE INVERTIRÁ (BS)</th>
                    <th class="tabla-tipo2-celda-btn" scope="col">
                        <button class="btn btn-primary " onclick="agregarFilaTablaTipo2(this);"><i class="fa fa-plus"
                                aria-hidden="true"></i>
                        </button>
                    </th>

                </tr>
            </thead>
            <tbody>
                <tr>
                    <th style="vertical-align: middle">
                        <input type="text" class="form-control">
                    </th>
                    <th style="vertical-align: middle">
                        <input type="text" class="form-control">
                    </th>
                    <th style="vertical-align: middle">
                        <input type="text" class="form-control">
                    </th>
                    <td>
                        <input type="number" oninput="validarInputNumber(event); actualizarTotalOperativoInversion(); "
                            class="form-control input-aporte-propio" value="0">
                    </td>
                    <td>
                        <input type="number" oninput="validarInputNumber(event); actualizarTotalOperativoInversion(); "
                            class="form-control input-inversion" value="0">
                    </td>
                    <th>
                        <button onclick="eliminarFilaTablaTipo2(this)" type="text" id=""
                            class="btn btn-danger ">
                            <i class="fa fa-trash" aria-hidden="true"></i>
                        </button>
                    </th>
                </tr>
            </tbody>
        </table>

        <label class="form-label"> Requerimientos legales </label>

        <table class="table table-bordered tabla-infraestructura tabla-tipo2 ">
            <thead>
                <tr>
                    <th class="tabla-tipo2-celda-pequenia" scope="col">CANTIDAD </th>
                    <th class="tabla-tipo2-celda-pequenia" scope="col">UNIDAD </th>
                    <th class="input-grande" scope="col">DETALLE</th>
                    <th class="tabla-tipo2-celda-pequenia" scope="col">APORTE PROPIO (BS)</th>
                    <th class="tabla-tipo2-celda-pequenia" scope="col">SE INVERTIRÁ (BS)</th>
                    <th class="tabla-tipo2-celda-btn" scope="col">
                        <button class="btn btn-primary " onclick="agregarFilaTablaTipo2(this);"><i class="fa fa-plus"
                                aria-hidden="true"></i>
                        </button>
                    </th>

                </tr>
            </thead>
            <tbody>
                <tr>
                    <th style="vertical-align: middle">
                        <input type="text" class="form-control">
                    </th>
                    <th style="vertical-align: middle">
                        <input type="text" class="form-control">
                    </th>
                    <th style="vertical-align: middle">
                        <input type="text" class="form-control">
                    </th>
                    <td>
                        <input type="number" oninput="validarInputNumber(event); actualizarTotalOperativoInversion(); "
                            class="form-control input-aporte-propio" value="0">
                    </td>
                    <td>
                        <input type="number" oninput="validarInputNumber(event); actualizarTotalOperativoInversion(); "
                            class="form-control input-inversion" value="0">
                    </td>
                    <th>
                        <button onclick="eliminarFilaTablaTipo2(this)" type="text" id=""
                            class="btn btn-danger ">
                            <i class="fa fa-trash" aria-hidden="true"></i>
                        </button>
                    </th>
                </tr>
            </tbody>
        </table>

        <table class="table table-bordered">
            <tbody>
                <tr style="text-align: center">
                    <th style="text-align: right">
                        Total Capital De Inversion
                    </th>
                    <td style="width: 150px" class="total-aporte-propio-inversion">
                        0
                    </td>
                    <td style="width: 150px" class="total-inversion-inversion">
                        0
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
