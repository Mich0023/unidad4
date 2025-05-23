<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="estilo.css">
  <title>Document</title>
</head>
<body>
<?php
include 'header.php';
?>

<div class="registro-modulo ancho">
  <h1>Crear una Cuenta</h1>

  <p>Para comenzar, completa el siguiente formulario con tus datos.</p>

  <form action="guardar_usuario.php" method="POST">
    <div class="formulario-campo">
      <label for="nombre">Nombre</label>
      <input type="text" id="nombre" name="nombre" required />
    </div>

    <div class="formulario-campo">
      <label for="apellidos">Apellidos</label>
      <input type="text" id="apellidos" name="apellidos" required />
    </div>

    <div class="formulario-campo">
      <label for="correo">Correo Electrónico</label>
      <input type="email" id="correo" name="correo" required />
    </div>

    <div class="formulario-campo">
      <label for="contrasena">Contraseña</label>
      <input type="password" id="contrasena" name="contrasena" required />
    </div>

    <div class="formulario-campo">
      <p>Tipo de usuario</p>
      <input type="radio" id="estudiante" name="tipo_usuario" value="Estudiante" required />
      <label for="estudiante">Estudiante</label><br />

      <input type="radio" id="instructor" name="tipo_usuario" value="Instructor" />
      <label for="instructor">Instructor</label>
    </div>

    <button type="submit" class="btn-enviar">Crear Cuenta</button>
  </form>
</div>

<?php
include 'footer.php';
?>
<script>
document.querySelector('form').addEventListener('submit', function(e) {
  const nombre = document.getElementById('nombre').value.trim();
  const apellidos = document.getElementById('apellidos').value.trim();
  const correo = document.getElementById('correo').value.trim();
  const contrasena = document.getElementById('contrasena').value.trim();
  const tipoUsuario = document.querySelector('input[name="tipo_usuario"]:checked');

  if (!nombre || !apellidos || !correo || !contrasena) {
    alert('Por favor, completa todos los campos obligatorios.');
    e.preventDefault();
    return;
  }

  if (!tipoUsuario) {
    alert('Por favor, selecciona si eres Estudiante o Instructor.');
    e.preventDefault();
    return;
  }

  if (!validateEmail(correo)) {
    alert('Por favor, ingresa un correo válido.');
    e.preventDefault();
    return;
  }

  // Puedes agregar validaciones adicionales aquí

  function validateEmail(email) {
    const re = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    return re.test(email);
  }
});
</script>


</body>
</html>