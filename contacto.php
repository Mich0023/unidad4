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

<div class="contacto-modulo ancho">
  <h1>Contáctanos</h1>

  <p>Si tienes alguna pregunta o deseas más información sobre nuestros cursos, no dudes en ponerte en contacto con nosotros. Completa el formulario a continuación y nos pondremos en contacto contigo a la brevedad.</p>

  <form action="contacto.php" method="POST" id="contacto-form">
    <div class="formulario-campo">
      <label for="nombre">Nombre</label>
      <input type="text" id="nombre" name="nombre"  />
    </div>

    <div class="formulario-campo">
      <label for="correo">Correo Electrónico</label>
      <input type="email" id="correo" name="correo"  />
    </div>

   <div class="formulario-campo">
      <label for="curso">Curso Solicitado</label>
      <select id="curso" name="curso">
        <option value="">Seleccione un curso</option>
        <option value="Natación Básica">Natación Básica</option>
        <option value="Natación Avanzada">Natación Avanzada</option>
        <option value="Aquagym">Aquagym</option>
        <option value="Natación para Niños">Natación para Niños</option>
      </select>
    </div>
    
    <div class="formulario-campo">
      <label for="mensaje">Mensaje</label>
      <textarea id="mensaje" name="mensaje" rows="5" ></textarea>
    </div>

    <button type="submit" class="btn-enviar">Enviar Mensaje</button>
  </form>
</div>

<?php
include 'footer.php';
?>
<script>
  document.getElementById("contacto-form").addEventListener("submit", function(event) {
    var nombre = document.getElementById("nombre").value.trim();
    var correo = document.getElementById("correo").value.trim();
    var mensaje = document.getElementById("mensaje").value.trim();

    if (nombre === "" || correo === "" || mensaje === "") {
      alert("Por favor, completa todos los campos antes de enviar.");
      event.preventDefault(); 
    } else if (!validateEmail(correo)) {
      alert("Por favor, ingresa un correo electrónico válido.");
      event.preventDefault();
    }
  });
  function validateEmail(email) {
    var re = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$/;
    return re.test(email);
  }
</script>

</body>
</html>