<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado con paginacion</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

</head>

<body>

    <?php
    include_once "header.php";
    ?>

    <div class="container pt-5">
        <h2>Listado de ciudades con paginacion</h2>

        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Ciudad</th>
                    <th scope="col">Pais</th>
                    <th scope="col">Habitantes</th>
                    <th scope="col">Superficie</th>
                    <th scope="col">Tiene metro</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php
                require_once 'connection.php';

                $itemsPorPagina = 3;

                $pagina = isset($_GET['page']) ? $_GET['page'] : null;

                if (!$pagina) {
                    $inicio = 0;
                    $pagina = 1;
                } else {
                    $inicio = ($pagina - 1) * $itemsPorPagina;
                }

                $query = "SELECT * FROM ciudad";
                $listaCiudades = $connection->query($query);

                $totalRegistros =  $listaCiudades->num_rows;

                $totalPaginas = ceil($totalRegistros / $itemsPorPagina);

                $query = "SELECT * FROM ciudad LIMIT $inicio, $itemsPorPagina";

                $listadoPorPagina = $connection->query($query);

                // while ($ciudad = $listaCiudades->fetch_assoc()) {
                foreach ($listadoPorPagina as $ciudad) {
                ?>
                    <tr>
                        <th scope="row"><?php echo $ciudad['id']; ?></th>
                        <td><?php echo $ciudad['ciudad']; ?></td>
                        <td><?php echo $ciudad['pais']; ?></td>
                        <td><?php echo $ciudad['habitantes']; ?></td>
                        <td><?php echo $ciudad['superficie']; ?></td>
                        <td><?php echo $ciudad['tieneMetro']; ?></td>
                        <td>
                            <a href="edit_ciudad.php?id=<?php echo $ciudad['id']; ?>" class="btn btn-warning btn-sm">Editar</a>
                            <a href="controllers/ciudad_controller.php?action=delete&id=<?php echo $ciudad['id']; ?>" class="btn btn-danger btn-sm">Eliminar</a>
                        </td>
                    </tr>
                <?php
                }
                $listaCiudades->free_result();
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
                        <li class="page-item">
                            <a class="page-link" href="#" aria-label="Previous">
                                <span aria-hidden="true">&laquo;</span>
                            </a>
                        </li>
                        <?php
                        for ($i = 1; $i <= $totalPaginas; $i++) {
                        ?>
                            <li class="page-item"><a class="page-link" href="paginacion.php?page=<?php echo $i; ?>"><?php echo $i; ?></a></li>
                        <?php
                        }
                        ?>
                        <li class="page-item">
                            <a class="page-link" href="#" aria-label="Next">
                                <span aria-hidden="true">&raquo;</span>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        <?php
        }
        ?>
    </div>

</body>

</html>