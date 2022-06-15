const formulario = document.querySelector("#formulario"),
    nombre = document.querySelector("#nombre").value,
    email = document.querySelector("#email").value,
    comentario = document.querySelector("#comentario").value;

formulario.onsubmit = evento => {
    evento.preventDefault();
    if (nombre === "") {
        alert("No puede estar vacio");
        return false;
    }
    if (email === "") {
        alert("No puede estar vacio");
        return false;
    }
    if (comentario === "") {
        alert("No puede estar vacio");
        return false;
    }
    formulario.submit();
};