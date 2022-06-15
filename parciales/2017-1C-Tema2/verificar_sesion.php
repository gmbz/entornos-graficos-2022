<?php

session_start();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Ejercicio 2</title>
</head>

<body>
    <div class="text-center mt-4">
        <?php
        if (isset($_SESSION['nombre'])) {
        ?>
            <p>Bienvenido capo: <b><?= $_SESSION['nombre'] ?></b></p>
        <?php
        } else {
        ?>
            <p>No es huesped actual</p>
        <?php
        }
        ?>
        <br>
        <a href="ejercicio2.php">Volver atras</a>
    </div>
</body>

</html>