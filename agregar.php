<?php
include 'conexion.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $color = $conn->real_escape_string($_POST["color"]);
    $numero = $conn->real_escape_string($_POST["numero"]);

    $conn->query("INSERT INTO colores (color, numero) VALUES ('$color', '$numero')");
    echo "Color agregado correctamente.";
}
?>

<form method="post">
    <label>Color:</label><br>
    <input type="text" name="color" required><br>
    <label>Número:</label><br>
    <input type="text" name="numero" required><br><br>
    <input type="submit" value="Agregar">
</form>
