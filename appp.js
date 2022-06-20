

const email = document.getElementById('email');

email.addEventListener("input", function (event) {
  if (email.validity.typeMismatch ) {
    email.setCustomValidity("¡Se esperaba una dirección de correo electrónico!");
     } else {
    email.setCustomValidity("");

  }
});



var inpu = document.getElementById('name');
inpu.oninvalid = function(event) { event.target.setCustomValidity('Por favor utiliza solo letras minusculas'); }

