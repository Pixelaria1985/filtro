<?php
include 'conexion.php';

$filtro = "";
if (isset($_GET["buscar"])) {
    $filtro = $conn->real_escape_string($_GET["buscar"]);
    $query = "SELECT * FROM colores WHERE color LIKE '%$filtro%' OR numero LIKE '%$filtro%'";
} else {
    $query = "SELECT * FROM colores";
}

$resultado = $conn->query($query);
?>

<form method="get">
    <input type="text" name="buscar" placeholder="Buscar por color o número" value="<?= htmlspecialchars($filtro) ?>">
    <input type="submit" value="Filtrar">
</form>

<table border="1" cellpadding="5" cellspacing="0">
    <tr>
        <th>Color</th>
        <th>Número</th>
    </tr>
    <?php while ($fila = $resultado->fetch_assoc()) { ?>
        <tr>
            <td><?= htmlspecialchars($fila["color"]) ?></td>
            <td><?= htmlspecialchars($fila["numero"]) ?></td>
        </tr>
    <?php } ?>
</table>
