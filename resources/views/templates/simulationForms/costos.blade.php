<p class="titulo-seccion"> Hoja De Costos Directos</p>
<label class="form-label">Manofactura y Servicios</label>

<div class=" cotenedor-fieldset  rango-venta-mes">
    <p class="cotenedor-legenda"> Ventas Totales/Mes:</p>
    <label class="form-label" for="alto">Alto</label>
    <input class="form-control" type="number" id="alto" min="0" onchange="calcularTotal()"
        oninput="validarInputNumber(event); calcularTotal();" name="rangoVentasAlto"
        value="{{ $comportamientoVentas->alta ?? 0 }}">
    <label class="form-label" for="medio">Medio</label>
    <input class="form-control" type="number" id="medio" min="0" onchange="calcularTotal()"
        oninput="validarInputNumber(event); calcularTotal();" name="rangoVentasMedio"
        value="{{ $comportamientoVentas->media ?? 0 }}">
    <label class="form-label" for="bajo">Bajo</label>
    <input class="form-control" type="number" id="bajo" min="0" onchange="calcularTotal()"
        oninput="validarInputNumber(event); calcularTotal();" name="rangoVentasBajo"
        value="{{ $comportamientoVentas->baja ?? 0 }}">
</div>
<br>
<div class=" cotenedor-fieldset comportamiento-ventas-mes">
    <p class="cotenedor-legenda"> Comportamiento Ventas/Mes:</p>
    <div class="comportamiento-mes">
        <label class="form-label">Enero:</label>
        <select class="form-select" id="mes1" name="mes1" onchange="calcularTotal()">
            <option {{ ($comportamientoVentas->enero ?? '') == 'alta' ? 'selected' : '' }} value="alta">Alta
            </option>
            <option {{ ($comportamientoVentas->enero ?? '') == 'media' ? 'selected' : '' }} value="media">Media
            </option>
            <option {{ ($comportamientoVentas->enero ?? '') == 'baja' ? 'selected' : '' }} value="baja">Baja
            </option>
        </select>
    </div>


    <div class="comportamiento-mes"> <label class="form-label">Febrero:</label>
        <select class="form-select" id="mes2" name="mes2" onchange="calcularTotal()">
            <option {{ ($comportamientoVentas->febrero ?? '') == 'alta' ? 'selected' : '' }} value="alta">Alta
            </option>
            <option {{ ($comportamientoVentas->febrero ?? '') == 'media' ? 'selected' : '' }} value="media">Media
            </option>
            <option {{ ($comportamientoVentas->febrero ?? '') == 'baja' ? 'selected' : '' }} value="baja">Baja
            </option>
        </select class="form-select">
    </div>

    <div class="comportamiento-mes"> <label class="form-label">Marzo:</label>
        <select class="form-select" id="mes3" name="mes3" onchange="calcularTotal()">
            <option {{ ($comportamientoVentas->marzo ?? '') == 'alta' ? 'selected' : '' }} value="alta">Alta
            </option>
            <option {{ ($comportamientoVentas->marzo ?? '') == 'media' ? 'selected' : '' }} value="media">Media
            </option>
            <option {{ ($comportamientoVentas->marzo ?? '') == 'baja' ? 'selected' : '' }} value="baja">Baja
            </option>
        </select class="form-select">
    </div>

    <div class="comportamiento-mes"> <label class="form-label">Abril:</label>
        <select class="form-select" id="mes4" name="mes4" onchange="calcularTotal()">
            <option {{ ($comportamientoVentas->abril ?? '') == 'alta' ? 'selected' : '' }} value="alta">Alta
            </option>
            <option {{ ($comportamientoVentas->abril ?? '') == 'media' ? 'selected' : '' }} value="media">Media
            </option>
            <option {{ ($comportamientoVentas->abril ?? '') == 'baja' ? 'selected' : '' }} value="baja">Baja
            </option>
        </select class="form-select">
    </div>

    <div class="comportamiento-mes"> <label class="form-label">Mayo:</label>
        <select class="form-select" id="mes5" name="mes5" onchange="calcularTotal()">
            <option {{ ($comportamientoVentas->mayo ?? '') == 'alta' ? 'selected' : '' }} value="alta">Alta
            </option>
            <option {{ ($comportamientoVentas->mayo ?? '') == 'media' ? 'selected' : '' }} value="media">Media
            </option>
            <option {{ ($comportamientoVentas->mayo ?? '') == 'baja' ? 'selected' : '' }} value="baja">Baja
            </option>
        </select class="form-select">
    </div>

    <div class="comportamiento-mes"> <label class="form-label">Junio:</label>
        <select class="form-select" id="mes6" name="mes6" onchange="calcularTotal()">
            <option {{ ($comportamientoVentas->junio ?? '') == 'alta' ? 'selected' : '' }} value="alta">Alta
            </option>
            <option {{ ($comportamientoVentas->junio ?? '') == 'media' ? 'selected' : '' }} value="media">Media
            </option>
            <option {{ ($comportamientoVentas->junio ?? '') == 'baja' ? 'selected' : '' }} value="baja">Baja
            </option>
        </select class="form-select">
    </div>

    <div class="comportamiento-mes"> <label class="form-label">Julio:</label>
        <select class="form-select" id="mes7" name="mes7" onchange="calcularTotal()">
            <option {{ ($comportamientoVentas->julio ?? '') == 'alta' ? 'selected' : '' }} value="alta">Alta
            </option>
            <option {{ ($comportamientoVentas->julio ?? '') == 'media' ? 'selected' : '' }} value="media">Media
            </option>
            <option {{ ($comportamientoVentas->julio ?? '') == 'baja' ? 'selected' : '' }} value="baja">Baja
            </option>
        </select class="form-select">
    </div>

    <div class="comportamiento-mes"> <label class="form-label">Agosto:</label>
        <select class="form-select" id="mes8" name="mes8" onchange="calcularTotal()">
            <option {{ ($comportamientoVentas->agosto ?? '') == 'alta' ? 'selected' : '' }} value="alta">Alta
            </option>
            <option {{ ($comportamientoVentas->agosto ?? '') == 'media' ? 'selected' : '' }} value="media">Media
            </option>
            <option {{ ($comportamientoVentas->agosto ?? '') == 'baja' ? 'selected' : '' }} value="baja">Baja
            </option>
        </select class="form-select">
    </div>

    <div class="comportamiento-mes"> <label class="form-label">Septiembre:</label>
        <select class="form-select" id="mes9" name="mes9" onchange="calcularTotal()">
            <option {{ ($comportamientoVentas->septiembre ?? '') == 'alta' ? 'selected' : '' }} value="alta">
                Alta
            </option>
            <option {{ ($comportamientoVentas->septiembre ?? '') == 'media' ? 'selected' : '' }} value="media">
                Media</option>
            <option {{ ($comportamientoVentas->septiembre ?? '') == 'baja' ? 'selected' : '' }} value="baja">
                Baja
            </option>
        </select class="form-select">
    </div>

    <div class="comportamiento-mes"> <label class="form-label">Octubre:</label>
        <select class="form-select" id="mes10" name="mes10" onchange="calcularTotal()">
            <option {{ ($comportamientoVentas->octubre ?? '') == 'alta' ? 'selected' : '' }} value="alta">Alta
            </option>
            <option {{ ($comportamientoVentas->octubre ?? '') == 'media' ? 'selected' : '' }} value="media">Media
            </option>
            <option {{ ($comportamientoVentas->octubre ?? '') == 'baja' ? 'selected' : '' }} value="baja">Baja
            </option>
        </select class="form-select">
    </div>

    <div class="comportamiento-mes"> <label class="form-label">Noviembre:</label>
        <select class="form-select" id="mes11" name="mes11" onchange="calcularTotal()">
            <option {{ ($comportamientoVentas->noviembre ?? '') == 'alta' ? 'selected' : '' }} value="alta">Alta
            </option>
            <option {{ ($comportamientoVentas->noviembre ?? '') == 'media' ? 'selected' : '' }} value="media">
                Media</option>
            <option {{ ($comportamientoVentas->noviembre ?? '') == 'baja' ? 'selected' : '' }} value="baja">Baja
            </option>
        </select class="form-select">
    </div>

    <div class="comportamiento-mes"> <label class="form-label">Diciembre:</label>
        <select class="form-select" id="mes12" name="mes12" onchange="calcularTotal()">
            <option {{ ($comportamientoVentas->diciembre ?? '') == 'alta' ? 'selected' : '' }} value="alta">Alta
            </option>
            <option {{ ($comportamientoVentas->diciembre ?? '') == 'media' ? 'selected' : '' }} value="media">
                Media</option>
            <option {{ ($comportamientoVentas->diciembre ?? '') == 'baja' ? 'selected' : '' }} value="baja">Baja
            </option>
        </select class="form-select">
    </div>
