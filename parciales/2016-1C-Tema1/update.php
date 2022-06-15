<?php

$id = $_POST['id'];
$nombre = $_POST['nombre'];
$web = $_POST['web'];
$telefono = $_POST['telefono'];
$sector = $_POST['sector'];
$descripcion = $_POST['descripcion'];

require_once "connection.php";

try {
    $query = "UPDATE empresas SET nombre = ?, web = ?, telefono = ?, sector = ?, descripcion = ? WHERE id = ?";
    $stmt = $connection->prepare($query);
    $stmt->bind_param('sssssi', $nombre, $web, $telefono, $sector, $descripcion, $id);
    $stmt->execute();
} catch (Exception $e) {
    echo $e->getMessage();
} finally {
    $stmt->close();
    $connection->close();
}
?>

<body>
    <div>
        <p>Actualizado</p>
        <br>
        <a href="ejercicio1.php">Volver</a>
    </div>
</body>

</html>