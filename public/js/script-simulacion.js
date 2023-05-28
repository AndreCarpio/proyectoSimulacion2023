

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


/*------------------------------------------------  codigo plantilla form 2--------------------------------------------------- */
/*------------------------------------------------  codigo plantilla form 3--------------------------------------------------- */
/*------------------------------------------------  codigo plantilla form 4--------------------------------------------------- */
/*------------------------------------------------  codigo plantilla form 5--------------------------------------------------- */



