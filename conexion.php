<?php
$host = 'localhost';
$usuario = 'root';
$contrasena = '';
$bd = 'natacion';

$conectar = mysqli_connect($host, $usuario, $contrasena, $bd);

if (!$conectar) {
    die("Error en la conexión: " . mysqli_connect_error());
}
?>
