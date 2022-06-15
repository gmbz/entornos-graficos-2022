<?php

$nombre = $_POST['nombre'];
require_once "connection.php";
try {
    $query = "SELECT * FROM empresas WHERE nombre = ?";
    $stmt = $connection->prepare($query);
    $stmt->bind_param('s', $nombre);
    $stmt->execute();

    $empresa = $stmt->get_result()->fetch_assoc();
} catch (Exception $e) {
    echo $e->getMessage();
}

require_once "head.php";
?>

<body>
    <div class="container mt-5">
        <?php
        if (isset($empresa)) {
        ?>
            <form action="update.php" method="post">
                <input type="hidden" class="form-control" id="id" name="id" value="<?= $empresa['id'] ?>">
                <div class="mb-3">
                    <label for="inputNombre" class="form-label">Nombre</label>
                    <input type="text" class="form-control" id="inputNombre" name="nombre" value="<?= $empresa['nombre'] ?>">
                </div>
                <div class="mb-3">
                    <label for="inputWeb" class="form-label">Web</label>
                    <input type="text" class="form-control" id="inputWeb" name="web" value="<?= $empresa['web'] ?>">
                </div>
                <div class="mb-3">
                    <label for="inputTelefono" class="form-label">Telefono</label>
                    <input type="text" class="form-control" id="inputTelefono" name="telefono" value="<?= $empresa['telefono'] ?>">
                </div>
                <div class="mb-3">
                    <label for="inputSector" class="form-label">Sector</label>
                    <input type="text" class="form-control" id="inputSector" name="sector" value="<?= $empresa['sector'] ?>">
                </div>
                <div class="mb-3">
                    <label for="inputDescripcion" class="form-label">Descripcion</label>
                    <input type="text" class="form-control" id="inputDescripcion" name="descripcion" value="<?= $empresa['descripcion'] ?>">
                </div>
                <button type="submit" class="btn btn-primary">Enviar</button>
            </form>
        <?php
        } else {
        ?>
            <p>No existe ese nombre</p>
            <br>
            <a href="ejercicio1.php">Volver</a>
        <?php
        }
        $stmt->close();
        $connection->close();
        ?>
    </div>
</body>

</html>