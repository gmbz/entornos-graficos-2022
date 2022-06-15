<?php

session_start();

require_once "head.php";
?>

<body>
    <div class="container text-center mt-5">
        <?php
        if (isset($_SESSION['nombre'])) {

        ?>
            <p>Bienvenido <?= $_SESSION['nombre'] ?>, capo</p>

        <?php
        } else {
        ?>
            <p>No podes ver esta pagina bro</p>
        <?php
        }
        ?>
        <br>
        <a href="ejercicio2.php">Volver</a>
    </div>
</body>

</html>