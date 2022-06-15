<?php

require_once "connection.php";

$apellido = $_POST['apellido'];
$diasConsultas = $_POST['diasConsultas'];

try {
    if ($apellido) {
        $query = "UPDATE medicos_s SET dias_cosulta = ? WHERE full_name LIKE '%" . $apellido . "%'";

        $stmt = $connection->prepare($query);
        $stmt->bind_param('s', $diasConsultas);
        $stmt->execute();
    }
} catch (Exception $e) {
    echo $e->getMessage();
} finally {
    $stmt->close();
    $connection->close();
}


require_once "head.php";
?>

<div class="container">
    <p>Actualizado</p>
</div>

</body>

</html>