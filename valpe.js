email.addEventListener("input", function(event) {
    if (email.validity.typeMismatch) {
        email.setCustomValidity("¡Se esperaba una dirección de correo electrónico!");
    }
    else{
        email.setCustomValidity("");
    }
});

var input = document.getElementById('Pelicula');

input.oninvalid = function(event) {
    event.target.setCustomValidity('Por favor utiliza solo letras minusculas');
}

var inpu = document.getElementById('Genero');

inpu.oninvalid = function(event) { event.target.setCustomValidity('Por favor utiliza solo letras minusculas'); }