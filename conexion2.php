<?php
    function conectar(){
        $host = "localhost:3306";
        $user = "root";
        $pass = "root";
        $db = "agenda";
        $conn = mysqli_connect($host, $user, $pass);
        mysqli_select_db($conn, $db);
        return $conn;
    }