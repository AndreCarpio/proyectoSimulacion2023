/*------------------------------------------------  Creacion de  Objetos --------------------------------------------------- */

class ControladorTab {

    lista = [];
    tab = null;

    constructor(cotenedorSecciones, tab) {
        this.lista.push(cotenedorSecciones.querySelector('.seccion-informacion'));
        this.lista.push(cotenedorSecciones.querySelector('.seccion-informacion2'));
        this.lista.push(cotenedorSecciones.querySelector('.seccion-informacion3'));
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

    getMontoAfinanciar(datos) {
        let totalPlanInversion = (datos.costosOperativos.inversion +
            datos.materiaPrima.inversion +
            datos.requePromocinales.inversion +
            datos.infraestructura.inversion +
            datos.maquinaria.inversion +
            datos.requeLegales.inversion);
        return totalPlanInversion - datos.efectivo.aporte;
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

    getTablasTotales() {
        let datos = {
            efectivo: this.getTotalEfectivo(),
            manoObraEmprendedor: this.getTotalManoObraEmprendedor(),
            costosOperativos: this.getTotalTabla('.tabla-gastos-operativos'),
            materiaPrima: this.getTotalTabla('.tabla-materia-prima'),
            requePromocinales: this.getTotalTabla('.tabla-requerimientos-promocionales'),
            infraestructura: this.getTotalTabla('.tabla-infraestructura'),
            maquinaria: this.getTotalTabla('.tabla-Maquinaria'),
            requeLegales: this.getTotalTabla('.tabla-requerimientos-legales')
        }
        return datos;
    }
}



/*------------------------------------------------  Iniciando  Objetos --------------------------------------------------- */

var controladorTab = new ControladorTab(document.querySelector('.contenedor-formulario-simulacion'), document.querySelector('.pestaniaSimulacion select'));
var cotroladorPresupuesto = new ControladorPresupuesto(document.querySelector('.contenedor-formulario-simulacion'));
var controladorPresupuestoTotal = new ControladorPresupuestoTotal(document.querySelector('.contenedor-formulario-simulacion'));


actualizarSubTotalMontoEmprendimiento();
actualizarTotalOperativoInversion();
actualizaSubTotalPlaInversionApPropio();
actualizarDesembolso();


/*------------------------------------------------   Codigo Informacion --------------------------------------------------- */

function agregarFilaDescripcionProductoServicio() {

    let tbody = document.querySelector(".body-table-descripcion-producto-servico");

    let tr = document.createElement('tr');
    tr.classList.add("fila-descripcion-producto-servico");
    tr.innerHTML = ` 
                     <td>
                         <textarea maxlength="500" spellcheck="false"  class="nombre-producto-servico form-control" rows="4"></textarea>
                     </td>
                     <td>
                         <textarea maxlength="500" spellcheck="false"  class="proceso-elaboracion form-control" rows="4"></textarea>
                     </td>
                     <td>
                         <textarea maxlength="500" spellcheck="false" class="caracteristicas form-control" rows="4"></textarea>
                     </td>
                     <td style="text-align: center; vertical-align: middle;">
                         <button onclick="eliminarFilaDescripcionProductoServicio(this)" type="button" id="" class="btn btn-danger btn-eliminar-descripcion-producto-servico">
                             <i class="fa fa-trash" aria-hidden="true"></i>
                         </button>
                     </td>`;
    tbody.appendChild(tr);
}

function eliminarFilaDescripcionProductoServicio(btn) {
    try {
        let fila = btn.closest('.fila-descripcion-producto-servico');
        fila.remove();
    } catch (error) {
        console.log("no se pudo eliminar la fila")
    }
}



function validarInputNumber(event) {
    var input = event.target;
    if (input.value < 0) {
        input.value = 0;
    }
}
/*------------------------------------------------  Codigo  presupuesto --------------------------------------------------- */


function actualizarSubTotalMontoEmprendimiento() {
    let inputsMontoEmprendimiento = document.querySelectorAll(".monto-presupuesto-emprendimiento");
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

    let datos = cotroladorPresupuesto.getTablasTotales();
    controladorPresupuestoTotal.presupuestoModificado(datos);
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

    let datos = cotroladorPresupuesto.getTablasTotales();
    controladorPresupuestoTotal.presupuestoModificado(datos);

    return { aporte: montoAporteOperativo, inversion: montoInversionOperativo }
}





function eliminarFilaTablaCapital(btn) {
    try {
        let fila = btn.parentNode.parentNode;
        let body = fila.parentNode;
        body.removeChild(fila);
        actualizarTotalOperativoInversion();

    } catch (error) {
        console.log("no se pudo eliminar la fila")
    }
}

function agregarFilaTablaCapital(btn, tipo) {  // se agrega una fila a algunas de la tablas del capital Operativo o De Inversion (dependiendo del tipo)
    try {
        let tabla = btn.closest('table');
        let body = tabla.querySelector("tbody");

        let tr = document.createElement('tr');
        tr.classList.add("fila-contenido-tabla-capital");
        tr.classList.add(tipo);
        tr.innerHTML = `
                        <th style="vertical-align: middle">
                        <input oninput="validarInputNumber(event);" type="number" type="text" class="form-control input-cantidad"  >
                        </th>
                        <th style="vertical-align: middle">
                            <input type="text" class="form-control  input-unidad" maxlength="100" >
                        </th>
                        <th style="vertical-align: middle">
                            <input type="text" class="form-control input-detalle" maxlength="200" >
                        </th>
                        <td>
                            <input type="number" oninput="validarInputNumber(event); actualizarTotalOperativoInversion();"
                                class="form-control input-aporte-propio" value="0" > 
                        </td>
                        <td>
                            <input type="number" oninput="validarInputNumber(event); actualizarTotalOperativoInversion();"
                                class="form-control input-inversion" value="0" >
                        </td>
                        <th>
                            <button onclick="eliminarFilaTablaCapital(this)" type="text" id=""
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



/*------------------------------------------------  codigo  presupuesto total--------------------------------------------------- */

function actualizaSubTotalPlaInversionApPropio() {
    let inputsTabla = document.querySelectorAll('.tabla-presupuesto-resumen-plan-inversion input');
    let suma = 0;

    let regexEntero = /^\d+$/;
    let regexDecimal = /^\d+(\.\d+)?$/;

    inputsTabla.forEach(element => {
        let aux = element.value;
        if (regexEntero.test(aux) || regexDecimal.test(aux)) {
            suma = parseFloat(suma) + parseFloat(aux);
        }
    });

    document.querySelector('.tabla-presupuesto-resumen-plan-inversion .efectivo-total').textContent = suma;
}

function actualizarDesembolso() {
    let datos = cotroladorPresupuesto.getTablasTotales();
    let motonFinanciar = controladorPresupuestoTotal.getMontoAfinanciar(datos);

    let mensaje = document.querySelector('.table-desembolsos .mensaje');
    let inputs = document.querySelectorAll('.table-desembolsos input');

    let regexEntero = /^\d+$/;
    let regexDecimal = /^\d+(\.\d+)?$/;

    let totalMonto = 0;

    inputs.forEach(element => {
        let aux = element.value;
        if (regexEntero.test(aux) || regexDecimal.test(aux)) {
            totalMonto = parseFloat(totalMonto) + parseFloat(aux);
        }
    });

    if (totalMonto == motonFinanciar) {
        mensaje.textContent = "DESEMBOLSO CORRECTO";
        mensaje.style.backgroundColor = "#5affa2";
    } else {
        mensaje.textContent = "REVISAR 1ER Y 2DO DESEMBOLSO";
        mensaje.style.backgroundColor = "#ff8985";

    }



}

/*------------------------------------------------  codigo plantilla  costos --------------------------------------------------- */

function agregarFilaCostoProductoServico() {
    let tbodyTabla = document.querySelector('.tbody-tabla-manofactura-producto-servicios');

    let elemento = document.createElement('tr');
    elemento.classList.add("fila-costo-produto-servicio");

    elemento.innerHTML = `
                            <td>
                                <button type="button" onclick="eliminarFilaCostoProductoServico(this)" class="btn btn-danger ">
                                    <i class="fa fa-trash" aria-hidden="true"></i>
                                </button>
                            </td>
                            <td><input type="text" class="form-control productoServicio" maxlength="200"></td>
                            <td><input type="text" class="form-control tipoProductoServico" maxlength="100" ></td>
                            <td><input type="number" min="0" class="form-control cantidadProductoServicio" value="0"
                                    oninput="validarInputNumber(event); calcularManufactura();"></td>
                            <td><input type="text" class="form-control unidadProductoServicio" maxlength="100"></td>
                            <td>
                                <select class="form-select frecuenciaProductoServicio" onchange="calcularManufactura()">
                                    <option value="25">Diario</option>
                                    <option value="4">Semanal</option>
                                    <option value="2">Quincenal</option>
                                    <option value="1">Mensual</option>
                                    <option value="0.5">Bimestral</option>
                                    <option value="3">Trimestral</option>
                                    <option value="6">Semestral</option>
                                </select>
                            </td>
                            <td><input type="number" min="0" class="form-control  precioCompra" value="0"
                                    oninput="validarInputNumber(event); calcularManufactura();"></td>
                            <td><input type="number" min="0" class="form-control precionVenta " value="0"
                                    oninput="validarInputNumber(event); calcularManufactura();"></td>
                            <td><input style="border: none; padding: 0px; text-overflow: ellipsis;" readonly type="text" class="form-control totalCompra"></td>
                            <td><input style="border: none; padding: 0px; text-overflow: ellipsis;" readonly type="text" class="form-control totalVenta"></td>
                            <td><input style="border: none; padding: 0px; text-overflow: ellipsis;" readonly type="text" class="form-control mub"></td>
                              `;

    let totales = tbodyTabla.querySelector('.totales-manofactura-producto-servicios');

    tbodyTabla.insertBefore(elemento, totales);

}
function eliminarFilaCostoProductoServico(btn) {
    let fila = btn.closest('.fila-costo-produto-servicio');
    fila.remove();
    calcularManufactura();

}

/*------------------------------------------------  codigo creacion PDF --------------------------------------------------- */




function exportarPDF() {
    var doc = new jsPDF('p', 'px', [1450, 1700]);
    var margin = 5;
    var pageWidth = doc.internal.pageSize.width - margin * 2;

    var elemento = document.createElement('main');
    elemento.innerHTML = document.querySelector('.contenido-main').innerHTML;
    elemento.querySelector('.contenedor-formulario-simulacion').style.margin = '0px';
    elemento.querySelector('.contenedor-formulario-simulacion').style.width = '1200px';
    elemento.style.padding = "0px"

    var secciones = elemento.querySelectorAll('.seccion');
    var btns = elemento.querySelectorAll('button');

    elemento.querySelector('.pestaniaSimulacion').remove();

    secciones.forEach(function (element) {
        element.classList.remove('oculto');
    });
    btns.forEach(function (element) {
        element.remove();
    });

    var options = {
        x: margin,
        y: margin,
        html2canvas: {
            useCORS: true // Agregar esta opción si estás obteniendo contenido de otros dominios
        },
        callback: function (pdf) {
            doc.save('prueba.pdf'); // Descargar el archivo PDF
        }
    };

    doc.html(elemento, options);
}
