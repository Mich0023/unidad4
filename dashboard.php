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

$query = "SELECT * FROM datos ORDER BY id_usuario ASC";
$result = mysqli_query($conectar, $query);
?>

<div class="dashboard ancho">
  <h1>Panel de Administración</h1>

  <table>
    <thead>
      <tr>
        <th>ID</th>
        <th>Nombre</th>
        <th>Apellidos</th>
        <th>Correo</th>
        <th>Tipo Usuario</th>
        <th>Acciones</th>
      </tr>
    </thead>
    <tbody>
      <?php while($fila = mysqli_fetch_assoc($result)) { ?>
        <tr>
          <td><?php echo $fila['id_usuario']; ?></td>
          <td><?php echo htmlspecialchars($fila['nombre']); ?></td>
          <td><?php echo htmlspecialchars($fila['apellidos']); ?></td>
          <td><?php echo htmlspecialchars($fila['correo']); ?></td>
          <td><?php echo htmlspecialchars($fila['tipo_usuario']); ?></td>
          <td>
            <a href="editar.php?id=<?php echo $fila['id_usuario']; ?>">Editar</a> |
            <a href="eliminar.php?id=<?php echo $fila['id_usuario']; ?>" onclick="return confirm('¿Estás seguro que deseas eliminar este usuario?');">Eliminar</a>
          </td>
        </tr>
      <?php } ?>
    </tbody>
  </table>
</div>

<?php
include 'footer.php';
?>

</body>
</html>