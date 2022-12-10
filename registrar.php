<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./CSS/style2.css">
    <title>registar usuario</title>
</head>
<body>
    <div class="regisrar_sesion">
        <div class="contenedor">
            <div class="encabezado">
                <h1>CREA TU CUENTA</h1>
            </div>
            
            <form action="agregar_usuario.php" method="POST" class="form">
                <label for="nombre" >Nombre</label>
                <input type="text" name="usu_nombre" id="nombre" placeholder="Escribe tu nombre de usuario">

                <label for="correo">Correo</label>
                <input type="text" name="usu_correo" id="correo" placeholder="Escribe tu correo">

                <label for="contrasena">Contraseña</label>
                <input type="pass" name="usu_contrasena" id="contrasena" placeholder="Escribe tu contraseña">
                
                <p class="boton">
                    <button type="submit">REGISTRAR</button>
                </p>
            </form>


        </div>
    </div>

</body>
</html>