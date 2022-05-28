<?php

require_once '../database/ciudad_db.php';

$action = $_GET['action'];
switch ($action) {
    case 'create':
        newCiudad();
        break;
    case 'delete':
        deleteOneById();
        break;
    case 'update':
        updateById();
        break;
    default:
        # code...
        break;
}


function newCiudad()
{
    $idCiudad = $_POST['idCiudad'];
    $nombreCiudad = $_POST['ciudad'];
    $nombrePais = $_POST['pais'];
    $cantidadHabitantes = $_POST['habitantes'];
    $superficie = $_POST['superficie'];
    $tieneMetro = isset($_POST['tieneMetro']) ? 1 : 0;

    create($nombreCiudad, $nombrePais, $cantidadHabitantes, $superficie, $tieneMetro, $idCiudad);

    $host  = $_SERVER['HTTP_HOST'];
    // $uri   = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
    header("Location: http://$host/practica-6");
}

function getAll()
{
    return findAll();
}

function deleteOneById()
{
    $id = $_GET['id'];

    delete($id);

    $host  = $_SERVER['HTTP_HOST'];
    // $uri   = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
    header("Location: http://$host/practica-6");
}

function updateById()
{
    $idCiudad = $_POST['idCiudad'];
    $nombreCiudad = $_POST['ciudad'];
    $nombrePais = $_POST['pais'];
    $cantidadHabitantes = $_POST['habitantes'];
    $superficie = $_POST['superficie'];
    $tieneMetro = isset($_POST['tieneMetro']) ? 1 : 0;

    update($nombreCiudad, $nombrePais, $cantidadHabitantes, $superficie, $tieneMetro, $idCiudad);

    $host  = $_SERVER['HTTP_HOST'];
    // $uri   = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
    header("Location: http://$host/practica-6");
}
