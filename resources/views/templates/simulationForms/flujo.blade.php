<div class="seccion-analisis-finaciero">

    <div class="seccion-costos-operativos">
        <p style="text-align: center" class="titulo-seccion">Costos Operativos</p>
        <div class="contenedor-dato-costos-opetativos">
            <label class="form-label">Impuestos :</label>
            <input class="form-control" type="number" id="impuestos" min="0"
                value="{{ $analisisFinancieroModel->impuestos ?? '0' }}" name="impuestos"
                oninput="validarInputNumberCostos(event); sumarOperativo()">
        </div>

        <div class="contenedor-dato-costos-opetativos">
            <label class="form-label">Alimentación :</label>
            <input class="form-control" type="number" id="alimentacion" min="0"
                value="{{ $analisisFinancieroModel->alimentacion ?? '0' }}" name="alimentacion"
                oninput="validarInputNumberCostos(event); sumarOperativo();">
        </div>

        <div class="contenedor-dato-costos-opetativos">
            <label class="form-label">Servicio de Luz :</label>
            <input class="form-control" type="number" id="servicioLuz" min="0"
                value="{{ $analisisFinancieroModel->servicioLuz ?? '0' }}" name="servicioLuz"
                oninput="validarInputNumberCostos(event); sumarOperativo();">
        </div>

        <div class="contenedor-dato-costos-opetativos">
            <label class="form-label">Servicio de Agua :</label>
            <input class="form-control" type="number" id="servicioAgua" min="0"
                value="{{ $analisisFinancieroModel->servicioAgua ?? '0' }}" name="servicioAgua"
                oninput="validarInputNumberCostos(event); sumarOperativo();">
        </div>

        <div class="contenedor-dato-costos-opetativos">
            <label class="form-label">Servicio de Gas :</label>
            <input class="form-control" type="number" id="servicioGas" min="0"
                value="{{ $analisisFinancieroModel->servicioGas ?? '0' }}" name="servicioGas"
                oninput="validarInputNumberCostos(event); sumarOperativo();">
        </div>

        <div class="contenedor-dato-costos-opetativos">
            <label class="form-label">Servicio de Telefono :</label>
            <input class="form-control" type="number" id="servicioTel" min="0"
                value="{{ $analisisFinancieroModel->servicioTelefono ?? '0' }}" name="servicioTelefono"
                oninput="validarInputNumberCostos(event); sumarOperativo();">
        </div>

        <div class="contenedor-dato-costos-opetativos">
            <label class="form-label">Servicio de Internet :</label>
            <input class="form-control" type="number" id="servicioInt" min="0"
                value="{{ $analisisFinancieroModel->servicioInternet ?? '0' }}" name="servicioInternet"
                oninput="validarInputNumberCostos(event); sumarOperativo();">
        </div>

        <div class="contenedor-dato-costos-opetativos">
            <label class="form-label">Servicio de Alquiler :</label>
            <input class="form-control" type="number" id="servicioAlq" min="0"
                value="{{ $analisisFinancieroModel->servicioAlquiler ?? '0' }}" name="servicioAlquiler"
                oninput="validarInputNumberCostos(event); sumarOperativo();">
        </div>

        <div class="contenedor-dato-costos-opetativos">
            <label class="form-label">Servicio de transporte :</label>
            <input class="form-control" type="number" id="servicioTra" min="0"
                value="{{ $analisisFinancieroModel->ServicioTransporte ?? '0' }}" name="ServicioTransporte"
                oninput="validarInputNumberCostos(event); sumarOperativo();">
        </div>

        <div class="contenedor-dato-costos-opetativos">
            <label class="form-label">Material de Escritorio :</label>
            <input class="form-control" type="number" id="escritorio" min="0"
                value="{{ $analisisFinancieroModel->materialEscritorio ?? '0' }}" name="materialEscritorio"
                oninput="validarInputNumberCostos(event); sumarOperativo();">
        </div>

        <div class="contenedor-dato-costos-opetativos">
            <label class="form-label">Pago a Empleados :</label>
            <input class="form-control" type="number" id="empleados" min="0"
                value="{{ $analisisFinancieroModel->pagoEmpleados ?? '0' }}" name="pagoEmpleados"
                oninput="validarInputNumberCostos(event); sumarOperativo();">
        </div>

        <div class="contenedor-dato-costos-opetativos">
            <label class="form-label">Promoción :</label>
            <input class="form-control" type="number" id="promocion" min="0"
                value="{{ $analisisFinancieroModel->promocion ?? '0' }}" name="promocion"
                oninput="validarInputNumberCostos(event); sumarOperativo();">
        </div>

        <div class="contenedor-dato-costos-opetativos">
            <label class="form-label">Vestimenta :</label>
            <input class="form-control" type="number" id="vestimenta" min="0"
                value="{{ $analisisFinancieroModel->vestimenta ?? '0' }}" name="vestimenta"
                oninput="validarInputNumberCostos(event); sumarOperativo();">
        </div>

        <div class="contenedor-dato-costos-opetativos">
            <label class="form-label">Salud :</label>
            <input class="form-control" type="number" id="salud" min="0"
                value="{{ $analisisFinancieroModel->salud ?? '0' }}" name="salud"
                oninput="validarInputNumberCostos(event); sumarOperativo();">
        </div>

        <div class="contenedor-dato-costos-opetativos">
            <label class="form-label">Otros :</label>
            <input class="form-control" type="number" id="otros" min="0"
                value="{{ $analisisFinancieroModel->otros ?? '0' }}" name="otros"
                oninput="validarInputNumberCostos(event); sumarOperativo();">
        </div>
        <div class="contenedor-dato-costos-opetativos">
            <label class="form-label">TOTAL :</label>
            <input class="form-control" style="border: none;" type="number" id="totalOperativo" min="0" readonly>
        </div>
    </div>

    <div class="seccion-utilidad-credito">

        <div class="seccion-utilidad">
            <p style="text-align: center" class="titulo-seccion">Tabla De Utilidad</p>

            <table class="table table-bordered">
                <tbody>
                    <tr>
                        <td style="vertical-align: middle;padding-left: 15px;">(+)Ingresos Totales:</td>
                        <td><input style="border: none;" readonly class="form-control" type="text"
                                id="ingresosTotales"></td>
                    </tr>
                    <tr>
                        <td style="vertical-align: middle;padding-left: 15px;">(-)Costos Directos:</td>
                        <td><input style="border: none;" readonly class="form-control" type="text"
                                id="costosDirectos"></td>
                    </tr>
                    <tr>
                        <td style="vertical-align: middle;padding-left: 15px;">(=)Utilidad Bruta:</td>
                        <td><input style="border: none;" readonly class="form-control" type="text"
                                id="utilidadBruta"></td>
                    </tr>
                    <tr>
                        <td style="vertical-align: middle;padding-left: 15px;">(-)Costo Operativo:</td>
                        <td><input style="border: none;" readonly class="form-control" type="text"
                                id="costoOperativo"></td>
                    </tr>
                    <tr>
                        <td style="vertical-align: middle;padding-left: 15px;">(=)Utilidad Operativa:</td>
                        <td><input style="border: none;" readonly class="form-control" type="text"
                                id="utilidadOperativa"></td>
                    </tr>
                </tbody>
            </table>

        </div>

        <div class="seccion-credito">

            <p style="text-align: center" class="titulo-seccion">Datos Del Credito</p>

            <div class="contenedor-dato-credito">
                <label class="form-label">Monto Financiar : </label>
                <input class="form-control" style="border: none;" readonly type="number" id="monto"
                    min="0" value="{{ $analisisFinancieroModel->monto ?? '0' }}"
                    oninput="validarInputNumber(event); calcularFlujo()" name="montoAnlisisFinanciero">
            </div>

            <div class="contenedor-dato-credito">
                <label class="form-label">Frecuencia: </label>
                <select class="form-select" id="frecuenciaCredito" oninput="calcularFlujo()" name="frecuencia">
                    <option {{ ($analisisFinancieroModel->frecuencia ?? '') == '30' ? 'selected' : '' }}
                        value="30">Mensual</option>
                    <option {{ ($analisisFinancieroModel->frecuencia ?? '') == '60' ? 'selected' : '' }}
                        value="60">Bimestral</option>
                    <option {{ ($analisisFinancieroModel->frecuencia ?? '') == '90' ? 'selected' : '' }}
                        value="90">Trimestral</option>
                    <option {{ ($analisisFinancieroModel->frecuencia ?? '') == '120' ? 'selected' : '' }}
                        value="120">Cuatrimestral</option>
                    <option {{ ($analisisFinancieroModel->frecuencia ?? '') == '180' ? 'selected' : '' }}
                        value="180">Semestral</option>
                    <option {{ ($analisisFinancieroModel->frecuencia ?? '') == '360' ? 'selected' : '' }}
                        value="360">Anual</option>
                </select>
            </div>
            <div class="contenedor-dato-credito">
                <label class="form-label">Poliza: </label>
                <input class="form-control" type="number" id="poliza" min="0"
                    value="{{ $analisisFinancieroModel->poliza ?? '0.395' }}"
                    oninput="validarInputNumber(event); calcularFlujo()" name="poliza">
            </div>


            <div class="contenedor-dato-credito">
                <label class="form-label">Plazo (meses): </label>
                <input class="form-control" type="number" id="plazo" min="0" name="plazoMeses"
                    value="{{ $analisisFinancieroModel->plazoMeses ?? '0' }}"
                    oninput="validarInputNumber(event); calcularFlujo()">
            </div>


            <div class="contenedor-dato-credito">
                <label class="form-label">Tipo de Cuota: </label>
                <select class="form-select" id="tipoCuota" oninput="calcularFlujo()" name="tipoCuota">
                    <option {{ ($analisisFinancieroModel->tipoCuota ?? '') == '0' ? 'selected' : '' }} value="0">
                        Cuota Fija</option>
                    <option {{ ($analisisFinancieroModel->tipoCuota ?? '') == '1' ? 'selected' : '' }} value="1">
                        Cuota Variable</option>
                </select>
            </div>

            <div class="contenedor-dato-credito">
                <label class="form-label">Actividad: </label>
                <select class="form-select" id="actividad" oninput="calcularFlujo()" name="actividad">
                    <option {{ ($analisisFinancieroModel->actividad ?? '') == '0.07' ? 'selected' : '' }}
                        value="0.07">Productiva</option>
                    <option {{ ($analisisFinancieroModel->actividad ?? '') == '0.115' ? 'selected' : '' }}
                        value="0.115">Servicios</option>
                </select>
            </div>

            <div class="contenedor-dato-credito">
                <label class="form-label">Tasa de interes (%): </label>
                <input class="form-control" style="border: none;" readonly type="number" id="interes"
                    min="0" oninput="validarInputNumber(event); calcularFlujo()">
            </div>
        </div>

    </div>
