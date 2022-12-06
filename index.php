<?php
    /*/
    session_start();

    // Verificamos si hay sésion de usuairo
    
    if (isset($_SESSION['admin'])){
    }else {
        header('Location: registrar.php');
    } 
    */

    include_once 'conexion.php';
    

?>  

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proyecto calendario 🤣</title>
</head>
<body>
    <span>hola</span>
</body>
</html>