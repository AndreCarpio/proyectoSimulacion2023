/*------------------------------------------------  Creacion de  Objetos --------------------------------------------------- */

class ControladorTab {

    lista = [];
    tab = null;

    constructor(cotenedorSecciones, tab) {
        this.lista.push(cotenedorSecciones.querySelector('.seccion-informacion'));
        this.lista.push(cotenedorSecciones.querySelector('.seccion-presupuesto'));
        this.lista.push(cotenedorSecciones.querySelector('.seccion-presupuesto-total'));
        this.lista.push(cotenedorSecciones.querySelector('.seccion-costos'));
        this.lista.push(cotenedorSecciones.querySelector('.seccion-flujo'));
        this.tab = tab;
        this.tab.addEventListener('change', () => {
            let opcionSeleccionada = this.tab.value;
            this.mostrarSeccion(opcionSeleccionada);
        });

    }

    mostrarSeccion(seccion) {

        this.lista.forEach(element => {
            element.classList.add('oculto');
        });

        if (seccion < this.lista.length) {
            this.lista[seccion].classList.remove('oculto');
        }

    }
}

class ControladorPresupuestoTotal {

    constructor(contenedorFormSimulacion) {
        this.tablaAportePropio = contenedorFormSimulacion.querySelector(".tabla-presupuesto-resumen-ap-propio");
        this.tablaPlanInversion = contenedorFormSimulacion.querySelector(".tabla-presupuesto-resumen-plan-inversion");
        this.tablaResumenTotalPoyecto = contenedorFormSimulacion.querySelector(".table-resumen-total-proyecto");
        this.tablaDesembolsos = contenedorFormSimulacion.querySelector(".table-desembolsos");
    }
    //efectivo,manoObraEmprendedor,costosOperativos,materiaPrima,requePromocinales,infraestructura,maquinaria,requeLegales
    presupuestoModificado(datos) {
        this.tablaAportePropio.querySelector('.efectivo').innerHTML = datos.efectivo.aporte;
        this.tablaAportePropio.querySelector('.mano-obra-emprendedor').innerHTML = datos.manoObraEmprendedor.aporte;
        this.tablaAportePropio.querySelector('.materia-prima').innerHTML = datos.materiaPrima.aporte;
        this.tablaAportePropio.querySelector('.requerimiento-promocionales').innerHTML = datos.requePromocinales.aporte;
        this.tablaAportePropio.querySelector('.infraestructura').innerHTML = datos.infraestructura.aporte;
        this.tablaAportePropio.querySelector('.maquinaria').innerHTML = datos.maquinaria.aporte;
        this.tablaAportePropio.querySelector('.requerimientos-legales').innerHTML = datos.requeLegales.aporte;


        this.tablaPlanInversion.querySelector('.gastos-operativos').innerHTML = datos.costosOperativos.inversion;
        this.tablaPlanInversion.querySelector('.materia-prima').innerHTML = datos.materiaPrima.inversion;
        this.tablaPlanInversion.querySelector('.requerimiento-promocionales').innerHTML = datos.requePromocinales.inversion;
        this.tablaPlanInversion.querySelector('.infraestructura').innerHTML = datos.infraestructura.inversion;
        this.tablaPlanInversion.querySelector('.maquinaria').innerHTML = datos.maquinaria.inversion;
        this.tablaPlanInversion.querySelector('.requerimientos-legales').innerHTML = datos.requeLegales.inversion;

        let totalAportePropio = (datos.efectivo.aporte +
            datos.manoObraEmprendedor.aporte +
            datos.materiaPrima.aporte +
            datos.requePromocinales.aporte +
            datos.infraestructura.aporte +
            datos.maquinaria.aporte +
            datos.requeLegales.aporte);
        let totalPlanInversion = (datos.costosOperativos.inversion +
            datos.materiaPrima.inversion +
            datos.requePromocinales.inversion +
            datos.infraestructura.inversion +
            datos.maquinaria.inversion +
            datos.requeLegales.inversion);
        this.tablaAportePropio.querySelector('.total').innerHTML = totalAportePropio;
        this.tablaPlanInversion.querySelector('.total').innerHTML = totalPlanInversion;
        this.actualizarTablaTotalProyecto(totalAportePropio, totalPlanInversion, datos.efectivo.aporte);
        this.actualizarMontoAfinanciar(totalPlanInversion, datos.efectivo.aporte);
    }

