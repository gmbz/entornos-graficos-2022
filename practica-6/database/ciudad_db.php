<?php

function create($nombreCiudad, $nombrePais, $cantidadHabitantes, $superficie, $tieneMetro)
{
    try {
        require_once '../connection.php';

        $query = "INSERT INTO ciudad (ciudad, pais, habitantes, superficie, tieneMetro) VALUES (?, ?, ?, ?, ?)";

        $stmt = $connection->prepare($query);
        $stmt->bind_param('ssidi', $nombreCiudad, $nombrePais, $cantidadHabitantes, $superficie, $tieneMetro);

        $stmt->execute();
    } catch (\Exception $e) {
        die('Hubo un error: ' . $e->getMessage());
    } finally {
        $stmt->close();
        $connection->close();
    }
}

function findAll()
{
    try {
        require_once '../connection.php';

        $query = "SELECT * FROM ciudad";
        $listaCiudades = $connection->query($query);
        return $listaCiudades;
    } catch (\Exception $e) {
        die('Hubo un error: ' . $e->getMessage());
    } finally {
        $connection->close();
    }
}

function delete($id)
{
    try {
        require_once '../connection.php';

        $query = "DELETE FROM ciudad WHERE id=?";
        $stmt = $connection->prepare($query);
        $stmt->bind_param('s', $id);

        $stmt->execute();
    } catch (Exception $e) {
        die('Hubo un error: ' . $e->getMessage());
    } finally {
        $stmt->close();
        $connection->close();
    }
}

function update($nombreCiudad, $nombrePais, $cantidadHabitantes, $superficie, $tieneMetro, $idCiudad)
{
    try {
        require_once '../connection.php';
        $query = "UPDATE ciudad SET ciudad=?, pais=?, habitantes=?, superficie=?, tieneMetro=? WHERE id=?";

        $stmt = $connection->prepare($query);
        $stmt->bind_param('ssidii', $nombreCiudad, $nombrePais, $cantidadHabitantes, $superficie, $tieneMetro, $idCiudad);

        $stmt->execute();
    } catch (PDOException $e) {
        die('Hubo un error: ' . $e->getMessage());
    } finally {
        $stmt->close();
        $connection->close();
    }
}
