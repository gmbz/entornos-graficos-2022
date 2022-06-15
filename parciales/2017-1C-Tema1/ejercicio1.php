<?php
require_once "head.php";
?>

<div class="container">
    <form action="edit.php" method="post">
        <div class="form-group">
            <label for="inputApellido">Apellido</label>
            <input type="text" name="apellido" id="inputApellido">
        </div>
        <div class="form-group">
            <label for="inputDiasConsultas">Dias Consultas</label>
            <input type="text" name="diasConsultas" id="inputDiasConsultas">
        </div>
        <button type="submit" class="btn btn-primary">Enviar</button>
    </form>
</div>


</body>

</html>