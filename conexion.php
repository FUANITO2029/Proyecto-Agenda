<?php

    
    $link = 'mysql:host=localhost; dbname=agenda';
    $usuario = 'root';
    $pass = 'root';

    try{
        $pdo = new PDO($link, $usuario, $pass);
        //echo 'conectado';
    }catch(PDOException $e) {
        // con el punto se concatena
        print "Error" . $e->getMessage() . "<br/>";
        die();
    }

    /*
    function conectar(){
        $host = "localhost:3306";
        $user = "root";
        $pass = "root";
        $db = "agenda";
        $conn = mysqli_connect($host, $user, $pass);
        mysqli_select_db($conn, $db);
        return $conn;
    }*/