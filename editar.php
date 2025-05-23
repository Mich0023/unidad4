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
require 'conexion.php';

if (!isset($_GET['id'])) {
  header('Location: dashboard.php');
  exit;
}

$id = intval($_GET['id']);
$query = "SELECT * FROM datos WHERE id_usuario = $id LIMIT 1";
$result = mysqli_query($conectar, $query);

if (mysqli_num_rows($result) == 0) {
  echo "Usuario no encontrado";
  exit;
}

$fila = mysqli_fetch_assoc($result);
?>

<div class="editar-modulo ancho">
  <h1>Editar Usuario</h1>

  <form action="modificar.php" method="POST">
    <input type="hidden" name="id_usuario" value="<?php echo $fila['id_usuario']; ?>" />

    <div class="formulario-campo">
      <label for="nombre">Nombre</label>
      <input type="text" id="nombre" name="nombre" value="<?php echo htmlspecialchars($fila['nombre']); ?>" required />
    </div>

    <div class="formulario-campo">
      <label for="apellidos">Apellidos</label>
      <input type="text" id="apellidos" name="apellidos" value="<?php echo htmlspecialchars($fila['apellidos']); ?>" required />
    </div>

    <div class="formulario-campo">
      <label for="correo">Correo</label>
      <input type="email" id="correo" name="correo" value="<?php echo htmlspecialchars($fila['correo']); ?>" required />
    </div>

    <div class="formulario-campo">
      <label for="tipo_usuario">Tipo Usuario</label><br>
      <input type="radio" id="estudiante" name="tipo_usuario" value="Estudiante" <?php if ($fila['tipo_usuario'] == 'Estudiante') echo 'checked'; ?> />
      <label for="estudiante">Estudiante</label><br>

      <input type="radio" id="instructor" name="tipo_usuario" value="Instructor" <?php if ($fila['tipo_usuario'] == 'Instructor') echo 'checked'; ?> />
      <label for="instructor">Instructor</label>
    </div>

    <button type="submit" class="btn-enviar">Guardar Cambios</button>
  </form>
</div>

<?php
include 'footer.php';
?>

</body>
</html>