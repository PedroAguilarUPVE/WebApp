// Obtener los elementos
const inicioToggle = document.getElementById('inicioToggle');
const registroToggle = document.getElementById('registroToggle');
const inicioFormulario = document.getElementById('inicioFormulario');
const registroFormulario = document.getElementById('registroFormulario');

// Mostrar "Iniciar Sesión" por defecto
inicioFormulario.classList.add('active');
registroFormulario.classList.remove('active');

// Evento: clic en "Inicio de Sesión"
inicioToggle.addEventListener('click', () => {
  inicioToggle.classList.add('active');
  registroToggle.classList.remove('active');

  inicioFormulario.classList.add('active');
  registroFormulario.classList.remove('active');
});

// Evento: clic en "Registrarse"
registroToggle.addEventListener('click', () => {
  registroToggle.classList.add('active');
  inicioToggle.classList.remove('active');

  registroFormulario.classList.add('active');
  inicioFormulario.classList.remove('active');
});