</div>

<div class="tabla-manofactura-producto-servicios">
    <table class="table table-bordered">
        <thead>
            <tr>
                <th style="width: 60px;">
                    <button type="button" class="btn btn-primary " onclick="agregarFilaCostoProductoServico()">
                        <i class="fa fa-plus" aria-hidden="true"></i>
                    </button>
                </th>
                <th style="text-align: center; vertical-align: middle">Producto/Servicio</th>
                <th style="text-align: center; vertical-align: middle">Tipo</th>
                <th style="text-align: center; vertical-align: middle">Cantidad</th>
                <th style="text-align: center; vertical-align: middle">Unidad de Venta</th>
                <th style="text-align: center; vertical-align: middle">Frecuencia</th>
                <th style="text-align: center; vertical-align: middle">Precio Compra</th>
                <th style="text-align: center; vertical-align: middle">Precio Venta</th>
                <th style="text-align: center; vertical-align: middle">Total Compra Mensual</th>
                <th style="text-align: center; vertical-align: middle">Total Venta Mensual</th>
                <th style="text-align: center; vertical-align: middle">MUB %</th>
            </tr>
        </thead>
        <tbody class="tbody-tabla-manofactura-producto-servicios">
            @foreach ($costoProdutoServico as $item)
                <tr class="fila-costo-produto-servicio">
                    <td>
                        <button type="button" onclick="eliminarFilaCostoProductoServico(this)"
                            class="btn btn-danger ">
                            <i class="fa fa-trash" aria-hidden="true"></i>
                        </button>
                    </td>
                    <td><input type="text" class="form-control productoServicio" maxlength="200"
                            value="{{ $item->productoServicio }}"></td>
                    <td><input type="text" class="form-control tipoProductoServico" maxlength="100"
                            value="{{ $item->tipo }}"></td>
                    <td><input type="number" min="0" class="form-control cantidadProductoServicio"
                            value="{{ $item->cantidad ?? '0' }}"
                            oninput="validarInputNumber(event); calcularManufactura();"></td>
                    <td><input type="text" class="form-control unidadProductoServicio" maxlength="100"
                            value="{{ $item->unidad }}"></td>
                    <td>
                        <select class="form-select frecuenciaProductoServicio" onchange="calcularManufactura()">
                            <option {{ ($item->frecuencia ?? '') == '25' ? 'selected' : '' }} value="25">
                                Diario</option>
                            <option {{ ($item->frecuencia ?? '') == '4' ? 'selected' : '' }} value="4">
                                Semanal</option>
                            <option {{ ($item->frecuencia ?? '') == '2' ? 'selected' : '' }} value="2">
                                Quincenal</option>
                            <option {{ ($item->frecuencia ?? '') == '1' ? 'selected' : '' }} value="1">
                                Mensual</option>
                            <option {{ ($item->frecuencia ?? '') == '0.5' ? 'selected' : '' }} value="0.5">
                                Bimestral</option>
                            <option {{ ($item->frecuencia ?? '') == '3' ? 'selected' : '' }} value="3">
                                Trimestral</option>
                            <option {{ ($item->frecuencia ?? '') == '6' ? 'selected' : '' }} value="6">
                                Semestral</option>
                        </select>
                    </td>
                    <td><input type="number" min="0" class="form-control  precioCompra"
                            value="{{ $item->precioCompra ?? '0' }}"
                            oninput="validarInputNumber(event); calcularManufactura();"></td>
                    <td><input type="number" min="0" class="form-control precionVenta "
                            value="{{ $item->precioVenta ?? '0' }}"
                            oninput="validarInputNumber(event); calcularManufactura();"></td>
                    <td><input style="border: none; padding: 0px; text-overflow: ellipsis;" readonly type="text"
                            class="form-control totalCompra"></td>
                    <td><input style="border: none; padding: 0px; text-overflow: ellipsis;" readonly type="text"
                            class="form-control totalVenta"></td>
                    <td><input style="border: none; padding: 0px; text-overflow: ellipsis;" readonly type="text"
                            class="form-control mub"></td>
                </tr>
            @endforeach

            <tr class="totales-manofactura-producto-servicios">
                <td colspan="7"></td>
                <td><b>Totales:</b></td>
                <td><input style="border: none; padding: 0px; text-overflow: ellipsis;" type="text"
                        class="form-control" readonly id="totCom"></td>
                <td><input style="border: none; padding: 0px; text-overflow: ellipsis;" type="text"
                        class="form-control" readonly id="totVen"></td>
                <td><input style="border: none; padding: 0px; text-overflow: ellipsis;" type="text"
                        class="form-control" readonly id="mubTotal"></td>
            </tr>
        </tbody>
    </table>

