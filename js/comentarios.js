"use strict"
const body = document.getElementById('aparecer-comentarios');
let tablaComentarios = document.getElementById("tablaComentarios");
let idpropiedad = document.querySelector('input[name="idComentarioProp"]').value;
let userName = document.querySelector('input[name="usuarioConectado"]');

document.addEventListener("DOMContentLoaded", () => {
    getComentario();
    document.getElementById("agregarcomentario").addEventListener('submit', e => {
        e.preventDefault();
        AgregarComentario();
    })
})

function getComentario() {

    fetch('api/comentarios/' + idpropiedad)
        .then(response => response.json())
        .then(comentarios => ShowComentario(comentarios))
        .catch(error => console.log(error));
}



function ShowComentario(comentarios) {
    if (comentarios.length != 0) {
        removeComentarios();
        limpiarTabla();
        for (let coment of comentarios) {

            let boton = document.createElement("button");
            boton.innerText = "BORRAR";
            let nodoTr = document.createElement("tr");
            let nodoTd1 = document.createElement("td");
            let nodoTd2 = document.createElement("td");
            let nodoTd3 = document.createElement("td");
            /* Agregamos estilos para que la tabla de comentarios se vea prolija. */
            nodoTd1.classList.add("border-btn");
            nodoTd2.classList.add("border-btn");
            nodoTd3.classList.add("border-btn");
            nodoTd1.classList.add("th-borde-right", "fontNegra", "font-weight-bold", "text-left", "pl-2");
            nodoTd2.classList.add("th-borde-right", "font-negra", "font-weight-bold");
            nodoTd3.classList.add("th-borde-right", "font-negra", "font-weight-bold");
            boton.classList.add("ancho-modif", "bg-dark", "text-center", "text-primary");


            nodoTd1.innerHTML = `${coment.comentario}`;
            nodoTd2.innerHTML = `${coment.puntaje}`;
            nodoTr.id = coment.id;
            if (userName != null) {
                boton.addEventListener('click', e => eliminar(coment.id));
                nodoTr.appendChild(nodoTd1);
                nodoTr.appendChild(nodoTd2);
                nodoTd3.appendChild(boton);
                nodoTr.appendChild(nodoTd3);

            } else {
                nodoTr.appendChild(nodoTd1);
                nodoTr.appendChild(nodoTd2);
            }
            body.appendChild(nodoTr);
        }
    } else {
        noComentarios();
    }





}

function eliminar(id) {
    fetch("api/borrar" + "/" + id, {
            "method": "DELETE",
            "mode": "cors",
        }).then(response => response.json())
        .then(function() {
            getComentario();
        }).then(function(e) {
            console.log(e);
        })
}

function limpiarTabla() {
    body.innerHTML = "";
}


function noComentarios() {
    tablaComentarios.classList.add("ocultar");
}

function removeComentarios() {
    tablaComentarios.classList.remove("ocultar");


}

function AgregarComentario() {
    let comentario = document.querySelector('textarea[name="comentario"]');
    let puntaje = document.querySelector('select[name="puntaje"]');
    let id = document.querySelector('input[name="idAborrar"]');
    console.log(puntaje.value);

    if ((comentario.value && puntaje.value) != "") {

        let data = {
            comentario: comentario.value,
            puntaje: puntaje.value,
            propiedad: id.value
        }

        fetch('api/agregarcomentario', {
                "method": "POST",
                "headers": { "Content-Type": "application/json" },
                "body": JSON.stringify(data)
            }).then(response => response.json())
            .then(function() {
                getComentario();
            }).catch(function(e) {
                console.log(e)
            })


    }

}