    actualizarTablaTotalProyecto(totalAportePropio, totalPlanInversion, efectivo) {
        this.tablaResumenTotalPoyecto.querySelector('.total-proyecto').innerHTML = (totalAportePropio + totalPlanInversion - efectivo);
        this.tablaResumenTotalPoyecto.querySelector('.aporte-propio').innerHTML = totalAportePropio;
        if ((totalAportePropio + totalPlanInversion - efectivo) != 0) {
            this.tablaResumenTotalPoyecto.querySelector('.porcentaje-aporte-propipo').innerHTML = (((totalAportePropio * 100) / (totalAportePropio + totalPlanInversion - efectivo)).toFixed(2)) + '%';
        } else {
            this.tablaResumenTotalPoyecto.querySelector('.porcentaje-aporte-propipo').innerHTML = '0.00%';
        }

    }

    actualizarMontoAfinanciar(totalPlanInversion, efectivo) {
        this.tablaDesembolsos.querySelector('.monto-financiar').innerHTML = (totalPlanInversion - efectivo);
    }

}

class ControladorPresupuesto {
    contenedorFormSimulacion = null;
    constructor(contenedorFormSimulacion) {
        this.contenedorFormSimulacion = contenedorFormSimulacion;

        this.tablaEfectivo = contenedorFormSimulacion.querySelector('.tabla-presupuesto-emprendimiento');
        this.tablaManoObraEmprendedor = contenedorFormSimulacion.querySelector('.tabla-mano-obra-emprendedor');

    }

    getTotalEfectivo() {
        let inputs = this.tablaEfectivo.querySelectorAll('.monto-presupuesto-emprendimiento');
        let monto = 0;
        inputs.forEach(element => {
            monto += parseFloat(element.value);
        });
        return { aporte: monto, inversion: 0 };
    }
    getTotalManoObraEmprendedor() {
        let monto = parseFloat(this.tablaManoObraEmprendedor.querySelector('.input-aporte-propio').value);
        return { aporte: monto, inversion: 0 };
    }

    getTotalTabla(nombreTabla) {
        let tabla = this.contenedorFormSimulacion.querySelector(`${nombreTabla}`);
        if (tabla == null) {
            console.log(`no se encontro la tabla ${nombreTabla}`);
            return { aporte: 0, inversion: 0 };
        }
        let inputsAporte = tabla.querySelectorAll('.input-aporte-propio');
        let inputsInversion = tabla.querySelectorAll('.input-inversion');
        let montoAporte = 0;
        let montoInversion = 0;

        inputsAporte.forEach(element => {
            montoAporte += parseFloat(element.value);
        });

        inputsInversion.forEach(element => {
            montoInversion += parseFloat(element.value);
        });
        return { aporte: montoAporte, inversion: montoInversion };
    }
}



/*------------------------------------------------  Iniciando  Objetos --------------------------------------------------- */

var controladorTab = new ControladorTab(document.querySelector('.contenedor-formulario-simulacion'), document.querySelector('.pestaniaSimulacion select'));
var cotroladorPresupuesto = new ControladorPresupuesto(document.querySelector('.contenedor-formulario-simulacion'));
var controladorPresupuestoTotal = new ControladorPresupuestoTotal(document.querySelector('.contenedor-formulario-simulacion'));


/*------------------------------------------------  codigo plantilla form 1--------------------------------------------------- */

