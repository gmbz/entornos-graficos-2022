<?php

session_start();

try {
    if (isset($_POST['dni'])) {
        require_once "connection.php";
        $query = "SELECT * FROM huesped WHERE dni = ?";
        $stmt = $connection->prepare($query);
        $stmt->bind_param('s', $_POST['dni']);
        $stmt->execute();

        $rs = $stmt->get_result();
        $huesped = $rs->fetch_assoc();

        $_SESSION['nombre'] = $huesped['nombre'];
    }
} catch (Exception $e) {
    echo $e->getMessage();
} finally {
    if (isset($rs)) $rs->close();
    if (isset($stmt)) $stmt->close();
    if (isset($connection)) $connection->close();
}

include_once "head.php";
?>

<body>
    <div class="container text-center mt-4">
        <form action="ejercicio2.php" method="post">
            <div class="form-group mb-3">
                <label for="inputDni">DNI</label>
                <input type="text" name="dni" id="inputDni">
            </div>
            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
        <br>
        <a href="verificar_sesion.php" class="text-center">Verificar sesion</a>
    </div>
</body>

</html>