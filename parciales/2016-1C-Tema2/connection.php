<?php

try {
    $server = "localhost";
    $username = "root";
    $password = "";
    $dbname = "bbdd";

    $connection = new mysqli($server, $username, $password, $dbname);
} catch (Exception $e) {
    die("Connection failed " . $e->getMessage());
}
