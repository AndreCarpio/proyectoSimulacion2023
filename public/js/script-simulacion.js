

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



inputsMontoEmprendimiento = document.querySelectorAll(".monto-presupuesto-emprendimiento");
inputsMontoEmprendimiento.forEach(element => {
    element.addEventListener("input", function (e) {
        actualizarSubTolaMontoEmprendimiento();
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
    
    return {aporte:montoAporteOperativo,inversion:montoInversionOperativo}
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
/*------------------------------------------------  codigo plantilla form 2--------------------------------------------------- */
/*------------------------------------------------  codigo plantilla form 3--------------------------------------------------- */
/*------------------------------------------------  codigo plantilla form 4--------------------------------------------------- */
/*------------------------------------------------  codigo plantilla form 5--------------------------------------------------- */