</div>

<table class="table table-bordered tabla-ventas-costos-mensuales">
    <thead>
        <tr>
            <th style="text-align: center; vertical-align: middle">Mes</th>
            <th style="text-align: center; vertical-align: middle">Ventas Mensuales</th>
            <th style="text-align: center; vertical-align: middle">Costos de Producción Mensuales</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>Enero:</td>
            <td><input value='0' type="text" class="form-control" readonly id="venMen1"></td>
            <td><input value='0' type="text" class="form-control" readonly id="comMen1"></td>
        </tr>
        <tr>
            <td>Febrero:</td>
            <td><input value='0' type="text" class="form-control" readonly id="venMen2"></td>
            <td><input value='0' type="text" class="form-control" readonly id="comMen2"></td>
        </tr>
        <tr>
            <td>Marzo:</td>
            <td><input value='0' type="text" class="form-control" readonly id="venMen3"></td>
            <td><input value='0' type="text" class="form-control" readonly id="comMen3"></td>
        </tr>
        <tr>
            <td>Abril:</td>
            <td><input value='0' type="text" class="form-control" readonly id="venMen4"></td>
            <td><input value='0' type="text" class="form-control" readonly id="comMen4"></td>
        </tr>
        <tr>
            <td>Mayo:</td>
            <td><input value='0' type="text" class="form-control" readonly id="venMen5"></td>
            <td><input value='0' type="text" class="form-control" readonly id="comMen5"></td>
        </tr>
        <tr>
            <td>Junio:</td>
            <td><input value='0' type="text" class="form-control" readonly id="venMen6"></td>
            <td><input value='0' type="text" class="form-control" readonly id="comMen6"></td>
        </tr>
        <tr>
            <td>Julio:</td>
            <td><input value='0' type="text" class="form-control" readonly id="venMen7"></td>
            <td><input value='0' type="text" class="form-control" readonly id="comMen7"></td>
        </tr>
        <tr>
            <td>Agosto:</td>
            <td><input value='0' type="text" class="form-control" readonly id="venMen8"></td>
            <td><input value='0' type="text" class="form-control" readonly id="comMen8"></td>
        </tr>
        <tr>
            <td>Septiembre:</td>
            <td><input value='0' type="text" class="form-control" readonly id="venMen9"></td>
            <td><input value='0' type="text" class="form-control" readonly id="comMen9"></td>
        </tr>
        <tr>
            <td>Octubre:</td>
            <td><input value='0' type="text" class="form-control" readonly id="venMen10"></td>
            <td><input value='0' type="text" class="form-control" readonly id="comMen10"></td>
        </tr>
        <tr>
            <td>Novimebre:</td>
            <td><input value='0' type="text" class="form-control" readonly id="venMen11"></td>
            <td><input value='0' type="text" class="form-control" readonly id="comMen11"></td>
        </tr>
        <tr>
            <td>Diciembre:</td>
            <td><input value='0' type="text" class="form-control" readonly id="venMen12"></td>
            <td><input value='0' type="text" class="form-control" readonly id="comMen12"></td>
        </tr>
        <tr>
            <td> <b> Anual: </b> </td>
            <td><input value='0' type="text" class="form-control" readonly id="venAnu"></td>
            <td><input value='0' type="text" class="form-control" readonly id="comAnu"></td>
        </tr>
    </tbody>
</table>
