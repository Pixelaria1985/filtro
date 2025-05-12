<?php
$host = "localhost";
$usuario = "root"; // Cambia por tu usuario de MySQL
$contrasena = ""; // Cambia por tu contraseña de MySQL
$base_de_datos = "colores_db";

$conn = new mysqli($host, $usuario, $contrasena, $base_de_datos);

if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}
?>
