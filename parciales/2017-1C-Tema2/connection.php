<?php

try {
    $server = "localhost";
    $usuario = "root";
    $password = "";
    $dbname = "hotel";

    $connection = new mysqli($server, $usuario, $password, $dbname);
} catch (Exception $e) {
    die('Connection Failed: ' . $e->getMessage());
}