document.querySelector(".btn-agregar-descripcion-producto-servico").addEventListener('click', function () {

    let tbody = document.querySelector(".body-table-descripcion-producto-servico");
    let filasTbody = tbody.querySelectorAll(".fila-descripcion-producto-servico");

    let tr = document.createElement('tr');
    tr.classList.add("fila-descripcion-producto-servico");

    tr.innerHTML = ` <th class="numeracion" style="text-align: center; vertical-align: middle;" scope="row">${(filasTbody.length + 1)}</th>
                     <td>
                         <textarea spellcheck="false" class="nombre-producto-servico form-control" rows="4"></textarea>
                     </td>
                     <td>
                         <textarea spellcheck="false" class="proceso-elaboracion form-control" rows="4"></textarea>
                     </td>
                     <td>
                         <textarea spellcheck="false" class="caracteristicas form-control" rows="4"></textarea>
                     </td>
                     <td style="text-align: center; vertical-align: middle;">
                         <button onclick="eliminarFilaTablaTipo1(this)" type="text" id="" class="btn btn-danger btn-eliminar-descripcion-producto-servico">
                             <i class="fa fa-trash" aria-hidden="true"></i>
                         </button>
                     </td>`;
    tbody.appendChild(tr);
});



var inputsMontoEmprendimiento = document.querySelectorAll(".monto-presupuesto-emprendimiento");
inputsMontoEmprendimiento.forEach(element => {
    element.addEventListener("input", function (e) {
        actualizarSubTolaMontoEmprendimiento();
        let datos = {
            efectivo: cotroladorPresupuesto.getTotalEfectivo(),
            manoObraEmprendedor: cotroladorPresupuesto.getTotalManoObraEmprendedor(),
            costosOperativos: cotroladorPresupuesto.getTotalTabla('.tabla-gastos-operativos'),
            materiaPrima: cotroladorPresupuesto.getTotalTabla('.tabla-materia-prima'),
            requePromocinales: cotroladorPresupuesto.getTotalTabla('.tabla-requerimientos-promocionales'),
            infraestructura: cotroladorPresupuesto.getTotalTabla('.tabla-infraestructura'),
            maquinaria: cotroladorPresupuesto.getTotalTabla('.tabla-Maquinaria'),
            requeLegales: cotroladorPresupuesto.getTotalTabla('.tabla-requerimientos-legales'),
        }

        controladorPresupuestoTotal.presupuestoModificado(datos);
    });
});

function actualizarSubTolaMontoEmprendimiento() {
    let monto = 0;
    let m = document.querySelector('.subTotalMontoEmprendimiento');
    inputsMontoEmprendimiento.forEach(element => {
        let regexEntero = /^\d+$/;
        let regexDecimal = /^\d+(\.\d+)?$/;
        let aux = element.value;

        if (regexEntero.test(aux) || regexDecimal.test(aux)) {
            monto = parseFloat(monto) + parseFloat(aux);
        }
    });
    m.textContent = monto.toFixed(2);
}

