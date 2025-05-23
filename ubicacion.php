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

<div class="ubicacion-modulo ancho">
  <h1>Ubicación y Horarios</h1>

  <div class="info-horarios-lugar">
  <div class="horarios-info">
    <h2>Horarios de Atención</h2>
    <ul>
      <li>Lunes a Viernes: 8:00 AM - 8:00 PM</li>
      <li>Sábado: 9:00 AM - 2:00 PM</li>
      <li>Domingo: Cerrado</li>
    </ul>
  </div>

  <div class="informacion-lugar">
    <h2>Información del Lugar</h2>
    <p><strong>Dirección:</strong> Calle 32 No. 535 por 17 y 19 Col. Maya C.P. 97134, Mérida, Yucatán</p>
    <p><strong>Teléfono:</strong> +52 123 456 7890</p>
    <p><strong>Email:</strong> contacto@aquaflow.com</p>
  </div>
</div>


  <div class="mapa">
    <h2>Encuéntranos en el mapa</h2>
    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d1862.247066435351!2d-89.5786848870019!3d21.012905640338673!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8f56773ba6356965%3A0x74431b92fb22f6f3!2sAntares%20Acu%C3%A1tica!5e0!3m2!1ses!2smx!4v1748038585661!5m2!1ses!2smx" width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
  </div>
</div>

<?php
include 'footer.php';
?>

</body>
</html>