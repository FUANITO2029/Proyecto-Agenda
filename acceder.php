<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./CSS/style2.css">
    <title>Iniciar Sesión</title>
</head>
<body>
    <div class="iniciar_sesion">
        <div class="contenedor"> 
            <div class="encabezado">
                <h1>INICIA SESIÓN</h1>
            </div>

            <form action="iniciar_sesion.php" method="POST" class="form">
                <p>
                    <label for="usuario">Nombre</label><br>
                    <input type="text" name="usu_nombre" id="usuario" placeholder="Escribe tu nombre de usuario">
                </p>
                
                <p>
                    <label for="contrasena">Contraseña</label><br>
                    <input type="pass" name="usu_contrasena" id="contrasena" placeholder="Escribe tu contraseña">
                </p>
                
                <p class="boton">
                    <button type="submit">ACCEDER</button>
                </p>            
            </form>

            <p class="registrar"><a href="registrar.php">Crear una nueva cuenta</a></p>

        </div>
    </div>
</body>
</html>