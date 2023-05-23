var btnCrearSimu = document.querySelector('.btn-crear-simulacion');

btnCrearSimu.addEventListener('click', function () {
    formCrearSimu = document.querySelector('.contenedor-crear-simulacion ');
    formCrearSimu.classList.remove("oculto");


});

btnCancelarForm = document.querySelector("#btn-cancelar");
btnCancelarForm.addEventListener('click', function (e) {
    e.preventDefault();
    formCrearSimu = document.querySelector('.contenedor-crear-simulacion ');
    formCrearSimu.classList.add("oculto");
    (document.querySelector(".errors-nombre")).textContent = '';
    (document.querySelector("#input-nombre-simulacion")).value = '';


});


const btn = document.querySelector("#btn-enviar");
const form = document.querySelector("#form-crear-simulacion");


btn.addEventListener("click", (e) => {
    e.preventDefault();
    const datos = new FormData(form);
    datos.set('input-nombre-simulacion', (datos.get("input-nombre-simulacion")).trim());


    var auxError = verificarInputNombreSimulacion(datos.get("input-nombre-simulacion"));
    var nombre = document.querySelector(".errors-nombre");
    nombre.textContent = "";

    if (auxError == '') {
        (document.querySelector('.loader-btn-aceptar')).classList.remove('oculto');
        (document.querySelector('#btn-enviar')).disabled = true;
        
        console.log(datos);
        fetch('simulations/create', {
            method: 'post',
            body: datos
        })
            .then(response => response.json())
            .then(result => {
                if (result.alerta == "danger") {
                    nombre.textContent = "Error al agregar a la DB";
                }
                if (result.alerta == "success") {
                    window.location.reload();
                }
            })
    } else {
        nombre.textContent = auxError;
    }
});

function verificarInputNombreSimulacion(nom) {
    if (nom.length < 1 || nom.length > 60) {
        return "Introducir entre 1 y 60 caracteres ";
    }
    return "";
}