</div>

<p class="titulo-seccion">Flujo</p>

<div class="contenedor-tabla-flujo">
    <table class="table table-bordered">
        <thead>
            <tr>
                <td style="text-align: center;"></td>
                <td style="text-align: center;">Inicial</td>
                <td style="text-align: center;">Enero</td>
                <td style="text-align: center;">Febrero</td>
                <td style="text-align: center;">Marzo</td>
                <td style="text-align: center;">Abril</td>
                <td style="text-align: center;">Mayo</td>
                <td style="text-align: center;">Junio</td>
                <td style="text-align: center;">Julio</td>
                <td style="text-align: center;">Agosto</td>
                <td style="text-align: center;">Septiembre</td>
                <td style="text-align: center;">Octubre</td>
                <td style="text-align: center;">Noviembre</td>
                <td style="text-align: center;">Diciembre</td>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Inversiones</td>
                <td> <input class="form-control  input-tabla-flujo" type="text" id="inversion0"> </td>
                <td> <input class="form-control  input-tabla-flujo" type="text" id="inversion1"> </td>
                <td> <input class="form-control  input-tabla-flujo" type="text" id="inversion2"> </td>
                <td> <input class="form-control  input-tabla-flujo" type="text" id="inversion3"> </td>
                <td> <input class="form-control  input-tabla-flujo" type="text" id="inversion4"> </td>
                <td> <input class="form-control  input-tabla-flujo" type="text" id="inversion5"> </td>
                <td> <input class="form-control  input-tabla-flujo" type="text" id="inversion6"> </td>
                <td> <input class="form-control  input-tabla-flujo" type="text" id="inversion7"> </td>
                <td> <input class="form-control  input-tabla-flujo" type="text" id="inversion8"> </td>
                <td> <input class="form-control  input-tabla-flujo" type="text" id="inversion9"> </td>
                <td> <input class="form-control  input-tabla-flujo" type="text" id="inversion10"> </td>
                <td> <input class="form-control  input-tabla-flujo" type="text" id="inversion11"> </td>
                <td> <input class="form-control  input-tabla-flujo" type="text" id="inversion12"> </td>
                <td> <input class="form-control  input-tabla-flujo" type="text" id="inversion13"> </td>
            </tr>
            <tr>
                <td>Saldo Inicial</td>
                <td> <input class="form-control  input-tabla-flujo" type="text" id="saldoInicial0"> </td>
                <td> <input class="form-control  input-tabla-flujo" type="text" id="saldoInicial1"> </td>
                <td> <input class="form-control  input-tabla-flujo" type="text" id="saldoInicial2"> </td>
                <td> <input class="form-control  input-tabla-flujo" type="text" id="saldoInicial3"> </td>
                <td> <input class="form-control  input-tabla-flujo" type="text" id="saldoInicial4"> </td>
                <td> <input class="form-control  input-tabla-flujo" type="text" id="saldoInicial5"> </td>
                <td> <input class="form-control  input-tabla-flujo" type="text" id="saldoInicial6"> </td>
                <td> <input class="form-control  input-tabla-flujo" type="text" id="saldoInicial7"> </td>
                <td> <input class="form-control  input-tabla-flujo" type="text" id="saldoInicial8"> </td>
                <td> <input class="form-control  input-tabla-flujo" type="text" id="saldoInicial9"> </td>
                <td> <input class="form-control  input-tabla-flujo" type="text" id="saldoInicial10"> </td>
                <td> <input class="form-control  input-tabla-flujo" type="text" id="saldoInicial11"> </td>
                <td> <input class="form-control  input-tabla-flujo" type="text" id="saldoInicial12"> </td>
                <td> <input class="form-control  input-tabla-flujo" type="text" id="saldoInicial13"> </td>
            </tr>
            <tr>
                <td>Ingresos</td>
                <td> <input class="form-control  input-tabla-flujo" type="text" id="ingresos0"> </td>
                <td> <input class="form-control  input-tabla-flujo" type="text" id="ingresos1"> </td>
                <td> <input class="form-control  input-tabla-flujo" type="text" id="ingresos2"> </td>
                <td> <input class="form-control  input-tabla-flujo" type="text" id="ingresos3"> </td>
                <td> <input class="form-control  input-tabla-flujo" type="text" id="ingresos4"> </td>
                <td> <input class="form-control  input-tabla-flujo" type="text" id="ingresos5"> </td>
                <td> <input class="form-control  input-tabla-flujo" type="text" id="ingresos6"> </td>
                <td> <input class="form-control  input-tabla-flujo" type="text" id="ingresos7"> </td>
                <td> <input class="form-control  input-tabla-flujo" type="text" id="ingresos8"> </td>
                <td> <input class="form-control  input-tabla-flujo" type="text" id="ingresos9"> </td>
                <td> <input class="form-control  input-tabla-flujo" type="text" id="ingresos10"> </td>
                <td> <input class="form-control  input-tabla-flujo" type="text" id="ingresos11"> </td>
                <td> <input class="form-control  input-tabla-flujo" type="text" id="ingresos12"> </td>
                <td> <input class="form-control  input-tabla-flujo" type="text" id="ingresos13"> </td>
            </tr>
            <tr>
                <td>Costos de producción</td>
                <td> <input class="form-control  input-tabla-flujo" type="text" id="costosProduccion0"> </td>
                <td> <input class="form-control  input-tabla-flujo" type="text" id="costosProduccion1"> </td>
                <td> <input class="form-control  input-tabla-flujo" type="text" id="costosProduccion2"> </td>
                <td> <input class="form-control  input-tabla-flujo" type="text" id="costosProduccion3"> </td>
                <td> <input class="form-control  input-tabla-flujo" type="text" id="costosProduccion4"> </td>
                <td> <input class="form-control  input-tabla-flujo" type="text" id="costosProduccion5"> </td>
                <td> <input class="form-control  input-tabla-flujo" type="text" id="costosProduccion6"> </td>
                <td> <input class="form-control  input-tabla-flujo" type="text" id="costosProduccion7"> </td>
                <td> <input class="form-control  input-tabla-flujo" type="text" id="costosProduccion8"> </td>
                <td> <input class="form-control  input-tabla-flujo" type="text" id="costosProduccion9"> </td>
                <td> <input class="form-control  input-tabla-flujo" type="text" id="costosProduccion10"> </td>
                <td> <input class="form-control  input-tabla-flujo" type="text" id="costosProduccion11"> </td>
                <td> <input class="form-control  input-tabla-flujo" type="text" id="costosProduccion12"> </td>
                <td> <input class="form-control  input-tabla-flujo" type="text" id="costosProduccion13"> </td>
            </tr>
            <tr>
                <td>Utilidad Bruta</td>
                <td> <input class="form-control  input-tabla-flujo" type="text" id="utilidadBruta0"> </td>
                <td> <input class="form-control  input-tabla-flujo" type="text" id="utilidadBruta1"> </td>
                <td> <input class="form-control  input-tabla-flujo" type="text" id="utilidadBruta2"> </td>
                <td> <input class="form-control  input-tabla-flujo" type="text" id="utilidadBruta3"> </td>
                <td> <input class="form-control  input-tabla-flujo" type="text" id="utilidadBruta4"> </td>
                <td> <input class="form-control  input-tabla-flujo" type="text" id="utilidadBruta5"> </td>
                <td> <input class="form-control  input-tabla-flujo" type="text" id="utilidadBruta6"> </td>
                <td> <input class="form-control  input-tabla-flujo" type="text" id="utilidadBruta7"> </td>
                <td> <input class="form-control  input-tabla-flujo" type="text" id="utilidadBruta8"> </td>
                <td> <input class="form-control  input-tabla-flujo" type="text" id="utilidadBruta9"> </td>
                <td> <input class="form-control  input-tabla-flujo" type="text" id="utilidadBruta10"> </td>
                <td> <input class="form-control  input-tabla-flujo" type="text" id="utilidadBruta11"> </td>
                <td> <input class="form-control  input-tabla-flujo" type="text" id="utilidadBruta12"> </td>
                <td> <input class="form-control  input-tabla-flujo" type="text" id="utilidadBruta13"> </td>
            </tr>
            <tr>
                <td>Costos Fijos</td>
                <td> <input class="form-control  input-tabla-flujo" type="text" id="costosFijos0"> </td>
                <td> <input class="form-control  input-tabla-flujo" type="text" id="costosFijos1"> </td>
                <td> <input class="form-control  input-tabla-flujo" type="text" id="costosFijos2"> </td>
                <td> <input class="form-control  input-tabla-flujo" type="text" id="costosFijos3"> </td>
                <td> <input class="form-control  input-tabla-flujo" type="text" id="costosFijos4"> </td>
                <td> <input class="form-control  input-tabla-flujo" type="text" id="costosFijos5"> </td>
                <td> <input class="form-control  input-tabla-flujo" type="text" id="costosFijos6"> </td>
                <td> <input class="form-control  input-tabla-flujo" type="text" id="costosFijos7"> </td>
                <td> <input class="form-control  input-tabla-flujo" type="text" id="costosFijos8"> </td>
                <td> <input class="form-control  input-tabla-flujo" type="text" id="costosFijos9"> </td>
                <td> <input class="form-control  input-tabla-flujo" type="text" id="costosFijos10"> </td>
                <td> <input class="form-control  input-tabla-flujo" type="text" id="costosFijos11"> </td>
                <td> <input class="form-control  input-tabla-flujo" type="text" id="costosFijos12"> </td>
                <td> <input class="form-control  input-tabla-flujo" type="text" id="costosFijos13"> </td>
            </tr>
            <tr>
                <td>Utilidad Neta</td>
                <td> <input class="form-control  input-tabla-flujo" type="text" id="utilidadNeta0"> </td>
                <td> <input class="form-control  input-tabla-flujo" type="text" id="utilidadNeta1"> </td>
                <td> <input class="form-control  input-tabla-flujo" type="text" id="utilidadNeta2"> </td>
                <td> <input class="form-control  input-tabla-flujo" type="text" id="utilidadNeta3"> </td>
                <td> <input class="form-control  input-tabla-flujo" type="text" id="utilidadNeta4"> </td>
                <td> <input class="form-control  input-tabla-flujo" type="text" id="utilidadNeta5"> </td>
                <td> <input class="form-control  input-tabla-flujo" type="text" id="utilidadNeta6"> </td>
                <td> <input class="form-control  input-tabla-flujo" type="text" id="utilidadNeta7"> </td>
                <td> <input class="form-control  input-tabla-flujo" type="text" id="utilidadNeta8"> </td>
                <td> <input class="form-control  input-tabla-flujo" type="text" id="utilidadNeta9"> </td>
                <td> <input class="form-control  input-tabla-flujo" type="text" id="utilidadNeta10"> </td>
                <td> <input class="form-control  input-tabla-flujo" type="text" id="utilidadNeta11"> </td>
                <td> <input class="form-control  input-tabla-flujo" type="text" id="utilidadNeta12"> </td>
                <td> <input class="form-control  input-tabla-flujo" type="text" id="utilidadNeta13"> </td>
            </tr>
            <tr>
                <td>Cuota</td>
                <td> <input class="form-control  input-tabla-flujo" type="text" id="cuota0"> </td>
                <td> <input class="form-control  input-tabla-flujo" type="text" id="cuota1"> </td>
                <td> <input class="form-control  input-tabla-flujo" type="text" id="cuota2"> </td>
                <td> <input class="form-control  input-tabla-flujo" type="text" id="cuota3"> </td>
                <td> <input class="form-control  input-tabla-flujo" type="text" id="cuota4"> </td>
                <td> <input class="form-control  input-tabla-flujo" type="text" id="cuota5"> </td>
                <td> <input class="form-control  input-tabla-flujo" type="text" id="cuota6"> </td>
                <td> <input class="form-control  input-tabla-flujo" type="text" id="cuota7"> </td>
                <td> <input class="form-control  input-tabla-flujo" type="text" id="cuota8"> </td>
                <td> <input class="form-control  input-tabla-flujo" type="text" id="cuota9"> </td>
                <td> <input class="form-control  input-tabla-flujo" type="text" id="cuota10"> </td>
                <td> <input class="form-control  input-tabla-flujo" type="text" id="cuota11"> </td>
                <td> <input class="form-control  input-tabla-flujo" type="text" id="cuota12"> </td>
                <td> <input class="form-control  input-tabla-flujo" type="text" id="cuota13"> </td>
            </tr>
            <tr>
                <td>Flujo Acumulado</td>
                <td> <input class="form-control  input-tabla-flujo" type="text" id="flujoAcumulado0"> </td>
                <td> <input class="form-control  input-tabla-flujo" type="text" id="flujoAcumulado1"> </td>
                <td> <input class="form-control  input-tabla-flujo" type="text" id="flujoAcumulado2"> </td>
                <td> <input class="form-control  input-tabla-flujo" type="text" id="flujoAcumulado3"> </td>
                <td> <input class="form-control  input-tabla-flujo" type="text" id="flujoAcumulado4"> </td>
                <td> <input class="form-control  input-tabla-flujo" type="text" id="flujoAcumulado5"> </td>
                <td> <input class="form-control  input-tabla-flujo" type="text" id="flujoAcumulado6"> </td>
                <td> <input class="form-control  input-tabla-flujo" type="text" id="flujoAcumulado7"> </td>
                <td> <input class="form-control  input-tabla-flujo" type="text" id="flujoAcumulado8"> </td>
                <td> <input class="form-control  input-tabla-flujo" type="text" id="flujoAcumulado9"> </td>
                <td> <input class="form-control  input-tabla-flujo" type="text" id="flujoAcumulado10"> </td>
                <td> <input class="form-control  input-tabla-flujo" type="text" id="flujoAcumulado11"> </td>
                <td> <input class="form-control  input-tabla-flujo" type="text" id="flujoAcumulado12"> </td>
                <td> <input class="form-control  input-tabla-flujo" type="text" id="flujoAcumulado13"> </td>
            </tr>
        </tbody>
    </table>

</div>

<br>
<label class="form-label">VAN: </label>
<input type="text" id="van" value="">&nbsp;&nbsp;<b id="respuestaVAN" style="color:red"></b><br>

<label class="form-label">TIR %: </label>
<input type="text" id="tir" value="">&nbsp;&nbsp;<b id="respuestaTIR"></b>
<br>

<button id="calcularTodo" type="button" onclick="calcularFlujo()">Calcular</button>
<br>
