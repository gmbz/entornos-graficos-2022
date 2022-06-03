<?php
if (isset($_POST['tipoNoticia'])) {
    $tipoNoticia = $_POST['tipoNoticia'];
    setcookie("tipoNoticia", $tipoNoticia, time() + 84000);
} else {
    if (isset($_COOKIE['tipoNoticia'])) {
        $tipoNoticia = $_COOKIE['tipoNoticia'];
    }
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 4</title>
</head>

<body>
    <div align="center">
        <?php
        if (isset($tipoNoticia)) {

        ?>

            TIPO DE NOTICIA ELEGIDO: <span><?php echo $tipoNoticia; ?></span>
            <br>
            <a href="reset.php">Click aqui</a> para cambiar el tipo elegido
        <?php
        } else {
        ?>

            ELEGIR TIPO NOTICIA
            <form action="index.php" method="POST">
                <label for="politica">POLITICA</label>
                <input type="radio" name="tipoNoticia" id="politica" value="politica">
                <label for="economica">ECONOMICA</label>
                <input type="radio" name="tipoNoticia" id="economica" value="economica">
                <label for="deportiva">DEPORTIVA</label>
                <input type="radio" name="tipoNoticia" id="deportiva" value="deportiva">
                <button type="submit">Enviar</button>
            </form>
        <?php
        }
        ?>
    </div>
</body>

</html>