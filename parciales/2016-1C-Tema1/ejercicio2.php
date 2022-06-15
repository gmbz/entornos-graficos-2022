<?php

session_start();

require_once "connection.php";

try {
    if (isset($_POST['nombre'])) {
        $query = "SELECT * FROM empresas WHERE nombre = ?";
        $stmt = $connection->prepare($query);
        $stmt->bind_param('s', $_POST['nombre']);
        $stmt->execute();

        $empresa = $stmt->get_result()->fetch_assoc();

        $_SESSION['nombre'] = isset($empresa) ? $empresa['nombre'] : null;
    }
} catch (Exception $e) {
    echo $e->getMessage();
} finally {
    if (isset($stmt)) $stmt->close();
    if (isset($connection)) $connection->close();
}

require_once "head.php";
?>

<body>
    <div class="container text-center mt-5">
        <form action="ejercicio2.php" method="post">
            <div class="form-group mb-3">
                <label for="inputNombre">Nombre</label>
                <input type="text" name="nombre" id="inputNombre">
            </div>
            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
        <a href="verificar_sesion.php">Verificar sesion</a>
    </div>
</body>

</html>