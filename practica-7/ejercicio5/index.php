<?php

session_start(); 

if (isset($_SESSION['username']) && isset($_SESSION['password'])) {
    $username = $_SESSION['username'];
    $password = $_SESSION['password'];
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 5</title>
</head>

<body>
    <div align="center">
        <h2>Ingresar usuario y contraseña</h2>
        <form action="variables.php" method="POST">
            <div>
                <label for="usuario">Nombre de usuario</label>
                <input type="text" name="inputUsuario" id="usuario">
            </div>
            <div>
                <label for="password">Password</label>
                <input type="text" name="inputPassword" id="password">
            </div>
            <button type="submit">Enviar</button>
        </form>
    </div>
    <?php
    if (isset($username) && isset($password)) {
    ?>
        <div align="center">
            <p>Username: <?= $username ?></p>
            <br>
            <p>Password: <?= $password ?></p>
        </div>
    <?php
    }
    ?>
</body>

</html>