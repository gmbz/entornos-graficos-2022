<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 6</title>
</head>

<body>
    <?php
    if (isset($_SESSION['nombre'])) {
    ?>
        <p>Bienvenido <?= $_SESSION['nombre'] ?></p>
    <?php
    } else {
    ?>
        <p>Oops! No puedes ver esta pagina</p>
    <?php
    }
    ?>
</body>

</html>