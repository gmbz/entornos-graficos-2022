<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 2</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

</head>

<body>

    <?php
    include_once "header.php";
    ?>

    <div class="container pt-5">
        <div class="row">
            <div class="col-4">
                <h2>Nueva ciudad</h2>
                <form action="controllers/ciudad_controller.php?action=create" method="POST">
                    <div class="form-group">
                        <label for="inputCiudad">Nombre ciudad</label>
                        <input type="text" class="form-control" name="ciudad" id="inputCiudad" placeholder="Ingresar nombre ciudad">
                    </div>
                    <div class="form-group">
                        <label for="inputPais">Pais</label>
                        <input type="text" class="form-control" name="pais" id="inputPais" placeholder="Ingresar pais">
                    </div>
                    <div class="form-group">
                        <label for="inputHabitantes">Cantidad habitantes</label>
                        <input type="number" class="form-control" name="habitantes" id="inputHabitantes" placeholder="Ingresar cantidad habitantes">
                    </div>
                    <div class="form-group">
                        <label for="inputSuperficie">Superficie</label>
                        <input type="number" step="0.01" class="form-control" name="superficie" id="inputSuperficie" placeholder="Ingresar superficie">
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" name="tieneMetro" id="inputMetro">
                        <label class="form-check-label" for="inputMetro">Tiene metro</label>
                    </div>
                    <div class="d-grid gap-2">
                        <button type="submit" class="btn btn-primary">Guardar</button>
                    </div>
                </form>
            </div>
            <div class="col-8">
                <h2>Listado de ciudades</h2>

                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Ciudad</th>
                            <th scope="col">Pais</th>
                            <th scope="col">Habitantes</th>
                            <th scope="col">Superficie</th>
                            <th scope="col">Tiene metro</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        require_once 'connection.php';

                        $query = "SELECT * FROM ciudad";
                        $listaCiudades = $connection->query($query);

                        // while ($ciudad = $listaCiudades->fetch_assoc()) {
                        foreach ($listaCiudades as $ciudad) {
                        ?>
                            <tr>
                                <th scope="row"><?php echo $ciudad['id']; ?></th>
                                <td><?php echo $ciudad['ciudad']; ?></td>
                                <td><?php echo $ciudad['pais']; ?></td>
                                <td><?php echo $ciudad['habitantes']; ?></td>
                                <td><?php echo $ciudad['superficie']; ?></td>
                                <td><?php echo $ciudad['tieneMetro']; ?></td>
                                <td>
                                    <a href="edit_ciudad.php?id=<?php echo $ciudad['id']; ?>" class="btn btn-warning btn-sm">Editar</a>
                                    <a href="controllers/ciudad_controller.php?action=delete&id=<?php echo $ciudad['id']; ?>" class="btn btn-danger btn-sm">Eliminar</a>
                                </td>
                            </tr>
                        <?php
                        }

                        $connection->close();
                        ?>
                    </tbody>
                </table>
            </div>
        </div>


    </div>


</body>

</html>