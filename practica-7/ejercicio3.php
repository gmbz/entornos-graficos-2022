<?php

if (isset($_POST['usuario'])) {
    $usuario = $_POST['usuario'];
    setcookie("usuario", $usuario, time() + 84000);
} else {
    if (isset($_COOKIE['usuario'])) {
        $usuario = $_COOKIE['usuario'];
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 3</title>
</head>

<body>
    <div align="center">
        <?php
        if (isset($usuario)) {
            echo "Ultimo usuario ingresado:  $usuario";
        }
        ?>
        <form action="ejercicio3.php" method="POST">
            <label for="inputUsuario">Nombre</label>
            <input type="text" name="usuario" id="inputUsuario">
            <button type="submit">Enviar</button>
        </form>
    </div>
</body>

</html>