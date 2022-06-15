<?php
require_once "head.php";
?>

<body>
    <div class="container text-center mt-5">
        <form action="edit.php" method="post">
            <div class="form-group mb-3">
                <label for="inputNombre">Nombre</label>
                <input type="text" name="nombre" id="inputNombre">
            </div>
            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
    </div>
</body>

</html>