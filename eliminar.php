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

if (!isset($_GET['id'])) {
  header('Location: dashboard.php');
  exit;
}

$id = intval($_GET['id']);

$query = "DELETE FROM datos WHERE id_usuario=$id";

if (mysqli_query($conectar, $query)) {
  echo "<script>alert('Usuario eliminado exitosamente.'); window.location.href='dashboard.php';</script>";
} else {
  echo "<script>alert('Error al eliminar el usuario.'); window.location.href='dashboard.php';</script>";
}
?>

</body>
</html>