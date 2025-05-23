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

<div class="bienvenida ancho">
  <h1>Bienvenido a AquaFlow</h1>
  <p>Tu mejor opción para aprender natación con profesionales certificados y un ambiente seguro y divertido.</p>
</div>

<div class="inicio ancho">
  <div class="noticias">
    <h2>Noticias Destacadas</h2>
    <article class="noticia">
      <h3>¡Abren inscripciones para el curso intensivo de verano 2025!</h3>
      <p>Prepárate para mejorar tus habilidades con nuestros cursos intensivos que comienzan el 1 de junio. Cupos limitados.</p>
    </article>
    <article class="noticia">
      <h3>Nuevas clases de natación para niños a partir de 4 años</h3>
      <p>Este semestre lanzamos una nueva categoría para los más pequeños, con instructores certificados y ambiente seguro.</p>
    </article>
  </div>

  <div class="beneficios">
    <h2>¿Por qué elegir AquaFlow?</h2>
    <ul>
      <li>Instructores profesionales con certificación internacional.</li>
      <li>Instalaciones modernas y seguras.</li>
      <li>Clases para todas las edades y niveles.</li>
      <li>Ambiente amigable y enfocado en tu bienestar.</li>
    </ul>
  </div>
</div>
<div class="video-tips ancho">
  <h2>Tips para aprender a nadar</h2>
  <div class="video-container">
    <iframe width="560" height="315" src="https://www.youtube.com/embed/BFH8NBHN42g?si=Bgk9a8BJhIS6wS9M" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
  </div>
</div>

<div class="blog-notas ancho">
  <h2>Últimas Notas</h2>
  
  <div class="nota">

     <img src="imagenes/natacion1.jpg" alt="Natación 1" class="nota-imagen">
    <h3>El beneficio de la natación para la salud física</h3>
    <p>La natación es un ejercicio que mejora la fuerza, la resistencia y la coordinación muscular.</p>
  </div>
  <div class="nota">
    <img src="imagenes/natacion2.jpg" alt="Natación 2" class="nota-imagen">
    <h3>Cómo prepararse para un curso de natación intensivo</h3>
    <p>Te damos consejos para sacarle el máximo provecho a los cursos intensivos y evitar lesiones.</p>
  </div>
  
  <div class="nota">
     <img src="imagenes/natacion3.jpg" alt="Natación 3" class="nota-imagen">
    <h3>Tips para elegir el mejor traje de baño para entrenar</h3>
    <p>Conoce los diferentes tipos de trajes de baño y cuál es el más adecuado según tu estilo y nivel.</p>
  </div>
</div>

<div class="cursos-proximos ancho">
  <h2>Próximos Cursos</h2>
  <div class="tabla-cursos-wrapper">
    <table>
      <thead>
        <tr>
          <th>Curso</th>
          <th>Duración</th>
          <th>Horario</th>
          <th>Instructor</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Natación Básica</td>
          <td>3 meses</td>
          <td>Lunes y Miércoles 5pm - 7pm</td>
          <td>Juan Pérez</td>
        </tr>
        <tr>
          <td>Natación Avanzada</td>
          <td>4 meses</td>
          <td>Martes y Jueves 6pm - 8pm</td>
          <td>María López</td>
        </tr>
        <tr>
          <td>Aquagym</td>
          <td>2 meses</td>
          <td>Viernes 7am - 8am</td>
          <td>Carlos Martínez</td>
        </tr>
      </tbody>
    </table>
    <a href="cursos.php" class="btn-ver-mas">Ver más cursos</a>
  </div>
</div>

<div class="inscripcion ancho">
  <h2>¡Inscríbete Hoy!</h2>
  <p>Reserva tu lugar en cualquiera de nuestros cursos y comienza a disfrutar los beneficios de la natación.</p>
  <a href="contacto.php" class="boton-inscripcion">Contacta con Nosotros</a>
</div>

<?php
include 'footer.php';
?>



</body>
</html>

