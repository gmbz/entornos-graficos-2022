<?php
    $server = "localhost";
    $usuario = "root";
    $password = "";
    $dbname = "capitales";
    
    try {
        $connection = new mysqli($server, $usuario, $password, $dbname);
    } catch (PDOException $e) {
        die('Connection Failed: ' . $e->getMessage());
    }
?>