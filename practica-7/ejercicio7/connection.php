<?php
$server = "localhost";
$usuario = "root";
$password = "";
$dbname = "compras";

try {
    $connection = new mysqli($server, $usuario, $password, $dbname);
} catch (Exception $e) {
    die('Connection Failed: ' . $e->getMessage());
}
