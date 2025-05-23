<?php
require 'conexion.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = mysqli_real_escape_string($conectar, $_POST['nombre']);
    $apellidos = mysqli_real_escape_string($conectar, $_POST['apellidos']);
    $correo = mysqli_real_escape_string($conectar, $_POST['correo']);
    $contrasena = mysqli_real_escape_string($conectar, $_POST['contrasena']);
    $tipo_usuario = mysqli_real_escape_string($conectar, $_POST['tipo_usuario']);

  

    $insertar_usuario = "INSERT INTO datos (nombre, apellidos, correo, contrasena, tipo_usuario) 
                        VALUES ('$nombre', '$apellidos', '$correo', '$contrasena', '$tipo_usuario')";

    if (mysqli_query($conectar, $insertar_usuario)) {
        echo "<script>alert('Cuenta creada exitosamente. Ahora puedes iniciar sesión.'); window.location.href = 'login.php';</script>";
    } else {
        echo "<script>alert('Error al crear la cuenta. Inténtalo nuevamente.'); window.location.href = 'registrar.php';</script>";
    }
}
?>
