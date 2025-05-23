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

<div class="cursos-modulo ancho">
  <h1>Todos nuestros Cursos</h1>

  <p>
    En AquaFlow ofrecemos una variedad de cursos diseñados para todas las edades y niveles, 
    desde principiantes hasta nadadores avanzados. Nuestros instructores certificados te ayudarán 
    a alcanzar tus metas en un ambiente seguro y motivador.
  </p>

  <p>
    Explora nuestro catálogo de cursos y encuentra el que mejor se adapte a tus necesidades.
    ¡Inscríbete y comienza a disfrutar de los beneficios de la natación!
  </p>
  <br>

  <table>
    <thead>
      <tr>
        <th>Curso</th>
        <th>Descripción</th>
        <th>Duración</th>
        <th>Horario</th>
        <th>Instructor</th>
        <th>Precio</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>Natación Básica</td>
        <td>Aprende los fundamentos de la natación, técnicas básicas y seguridad en el agua.</td>
        <td>3 meses</td>
        <td>Lunes y Miércoles 5pm - 7pm</td>
        <td>Juan Pérez</td>
        <td>$1500 MXN</td>
      </tr>
      <tr>
        <td>Natación Avanzada</td>
        <td>Perfeccionamiento de técnicas, resistencia y preparación para competencias.</td>
        <td>4 meses</td>
        <td>Martes y Jueves 6pm - 8pm</td>
        <td>María López</td>
        <td>$2000 MXN</td>
      </tr>
      <tr>
        <td>Aquagym</td>
        <td>Ejercicio en agua para tonificación y salud, sin impacto articular.</td>
        <td>2 meses</td>
        <td>Viernes 7am - 8am</td>
        <td>Carlos Martínez</td>
        <td>$1000 MXN</td>
      </tr>
      <tr>
        <td>Natación para Niños</td>
        <td>Curso para niños desde 4 años, aprendizaje lúdico y seguro.</td>
        <td>3 meses</td>
        <td>Sábados 10am - 12pm</td>
        <td>Laura Gómez</td>
        <td>$1200 MXN</td>
      </tr>
    </tbody>
  </table>

  <div class="instructores">
    <h2>Conoce a nuestros instructores</h2>
    <div class="instructor">
      <h3>Juan Pérez</h3>
      <p>Certificado internacional en enseñanza de natación básica. Más de 10 años de experiencia en entrenamiento para todas las edades.</p>
    </div>
    <div class="instructor">
      <h3>María López</h3>
      <p>Especialista en técnicas avanzadas y preparación para competencias nacionales e internacionales.</p>
    </div>
    <div class="instructor">
      <h3>Carlos Martínez</h3>
      <p>Instructor de aquagym con énfasis en bienestar y tonificación muscular, ideal para todas las edades.</p>
    </div>
    <div class="instructor">
      <h3>Laura Gómez</h3>
      <p>Experta en natación infantil, dedicada a crear un ambiente seguro y divertido para los más pequeños.</p>
    </div>
  </div>
</div>

<?php
include 'footer.php';
?>


</body>
</html>