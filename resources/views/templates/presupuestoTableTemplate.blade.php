<table class="table table-bordered tabla-tipo2 {{ $nombreTabla }}">
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

