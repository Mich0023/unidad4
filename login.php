<?php
session_start();
require 'conexion.php';

$error = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $usuario = mysqli_real_escape_string($conectar, $_POST['usuario']);
    $contrasena = $_POST['contrasena'];

    $query = "SELECT * FROM datos WHERE nombre = '$usuario' LIMIT 1";
    $resultado = mysqli_query($conectar, $query);

    if ($fila = mysqli_fetch_assoc($resultado)) {

        if ($contrasena === $fila['contrasena']) {
            $_SESSION['usuario'] = $usuario;
            $_SESSION['nombre'] = $fila['nombre'];
            header("Location: dashboard.php");
            exit();
        } else {
            $error = "Contraseña incorrecta.";
        }
    } else {
        $error = "Usuario no encontrado.";
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="estilo.css" />
  <title>Iniciar Sesión</title>
</head>
<body>

<?php include 'header.php'; ?>

<div class="login-modulo ancho">
  <h1>Iniciar Sesión</h1>

  <?php if ($error): ?>
    <p style="color:red; font-weight:bold;"><?php echo htmlspecialchars($error); ?></p>
  <?php endif; ?>

  <p>Por favor, ingresa tu usuario y contraseña para acceder al panel de administración.</p>

  <form action="login.php" method="POST">
    <div class="formulario-campo">
      <label for="usuario">Usuario</label>
      <input type="text" id="usuario" name="usuario" required />
    </div>

    <div class="formulario-campo">
      <label for="contrasena">Contraseña</label>
      <input type="password" id="contrasena" name="contrasena" required />
    </div>

    <button type="submit" class="btn-enviar">Iniciar Sesión</button>
  </form>

  <div class="crear-cuenta">
    <p>¿No tienes cuenta? <a href="registrar.php">Crear cuenta</a></p>
  </div>
</div>

<?php include 'footer.php'; ?>

</body>
</html>
