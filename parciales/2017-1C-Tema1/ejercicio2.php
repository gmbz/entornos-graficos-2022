<?php
require_once "head.php";
?>

<div class="text-center">
    <?php
    if (!isset($_COOKIE['visitas'])) {
        setcookie("visitas", 1, time() + (84000 * 30));
    ?>
        <p>Bienvenido usuario</p>
    <?php
    } else {
        setcookie("visitas", $_COOKIE['visitas'] + 1, time() + (84000 * 30));
    ?>
        <p>Visitaste la pagina <?= $_COOKIE['visitas'] ?> veces</p>
    <?php
    }
    ?>
</div>

</body>

</html>