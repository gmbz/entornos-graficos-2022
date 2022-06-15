<?php

session_start();

require_once "connection.php";

try {

    if (isset($_POST['nombre'])) {
        $query = "SELECT * FROM tabbd WHERE nombre = ?";
        $stmt = $connection->prepare($query);
        $stmt->bind_param('s', $_POST['nombre']);
        $stmt->execute();

        $rs = $stmt->get_result();

        $persona = $rs->fetch_assoc();

        $_SESSION['nombre'] = isset($persona) ? $persona['nombre'] : null;
    }
} catch (Exception $e) {
    echo $e->getMessage();
}

require_once "head.php";
?>

<div class="container mt-5 text-center">
    <form action="ejercicio2.php" method="post">
        <div class="form-group mb-3">
            <label for="inputNombre">Nombre</label>
            <input type="text" name="nombre" id="inputNombre">
        </div>
        <button type="submit" class="btn btn-primary">Enviar</button>
    </form>
    <br>
    <div class="text-center">
        <a href="verificar_sesion.php">Verificar sesion</a>
    </div>


</div>

</body>

</html>