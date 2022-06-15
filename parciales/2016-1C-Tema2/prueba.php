<?php


require_once "connection.php";

try {

    if (isset($_POST['nombre'])) {
        $query = "SELECT * FROM tabbd WHERE nombre = ?";
        $stmt = $connection->prepare($query);
        $stmt->bind_param('s', $_POST['nombre']);
        $stmt->execute();

        $rs = $stmt->get_result();

        $persona = $rs->fetch_assoc();

        echo $persona['nombre'];
        //$_SESSION['nombre'] = $persona['nombre'];
    }
} catch (Exception $e) {
    echo $e->getMessage();
}
