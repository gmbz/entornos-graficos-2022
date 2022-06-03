<?php

session_start();

$_SESSION['username'] = isset($_POST['inputUsuario']) ? $_POST['inputUsuario'] : '';
$_SESSION['password'] = isset($_POST['inputPassword']) ? $_POST['inputPassword'] : '';

$host  = $_SERVER['HTTP_HOST'];
header("Location: http://$host/practica-7/ejercicio5/");
