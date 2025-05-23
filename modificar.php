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
require 'conexion.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $id = intval($_POST['id_usuario']);
  $nombre = mysqli_real_escape_string($conectar, $_POST['nombre']);
  $apellidos = mysqli_real_escape_string($conectar, $_POST['apellidos']);
  $correo = mysqli_real_escape_string($conectar, $_POST['correo']);
  $tipo_usuario = mysqli_real_escape_string($conectar, $_POST['tipo_usuario']);

  $query = "UPDATE datos SET nombre='$nombre', apellidos='$apellidos', correo='$correo', tipo_usuario='$tipo_usuario' WHERE id_usuario=$id";

  if (mysqli_query($conectar, $query)) {
    echo "<script>alert('Usuario actualizado exitosamente.'); window.location.href='dashboard.php';</script>";
  } else {
    echo "<script>alert('Error al actualizar el usuario.'); window.location.href='editar.php?id=$id';</script>";
  }
} else {
  header('Location: dashboard.php');
  exit;
}
?>

</body>
</html>