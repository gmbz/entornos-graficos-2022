<?php
if (isset($_POST['estilo'])) {
    $estilo = $_POST['estilo'];
    setcookie("estilo", $estilo, time() + 84000);
} else {
    if (isset($_COOKIE['estilo'])) {
        $estilo = $_COOKIE['estilo'];
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php
    if (isset($estilo)) {
        echo '<link rel="stylesheet" type:"text/css" href="' . $estilo . '.css">';
    }
    ?>

    <title>Ejercicio 1</title>
</head>

<body>
    <div align="center">
        <form action="index.php" method="POST">
            <select name="estilo" id="estilo">
                <option value="coral">Coral</option>
                <option value="darkcyan">Darkcyan</option>
                <option value="aquamarine">Aquamarine</option>
                <option value="dimgray">Dimgray</option>
            </select>
            <button type="submit">Enviar</button>
        </form>
    </div>
</body>

</html>