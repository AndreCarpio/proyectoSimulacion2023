<p class="titulo-seccion"> Presupuesto Resumen</p>

<table class="table table-bordered tabla-presupuesto-resumen-ap-propio  ">
    <thead>
        <tr>
            <th style="width: 5%" scope="col"></th>
            <th style="text-align: center; vertical-align: middle; " scope="col">Aporte Propio</th>
            <th style="text-align: center; vertical-align: middle; " scope="col">Monto</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td style="text-align: center;vertical-align: middle;" rowspan="4">K.O</td>
            <td>Efectivo</td>
            <td style="text-align: center" class="efectivo">0.00</td>
        </tr>
        <tr>
            <td>Mano de Obra del Emprendedor</td>
            <td style="text-align: center" class="mano-obra-emprendedor">0.00</td>
        </tr>
        <tr>
            <td>Materia Prima, Insumos y/o Animales de Engorde</td>
            <td style="text-align: center" class="materia-prima">0.00</td>
        </tr>
        <tr>
            <td>Requerimientos Promocionales</td>
            <td style="text-align: center" class="requerimiento-promocionales">0.00</td>
        </tr>

        <tr>
            <td style="text-align: center;vertical-align: middle;" rowspan="3">K.I</td>
            <td>Infraestructura, Terrenos y/o Plantines</td>
            <td style="text-align: center" class="infraestructura">0.00</td>
        </tr>

        <tr>
            <td>Maquinaria, Equipos, Vehículos y/o Ganado</td>
            <td style="text-align: center" class="maquinaria">0.00</td>
        </tr>

        <tr>
            <td>Requerimientos Legales</td>
            <td style="text-align: center" class="requerimientos-legales">0.00</td>
        </tr>

        <tr>
            <td></td>
            <th style="text-align: right;">Total</th>
            <th style="text-align: center;" class="total">0.00</th>
        </tr>

    </tbody>
</table>

<table class="table table-bordered tabla-presupuesto-resumen-plan-inversion  ">
    <thead>
        <tr>
            <th style="width: 5%" scope="col"></th>
            <th style="text-align: center; vertical-align: middle; " scope="col">Plan de Inversion</th>
            <th style="text-align: center; vertical-align: middle; width: 10%;" scope="col">Monto</th>
            <th style="text-align: center; vertical-align: middle; width: 10%;" scope="col">Ap. Propio Efectivo</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td style="text-align: center;vertical-align: middle;" rowspan="3">K.O</td>
            <td>Gastos Operativos</td>
            <td class="gastos-operativos" style="text-align: center">0.00</td>
            <td class="efectivo-gastos-operativos ">
                <input type="number" oninput="validarInputNumber(event);actualizaSubTotalPlaInversionApPropio();" class="form-control "
                    name="apGastosOperativos" value="{{ $presupuestoTotal ->apGastosOperativos ?? '0' }}">
            </td>
        </tr>
        <tr>
            <td>Materia Prima, Insumos y/o Animales de Engorder</td>
            <td class="materia-prima" style="text-align: center">0.00</td>
            <td class="efectivo-materia-prima">
                <input type="number" oninput="validarInputNumber(event);actualizaSubTotalPlaInversionApPropio();" class="form-control " name="apMateriaPrima"
                value="{{ $presupuestoTotal ->apMateriaPrima ?? '0' }}">
            </td>
        </tr>

        <tr>
            <td>Requerimientos Promocionales</td>
            <td class="requerimiento-promocionales" style="text-align: center">0.00</td>
            <td class="efectivo-requerimiento-promocionales">
                <input type="number" oninput="validarInputNumber(event);actualizaSubTotalPlaInversionApPropio();" class="form-control "
                    name="apRquePromocionales" value="{{ $presupuestoTotal ->apRquePromocionales ?? '0' }}">
            </td>
        </tr>

        <tr>
            <td style="text-align: center;vertical-align: middle;" rowspan="3">K.I</td>
            <td>Infraestructura, Terrenos y/o Plantines</td>
            <td class="infraestructura" style="text-align: center">0.00</td>
            <td class="efectivo-infraestructura">
                <input type="number" oninput="validarInputNumber(event);actualizaSubTotalPlaInversionApPropio();" class="form-control " name="apInfraestructura"
                value="{{ $presupuestoTotal ->apInfraestructura ?? '0' }}">
            </td>
        </tr>

        <tr>
            <td>Maquinaria, Equipos, Vehículos y/o Ganado</td>
            <td class="maquinaria" style="text-align: center">0.00</td>
            <td class="efectivo-maquinaria">
                <input type="number" oninput="validarInputNumber(event);actualizaSubTotalPlaInversionApPropio();" class="form-control " name="apMaquinaria"
                value="{{ $presupuestoTotal ->apMaquinaria ?? '0' }}">
            </td>
        </tr>

        <tr>
            <td>Requerimientos Legales</td>
            <td class="requerimientos-legales" style="text-align: center">0.00</td>
            <td class="efectivo-requerimientos-legales">
                <input type="number" oninput="validarInputNumber(event);actualizaSubTotalPlaInversionApPropio();" class="form-control " name="apRequeLegales"
                value="{{ $presupuestoTotal ->apRequeLegales ?? '0' }}">
            </td>
        </tr>

        <tr>
            <td></td>
            <th style="text-align: right;">Total</th>
            <th style="text-align: center;" class="total">0.00</th>
            <th style="text-align: center;" class="efectivo-total">0.00</th>
        </tr>

    </tbody>
</table>

<div style="display: flex; flex-direction: row; gap: 20px;">



    <table class="table table-bordered table-resumen-total-proyecto ">
        <tbody>
            <tr>
                <th style="width: 50%">TOTAL PROYECTO</th>
                <td style="width: 50%" class="total-proyecto">0.00</td>
            </tr>
            <tr>
                <th style="width: 50%">APORTE PROPIO</th>
                <td style="width: 50%" class="aporte-propio">0.00</td>
            </tr>
            <tr>
                <th style="width: 50%">% APORTE PROPIO</th>
                <td style="width: 50%" class="porcentaje-aporte-propipo">0.00%</td>
            </tr>

            <tr>
                <th class="mensaje" colspan="2">APORTE PROPIO PARA GARANTIA HIPOTECARIA DEBE SER 10% Y PARA OTRA
                    GARANTIA 20%</th>
            </tr>

        </tbody>
    </table>

    <table class="table table-bordered table-desembolsos ">
        <tr>
            <th style="width: 50%">MONTO A FINANCIAR</th>
            <td style="width: 50%" class="monto-financiar">0.00</td>
        </tr>
        <tr>
            <th style="width: 50%">Primer Desembolso</th>
            <td style="width: 50%">
                <input class="input-primer-desembolso form-control" type="number"
                    oninput="validarInputNumber(event);actualizarDesembolso();" name="primerDesembolso" value="{{ $presupuestoTotal ->primerDesembolso ?? '0' }}">
            </td>
        </tr>

        <tr>
            <th style="width: 50%">Segundo Desembolso</th>
            <td style="width: 50%">
                <input class="input-segundo-desembolso form-control" type="number"
                    oninput="validarInputNumber(event);actualizarDesembolso();" name="segundoDesembolso" value="{{ $presupuestoTotal ->segundoDesembolso ?? '0' }}">
            </td>
        </tr>
        <tr>
            <th class="mensaje" colspan="2">REVISAR 1ER Y 2DO DESEMBOLSO</th>
        </tr>
    </table>

</div>
