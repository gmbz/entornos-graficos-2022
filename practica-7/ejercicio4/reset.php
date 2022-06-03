<?php

setcookie("tipoNoticia", $tipoNoticia, time() - 84000);

$host  = $_SERVER['HTTP_HOST'];
header("Location: http://$host/practica-7/ejercicio4");
