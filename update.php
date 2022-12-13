<?php
include("conexion.php");
$id = $_POST['fech_id'];
$dia = $_POST['fech_dia'];
$hora = $_POST['fech_hora'];
$descripcion = $_POST['fech_des'];
$titulo = $_POST['fech_titulo'];
$usuario = $_POST['fech_usu_id'];

$sql = "UPDATE fechas SET fech_dia = ?, fech_hora = ?, fech_des=?,fech_titulo=?  WHERE fech_id = ? AND fech_usu_id =?";
$sentencia_actualizar = $pdo->prepare($sql);
$sentencia_actualizar->execute(array($dia, $hora, $descripcion, $titulo, $id, $usuario));

if($sentencia_actualizar){
    Header("Location: index.php");
}
else
{
    echo $sentencia_actualizar;
}
?>