<?php
    session_start();
    print "<p>SESIÓN CERRADA  $_SESSION[uso_nombre] <P>\n";
    session_destroy();
    header('refresh:2, ./acceder.php');
