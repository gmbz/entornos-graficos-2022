<?php
$server = "localhost";
$usuario = "root";
$password = "";
$dbname = "base2";

try {
    $connection = new mysqli($server, $usuario, $password, $dbname);
} catch (Exception $e) {
    die('Connection Failed: ' . $e->getMessage());
}
