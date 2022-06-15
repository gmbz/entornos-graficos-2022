<?php

try {
    $server = "localhost";
    $username = "root";
    $password = "";
    $dbname = "buscador";

    $connection = new mysqli($server, $username, $password, $dbname);
} catch (Exception $e) {
    die("Connecetion failed: " . $e->getMessage());
}
