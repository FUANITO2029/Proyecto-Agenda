<?php
    include_once 'conexion.php';

    $nuevo_usuario = $_POST['usu_nombre'];
    $correo = $_POST['usu_correo'];
    $contrasena = $_POST['usu_contr'];

    //$contrasena = password_hash($contrasena, PASSWORD_DEFAULT);
    //echo $contrasena;

    // Verificar si el usuairo existe
    $sql = 'SELECT * FROM usuarios WHERE usu_nombre = ?';
    $sentencia_sql = $pdo->prepare($sql);
    $sentencia_sql->execute(array($nuevo_usuario));
    $resultado = $sentencia_sql->fetch();

    if($resultado){
        echo 'El usuario ya existe';
        die();
    }else{
        $sql_agregar = 'INSERT INTO usuarios(usu_nombre, usu_correo, usu_contr) VALUES (?,?,?)';
        $sentencia_agregar = $pdo->prepare($sql_agregar);
        $sentencia_agregar->execute(array($nuevo_usuario, $correo, $contrasena));

        echo 'se agregó el usuario';
        
        // Destruir las variables de conexión 
        $sentencia_agregar = null;
        $pdo = null;
        header('refresh:5, ./index.php');
    }

?>