<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buscador</title>
</head>

<body>
    <?php

    $buscar = $_POST['inputBuscar'];

    include_once "connection.php";

    $query = "SELECT * FROM buscador WHERE cancion LIKE '%" . $buscar . "%'";

    $rs = $connection->query($query);

    if ($rs->num_rows == "0") {
    ?>
        <h2>No hay resultados</h2>
    <?php
    } else {

    ?>
        <h2>Resultados</h2>
        <ul>
            <?php
            foreach ($rs as $cancion) {

            ?>
                <li><?= $cancion['cancion'] ?></li>
            <?php
            }
            ?>
        </ul>
    <?php
    }
    ?>
</body>

</html>