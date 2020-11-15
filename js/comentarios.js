"use strict";

alert("HOLIS!");
console.log("HOLA COMO ANDAN")

function getComentario() {

    fetch('api/comentarios')
        .then(response => response.json())
        .then(comentarios => console.log(comentarios))
        .catch(error => console.log(error));
}

getComentario();