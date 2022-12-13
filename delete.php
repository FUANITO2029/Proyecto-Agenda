<?php
include("conexion.php");
$id = $_POST['fech_id'];
$usuario = $_POST['fech_usu_id'];

$sql = "DELETE FROM fechas WHERE fech_id = ? AND fech_usu_id =?";
$sentencia_eliminar = $pdo->prepare($sql);
$sentencia_eliminar->execute(array($id, $usuario));

if($sentencia_eliminar){
    Header("Location: index.php");
}
else
{
    echo $sentencia_eliminar;
}
?>