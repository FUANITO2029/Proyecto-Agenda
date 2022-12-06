<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>registar usuario</title>
</head>
<body>
    <div>
        <p>Crea una cuenta</p>
        
        <form action="agregar_usuario.php" method="POST">
            <label for="nombre" >Nombre</label>
            <input type="text" name="usu_nombre" id="nombre" placeholder="Escribe tu nombre">

            <label for="correo">Correo</label>
            <input type="text" name="usu_correo" id="correo" placeholder="Escribe tu correo">

            <label for="contrasena">Contraseña</label>
            <input type="pass" name="usu_contr" id="contrasena" placeholder="Escribe tu contraseña">

            <button type="submit">Registar</button>
        </form>


    </div>

</body>
</html>