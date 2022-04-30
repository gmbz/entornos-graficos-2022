<h1>A)</h1>
<!-- El siguiente codigo se usa para mostrar una pagina web
con titulo "Documento 1" que contiene una tabla que ocupa el
90% del ancho de la pantalla, con el borde de grosor 1,
con 5 filas y 2 columnas
-->
<html>

<head>
    <title>Documento 1</title>
</head>

<body>
    <?php
    echo "<table width = 90% border = '1' >";
    $row = 5;
    $col = 2;
    for ($r = 1; $r <= $row; $r++) {
        echo "<tr>";
        for ($c = 1; $c <= $col; $c++) {
            echo "<td>&nbsp;</td>\n";
        }
        echo "</tr>\n";
    }
    echo "</table>\n";
    ?>
</body>

</html>

<h1>B)</h1>

<!-- El siguiente codigo se utiliza para mostrar un formulario 
de edad y un boton submit para enviarlo. 
Al ingresar un numero y enviar el formularro nos muestra un
mensaje que nos dice si es mayor o menor de edad, mayor de edad
al ingresar 21 o mas y en caso contrario menor de edad
-->

<html>

<head>
    <title>Documento 2</title>
</head>

<body>
    <?php
        if (!isset($_POST['submit'])) {
    ?>
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
            Edad: <input name="age" size="2">
            <input type="submit" name="submit" value="Ir">
        </form>
    <?php
    } else {
        $age = $_POST['age'];
        if ($age >= 21) {
            echo 'Mayor de edad';
        } else {
            echo 'Menor de edad';
        }
    }
    ?>
</body>

</html>