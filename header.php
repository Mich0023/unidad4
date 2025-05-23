<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
?>
<header class="header-principal">
  <div class="contenedor-superior ancho">
    <div class="lado-izquierdo">
      <img src="imagenes/logo.png" alt="Logo" class="logo-img" />
      <div class="titulo">AquaFlow</div>
    </div>
    <nav>
      <ul>
        <li><a href="index.php">Inicio</a></li>
        <li><a href="cursos.php">Cursos</a></li>
        <li><a href="ubicacion.php">Ubicación</a></li>
        <li><a href="contacto.php">Contacto</a></li>
        <?php if (isset($_SESSION['usuario'])): ?>
          <li><a href="logout.php">Cerrar Sesión</a></li>
        <?php else: ?>
          <li><a href="login.php">Iniciar Sesión</a></li>
        <?php endif; ?>
      </ul>
    </nav>
  </div>
</header>
