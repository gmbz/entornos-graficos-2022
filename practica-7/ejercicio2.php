<?php
if (isset($_COOKIE['contador'])) {
    $contador = $_COOKIE['contador'];
    $contador += 1;
    setcookie("contador", $contador, time() + 84000);
} else {
    $contador = 1;
    setcookie("contador", $contador, time() + 84000);
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 2</title>
</head>

<body>

    <div align="center">
        <?php
        if ($contador == 1) {
            echo "Bienvenido";
        } else {
            echo "Entraste $contador veces";
        }
        ?>
    </div>
</body>
</body>

</html>