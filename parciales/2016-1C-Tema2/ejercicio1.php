<?php
require_once "connection.php";

$query = "SELECT * FROM tabbd";
$listado = $connection->query($query);

$itemsPorPagina = 4;

$pagina = isset($_GET['page']) ? $_GET['page'] : null;

if (!$pagina) {
    $inicio = 0;
    $pagina = 1;
} else {
    $inicio = ($pagina - 1) * $itemsPorPagina;
}

$totalRegistros = $listado->num_rows;

$totalPaginas = ceil($totalRegistros / $itemsPorPagina);

$query = "SELECT * FROM tabbd LIMIT $inicio, $itemsPorPagina";

$listadoPorPagina = $connection->query($query);

require_once "head.php";
?>

<div class="container">
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">NOMBRE</th>
                <th scope="col">APELLIDO</th>
                <th scope="col">CONTRASEÑA</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($listadoPorPagina as $item) {
            ?>
                <tr>
                    <th scope="row"><?= $item['id'] ?></th>
                    <th scope="row"><?= $item['nombre'] ?></th>
                    <th scope="row"><?= $item['apellido'] ?></th>
                    <th scope="row"><?= $item['password'] ?></th>
                </tr>
            <?php
            }
            ?>
        </tbody>
    </table>

    <nav aria-label="Page navigation" class="d-flex justify-content-center">
        <ul class=" pagination">
        <?php
        for ($i = 1; $i <= $totalPaginas; $i++) {
            if ($i == $pagina) {
        ?>
                <li class="page-item disabled"><a class="page-link" href="ejercicio1.php?page=<?= $i ?>"><?= $i ?></a></li>
            <?php
            } else {
            ?>
                <li class="page-item"><a class="page-link" href="ejercicio1.php?page=<?= $i ?>"><?= $i ?></a></li>
        <?php
            }
        }
        $listado->close();
        $listadoPorPagina->close();
        $connection->close();
        ?>
        </ul>
    </nav>
</div>

</body>

</html>