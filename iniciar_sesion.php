<?php
  include_once 'conexion.php';

  $usuario_login = $_POST['usu_nombre'];
  $contrasena = $_POST['usu_contrasena'];

  // Verificar si el usuairo existe
  $sql = 'SELECT * FROM usuarios WHERE usu_nombre = ?';
  $sentencia_sql = $pdo->prepare($sql);
  $sentencia_sql->execute(array($usuario_login));
  $resultado = $sentencia_sql->fetch();

  if(!$resultado){
    echo 'EL USUARIO NO EXISTE';
    header('refresh: 2, ./acceder.php');
  }else{
    if ($contrasena == $resultado['usu_contrasena']){
      session_start();
      $_SESSION["uso_nombre"] = $usuario_login;
      $_SESSION["usu_id"] = $resultado['usu_id'];
      header('Location: index.php');
    }else {
      echo 'CONTRASEÑA INCORRECTA';
      header('refresh:2, ./acceder.php');
    }
  }
?>