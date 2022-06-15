<?php

session_start();

require_once "head.php";
?>

<div class="text-center mt-5">
    <?php
    if (isset($_SESSION['nombre'])) {
    ?>
        <p>Bienvenido <?= $_SESSION['nombre'] ?>, capo </p>
    <?php
    } else {
    ?>
        <p>No podes visitar esta pagina capo</p>
    <?php
    }
    ?>


    <br>
    <a href="ejercicio2.php">Volver atras</a>
</div>