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
