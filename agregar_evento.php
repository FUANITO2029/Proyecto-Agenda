<?php
    include_once 'conexion.php';

    session_start();

    $fech_dia = $_POST['fech_dia'];
    $fech_hora = $_POST['fech_hora'].":00";
    $fech_des = $_POST['fech_des'];
    $fech_titulo = $_POST['fech_titulo'];

    if ($fech_titulo == null) {
        echo 'ERROR: ESCRIBA UN TITULO';
        header('refresh:2, ./index.php');
        die();
    } else if ( $fech_dia == null) {
        echo 'ERROR: SELECCIONE UN DIA';
        header('refresh:2, ./index.php');
        die();
    } else if ( $fech_hora == null) {
        echo 'ERROR: SELECCIONE UNA HORA';
        header('refresh:2, ./index.php');
        die();
    }  else if ( $fech_des == null) {
        echo 'ERROR: Agregue una descripcion';
        header('refresh:2, ./index.php');
        die();
    }

    // Verificar si el usuairo existe
    $sql = "SELECT * FROM usuarios WHERE usu_nombre = ?";
    $sentencia_sql = $pdo->prepare($sql);
    $sentencia_sql->execute(array($_SESSION["uso_nombre"]));
    $resultado = $sentencia_sql->fetch();
    $fech_usu_id = $resultado['usu_id'];

    $sql_agregar = "INSERT INTO fechas(fech_dia, fech_hora, fech_des, fech_titulo, fech_usu_id) VALUES (?, ?, ?, ?, ?)";
    $sentencia_agregar = $pdo->prepare($sql_agregar);
    $sentencia_agregar->execute(array($fech_dia, $fech_hora, $fech_des, $fech_titulo, $fech_usu_id));

    echo $fech_dia, $fech_hora, $fech_des, $fech_titulo, $fech_usu_id;
    echo 'SE REGISTRÓ UN NUEVO EVENTO';
        
    // Destruir las variables de conexión 
    $sentencia_agregar = null;
    $pdo = null;

    header('refresh:2, ./index.php');