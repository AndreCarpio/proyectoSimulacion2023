<table class="table table-bordered tabla-tipo2 {{ $nombreTabla }}">
    <thead>
        <tr>
            <th class="tabla-tipo2-celda-pequenia" scope="col">CANTIDAD </th>
            <th class="tabla-tipo2-celda-pequenia" scope="col">UNIDAD </th>
            <th class="input-grande" scope="col">DETALLE</th>
            <th class="tabla-tipo2-celda-pequenia" scope="col">APORTE PROPIO (BS)</th>
            <th class="tabla-tipo2-celda-pequenia" scope="col">SE INVERTIRÁ (BS)</th>
            <th class="tabla-tipo2-celda-btn" scope="col">
                <button type="button" class="btn btn-primary "
                    onclick="agregarFilaTablaCapital(this,'{{ $tipo }}');"><i class="fa fa-plus"
                        aria-hidden="true"></i>
                </button>
            </th>

        </tr>
    </thead>
    <tbody>


        @foreach ($capital as $item)
            @if ($item->tipo == $tipo)
                <tr class="fila-contenido-tabla-capital {{ $tipo }}">
                    <th style="vertical-align: middle">
                        <input type="number" class="form-control input-cantidad" type="text"
                        oninput="validarInputNumber(event);"   value="{{ $item->cantidad }}">
                    </th>
                    <th style="vertical-align: middle">
                        <input class="form-control input-unidad" type="text" maxlength="100" value="{{ $item->unidad }}">
                    </th>
                    <th style="vertical-align: middle">
                        <input class="form-control input-detalle" type="text" maxlength="200" value="{{ $item->detalle }}">
                    </th>
                    <td>
                        <input type="number" oninput="validarInputNumber(event); actualizarTotalOperativoInversion();"
                            class="form-control input-aporte-propio" value="{{ $item->aportePropio }}">
                    </td>
                    <td>
                        <input type="number" oninput="validarInputNumber(event); actualizarTotalOperativoInversion();"
                            class="form-control input-inversion" value="{{ $item->seInvertira }}">
                    </td>
                    <th>
                        <button type="button" onclick="eliminarFilaTablaCapital(this)" type="text"
                            class="btn btn-danger ">
                            <i class="fa fa-trash" aria-hidden="true"></i>
                        </button>
                    </th>
                </tr>
            @endif
        @endforeach


    </tbody>
</table>
