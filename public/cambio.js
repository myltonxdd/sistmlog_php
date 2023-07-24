// Obtener referencias a los elementos que necesitas
const boton = document.getElementById('miBoton');
const elemento = document.getElementById('miElemento');

// Agregar un escuchador de eventos al botón
boton.addEventListener('click', function() {
  // Verificar si el elemento tiene la clase "mi-clase"
  if (elemento.classList.contains('hidden')) {
    // Si la tiene, la quitamos
    elemento.classList.remove('hidden');
  } else {
    // Si no la tiene, la agregamos
    elemento.classList.add('hidden');
  }
});

  