function actualizarTotalOperativoInversion() {
    let aportePropioO = document.querySelectorAll('.seccion-capital-operativo .input-aporte-propio');
    let inversion0 = document.querySelectorAll('.seccion-capital-operativo .input-inversion');

    let aportePropioI = document.querySelectorAll('.seccion-capital-inversion .input-aporte-propio');
    let inversionI = document.querySelectorAll('.seccion-capital-inversion .input-inversion');

    let montoAporteOperativo = 0;
    let montoInversionOperativo = 0;

    let montoAporteInversion = 0;
    let montoInversionInversion = 0;

    let regexEntero = /^\d+$/;
    let regexDecimal = /^\d+(\.\d+)?$/;

    aportePropioO.forEach(element => {
        let aux = element.value;
        if (regexEntero.test(aux) || regexDecimal.test(aux)) {
            montoAporteOperativo = parseFloat(montoAporteOperativo) + parseFloat(aux);
        }

    });

    inversion0.forEach(element => {
        let aux = element.value;
        if (regexEntero.test(aux) || regexDecimal.test(aux)) {
            montoInversionOperativo = parseFloat(montoInversionOperativo) + parseFloat(aux);
        }
    });

    aportePropioI.forEach(element => {
        let aux = element.value;
        if (regexEntero.test(aux) || regexDecimal.test(aux)) {
            montoAporteInversion = parseFloat(montoAporteInversion) + parseFloat(aux);
        }

    });

    inversionI.forEach(element => {
        let aux = element.value;
        if (regexEntero.test(aux) || regexDecimal.test(aux)) {
            montoInversionInversion = parseFloat(montoInversionInversion) + parseFloat(aux);
        }
    });

    document.querySelector('.total-aporte-propio-operativo').textContent = montoAporteOperativo.toFixed(2);
    document.querySelector('.total-inversion-operativo').textContent = montoInversionOperativo.toFixed(2);

    document.querySelector('.total-aporte-propio-inversion').textContent = montoAporteInversion.toFixed(2);
    document.querySelector('.total-inversion-inversion').textContent = montoInversionInversion.toFixed(2);


    //efectivo,manoObraEmprendedor,costosOperativos,materiaPrima,requePromocinales,infraestructura,maquinaria,requeLegales

    let datos = {
        efectivo: cotroladorPresupuesto.getTotalEfectivo(),
        manoObraEmprendedor: cotroladorPresupuesto.getTotalManoObraEmprendedor(),
        costosOperativos: cotroladorPresupuesto.getTotalTabla('.tabla-gastos-operativos'),
        materiaPrima: cotroladorPresupuesto.getTotalTabla('.tabla-materia-prima'),
        requePromocinales: cotroladorPresupuesto.getTotalTabla('.tabla-requerimientos-promocionales'),
        infraestructura: cotroladorPresupuesto.getTotalTabla('.tabla-infraestructura'),
        maquinaria: cotroladorPresupuesto.getTotalTabla('.tabla-Maquinaria'),
        requeLegales: cotroladorPresupuesto.getTotalTabla('.tabla-requerimientos-legales'),
    }

    controladorPresupuestoTotal.presupuestoModificado(datos);

    return { aporte: montoAporteOperativo, inversion: montoInversionOperativo }
}



function eliminarFilaTablaTipo1(btn) {
    try {
        let fila = btn.parentNode.parentNode;
        fila.parentNode.removeChild(fila);

        let tbody = document.querySelector(".body-table-descripcion-producto-servico");
        let filasTbody = tbody.querySelectorAll(".fila-descripcion-producto-servico");

        let i = 1;
        filasTbody.forEach(element => {
            element.querySelector(".numeracion").innerHTML = i;
            i++;
        });

    } catch (error) {
        console.log("no se pudo eliminar la fila")
    }
}

function eliminarFilaTablaTipo2(btn) {
    try {
        let fila = btn.parentNode.parentNode;
        let body = fila.parentNode;
        body.removeChild(fila);
        actualizarTotalOperativoInversion();

    } catch (error) {
        console.log("no se pudo eliminar la fila")
    }
}

function agregarFilaTablaTipo2(btn) {
    try {
        let tabla = btn.closest('table');
        let body = tabla.querySelector("tbody");

        let tr = document.createElement('tr');
        tr.classList.add("fila-descripcion-producto-servico");
        tr.innerHTML = `
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
        `;

        body.insertBefore(tr, body.querySelector(".seccion-sub-total-tabla-tipo2"));

    } catch (error) {
        console.log("no se pudo agregar la fila")
    }

}



function validarInputNumber(event) {
    var input = event.target;
    if (input.value < 0) {
        input.value = 0; // Si el valor es negativo, se establece en cero
    }
}
/*------------------------------------------------  codigo  presupuesto --------------------------------------------------- */

/*------------------------------------------------  codigo  presupuesto total--------------------------------------------------- */


/*------------------------------------------------  codigo plantilla form 4--------------------------------------------------- */

/*------------------------------------------------  codigo plantilla form 5--------------------------------------------------- */









/*------------------------------------------------  Creacion de  Objetos --------------------------------------------------- */




