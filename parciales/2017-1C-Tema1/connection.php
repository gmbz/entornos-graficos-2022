<?php

try {
    $server = "localhost";
    $username = "root";
    $password =  "";
    $dbname = "sanatorio_x";

    $connection = new mysqli($server, $username, $password, $dbname);
} catch (Exception $e) {
    die("Connection failed" . $e->getMessage());
}

?>
