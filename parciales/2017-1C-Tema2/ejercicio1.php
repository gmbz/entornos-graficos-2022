<?php
require_once "connection.php";

$query = "SELECT * FROM huesped";
$listado = $connection->query($query);

$itemsPorPagina = 3;

$pagina = isset($_GET['page']) ? $_GET['page'] : null;

if (!$pagina) {
    $inicio = 0;
    $pagina = 1;
} else {
    $inicio = ($pagina - 1) * $itemsPorPagina;
}

$totalRegistros = $listado->num_rows;

$totalPaginas = ceil($totalRegistros / $itemsPorPagina);

$query = "SELECT * FROM huesped LIMIT $inicio, $itemsPorPagina";

$listadoPorPagina = $connection->query($query);

include_once "head.php";
?>

<body>
    <div class="container">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">DNI</th>
                    <th scope="col">NOMBRE</th>
                    <th scope="col">APELLIDO</th>
                    <th scope="col">HABITACION</th>
                    <th scope="col">FECHA INGRESO</th>
                    <th scope="col">FECHA FINALIZACION</th>
                    <th scope="col">PROCEDENCIA</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($listadoPorPagina as $item) {
                ?>
                    <tr>
                        <th><?= $item['dni'] ?></th>
                        <th><?= $item['nombre'] ?></th>
                        <th><?= $item['apellido'] ?></th>
                        <th><?= $item['numero_habitacion'] ?></th>
                        <th><?= $item['fecha_ingreso'] ?></th>
                        <th><?= $item['fecha_finalizacion'] ?></th>
                        <th><?= $item['procedencia'] ?></th>
                    </tr>
                <?php
                }
                $listado->free_result();
                $listadoPorPagina->free_result();
                $connection->close();
                ?>
            </tbody>
        </table>

        <?php
        if ($totalPaginas > 1) {
        ?>
            <div class="d-flex justify-content-center">
                <nav aria-label="Page navigation">
                    <ul class="pagination">
                        <?php
                        for ($i = 1; $i <= $totalPaginas; $i++) {
                            if ($pagina == $i) {
                        ?>
                                <li class="page-item disabled"><a class="page-link" href="ejercicio1.php?page=<?= $i ?>"><?= $i ?></a></li>
                            <?php
                            } else {
                            ?>
                                <li class="page-item"><a class="page-link" href="ejercicio1.php?page=<?= $i ?>"><?= $i ?></a></li>
                        <?php
                            }
                        }
                        ?>
                    </ul>
                </nav>
            </div>
        <?php
        }
        ?>

    </div>

</body>

</html>