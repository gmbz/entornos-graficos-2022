<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

    <title>Editar</title>
</head>

<body>

    <?php
    include_once "header.php";
    ?>

    <div class="container pt-5">
        <h2>Editar ciudad</h2>
        <?php
        require 'connection.php';

        $query = "SELECT * FROM ciudad WHERE id=?";
        $stmt =  $connection->prepare($query);
        $stmt->bind_param('i', $_GET['id']);

        $stmt->execute();

        $resultSet = $stmt->get_result();
        $ciudad = $resultSet->fetch_assoc();

        $stmt->close();
        $resultSet->close();
        $connection->close();

        ?>
        <form action="controllers/ciudad_controller.php?action=update" method="POST">
            <input type="hidden" name="idCiudad" value="<?php echo $ciudad['id'] ?>">
            <div class="form-group">
                <label for="inputCiudad">Nombre ciudad</label>
                <input type="text" class="form-control" name="ciudad" value="<?php echo $ciudad['ciudad'] ?>" id="inputCiudad" placeholder="Ingresar nombre ciudad">
            </div>
            <div class="form-group">
                <label for="inputPais">Pais</label>
                <input type="text" class="form-control" name="pais" value="<?php echo $ciudad['pais'] ?>" id="inputPais" placeholder="Ingresar pais">
            </div>
            <div class="form-group">
                <label for="inputHabitantes">Cantidad habitantes</label>
                <input type="number" class="form-control" name="habitantes" value="<?php echo $ciudad['habitantes'] ?>" id="inputHabitantes" placeholder="Ingresar cantidad habitantes">
            </div>
            <div class="form-group">
                <label for="inputSuperficie">Superficie</label>
                <input type="number" step="0.01" class="form-control" name="superficie" value="<?php echo $ciudad['superficie'] ?>" id="inputSuperficie" placeholder="Ingresar superficie">
            </div>
            <div class="form-check">
                <input type="checkbox" class="form-check-input" name="tieneMetro" value="<?php echo $ciudad['tieneMetro'] ?>" id="inputMetro">
                <label class="form-check-label" for="inputMetro">Tiene metro</label>
            </div>
            <div class="d-grid gap-2">
                <button type="submit" class="btn btn-primary">Actualizar</button>
            </div>
        </form>
    </div>
</body>

</html>