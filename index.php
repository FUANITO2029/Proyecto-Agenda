<?php
    
    session_start();

    // Verificamos si hay sésion de usuairo
    
    if (isset($_SESSION["uso_nombre"])){
        //print "<p>Bien venido $_SESSION[uso_nombre] <P>\n";
    }else {
        header('Location: acceder.php');
    } 

    include_once 'conexion.php';
    

?>  

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agenda</title>
    <link rel="stylesheet" href="./CSS/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Ubuntu:wght@300;400;500;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Ubuntu:wght@300;400;500&display=swap" rel="stylesheet">
  </head>
<body>
    <div class="menu-izquierdo">
      <div class="usuario">
        <div>
          <img src="./IMG/user.png" class="usu-img">
        </div>
        <div class="usu-nombre"><?php print "<p>$_SESSION[uso_nombre]</p>" ?></div>
      </div>
      <div class="boton-div">
        <a href="./cerrar_sesion.php">
        <button class="cerrar-sesion">
          Cerrar sesión
        </button>
        </a>
      </div>
      <div class="clima"></div>
    </div>
    <div class="principal">
      <div class="mes">
        <div class="botones">
          <button class="sig-ant-btn">
            <i class="fa-solid fa-angle-left fa-2xl"></i>             
            <a href="#"></a>
          </button>
          <button class="sig-ant-btn"> 
            <i class="fa-solid fa-angle-right fa-2xl"></i>
          </button>
        </div>
        <div class="mes-nombre">
          Diciembre
        </div>
      </div>
      <div class="entradas">
        
      </div>
    </div>
</body>

<script src="https://kit.fontawesome.com/a552314827.js" crossorigin="anonymous"></script>

</html>