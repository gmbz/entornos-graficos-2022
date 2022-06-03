<?php
session_start();

require_once "connection.php";

if (isset($_POST['email'])) {
    $email = $_POST['email'];

    try {
        $query = "SELECT * FROM alumnos WHERE email = ?";
        $stmt = $connection->prepare($query);
        $stmt->bind_param('s', $email);

        $stmt->execute();
        $rs = $stmt->get_result();

        $alumno = $rs->fetch_assoc();

        $_SESSION['nombre'] = $alumno['nombre'];

        // echo $_SESSION['nombre'];

        $host  = $_SERVER['HTTP_HOST'];
        header("Location: http://$host/practica-7/ejercicio6/verificar.php");
    } catch (\Exception $e) {
        die('Hubo un error: ' . $e->getMessage());
    } finally {
        $stmt->close();
        $rs->close();
        $connection->close();
    }
}
