

var btnCrearSimu = document.querySelector('.btn-crear-simulacion');

btnCrearSimu.addEventListener('click', function () {
    formCrearSimu = document.querySelector('.contenedor-crear-simulacion ');
    formCrearSimu.classList.remove("oculto");


});

btnCancelarForm = document.querySelector("#btn-cancelar");
btnCancelarForm.addEventListener('click', function () {
    formCrearSimu = document.querySelector('.contenedor-crear-simulacion ');
    formCrearSimu.classList.add("oculto");


});


const btn = document.querySelector("#btn-enviar");
const form = document.querySelector("#form");
btn.addEventListener("click", (e) => {
    e.preventDefault();
    const datos = new FormData(form);
    console.log(datos);
    fetch('simulations/create', {
        method: 'post',
        body: datos
    })
        .then(response => response.json())
        .then(result => {
            console.log(result)
            if (result.alerta == "danger") {
                let nombre = document.querySelector(".errors-nombre");
			    nombre.textContent = "Error al agregar a la DB";
                console.log("error");
            }
            if (result.alerta == "success") {
                console.log("agredado correctamente");
                window.location.reload();
            }

        })
});