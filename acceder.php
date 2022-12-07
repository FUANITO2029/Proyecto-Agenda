<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesión</title>
</head>
<body>
    <div class="iniciar_session">
        <form action="iniciar_sesion.php" method="POST">
            <label for="usuario">Usuario</label>
            <input type="text" name="usu_nombre" id="usuario" placeholder="Nombre de usuario">

            <label for="contrasena">Contraseña</label>
            <input type="pass" name="usu_contrasena" id="contrasena" placeholder="Contraseña">

            <button type="submit">Acceder</button>
        </form>

        <span><a href="registrar.php">Crear cuenta</a></span>
    </div>
</body>
</html>