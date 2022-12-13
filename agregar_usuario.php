<?php
    include_once 'conexion.php';

    $nuevo_usuario = $_POST['usu_nombre'];
    $correo = $_POST['usu_correo'];
    $contrasena = $_POST['usu_contrasena'];

    //$contrasena = password_hash($contrasena, PASSWORD_DEFAULT);
    //echo $contrasena;

    if ($nuevo_usuario == null){
        echo 'ERROR: ESCRIBA UN NOMBRE DE USUARIO';
        header('refresh:2, ./registrar.php');
        die();
    }else if($correo == null){
        echo 'ERROR: ESCRIBA UN CORREO';
        header('refresh:2, ./registrar.php');
        die();
    }else if($contrasena == null){
        echo 'ERROR: ESCRIBA UNA CONTRASENA';
        header('refresh:2, ./registrar.php');
        die();
    }   
    
    // Verificar si el usuairo existe
    $sql = 'SELECT * FROM usuarios WHERE usu_nombre = ?';
    $sentencia_sql = $pdo->prepare($sql);
    $sentencia_sql->execute(array($nuevo_usuario));
    $resultado = $sentencia_sql->fetch();

    if($resultado){
        echo 'EL NOMBRE DEL USUARIO YA EXISTE';
        header('refresh:2, ./registrar.php');
        die(); 
    }else{
        $sql_agregar = 'INSERT INTO usuarios(usu_nombre, usu_correo, usu_contrasena) VALUES (?,?,?)';
        $sentencia_agregar = $pdo->prepare($sql_agregar);
        $sentencia_agregar->execute(array($nuevo_usuario, $correo, $contrasena));

        echo 'SE REGISTRÓ UN NUEVO EVENTO';
        
        // Destruir las variables de conexión 
        $sentencia_agregar = null;
        $pdo = null;
        
        session_start();
        $_SESSION["uso_nombre"] = $nuevo_usuario;

        header('refresh:2, ./index.php');
    } 
?>