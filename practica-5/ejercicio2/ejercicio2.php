<!DOCTYPE html>
<html lang="es-AR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../main.css">
    <title>Contacto</title>
</head>
<body>
    <div align="center" class="card">
        <form action="contact.php" method="POST" class="form">
            <div>
                <label for="inputEmail">Direccion email</label>
                <input type="text" id="inputEmail" name="email" placeholder="Ingresar email" class="formEntry">
            </div>
            <div>
                <label for="inputNombre">Nombre y apellido</label>
                <input type="text" id="inputNombre" name="nombre" placeholder="Ingresar nombre y apellido" class="formEntry">
            </div>
            <div>
                <label for="inputAsunto">Asunto</label>
                <input type="text" id="inputAsunto" name="asunto" placeholder="Ingresar asunto" class="formEntry">
            </div>
            <div>
                <label for="inputContenido">Contenido del email</label>
                <textarea name="contenido" id="inputContenido" cols="30" rows="10" class="message"></textarea>
            </div>
            <button type="submit" class="submit">Submit</button>
        </form>
    </div>
</body>
</html>