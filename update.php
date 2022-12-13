<?php
include("conexion2.php");
$conn = conectar();
$id = $_POST['fech_id'];
$dia = $_POST['fech_dia'];
$hora = $_POST['fech_hora'];
$descripcion = $_POST['fech_des'];
$titulo = $_POST['fech_titulo'];
$usuario = $_POST['fech_usu_id'];

$sql = "UPDATE fechas SET fech_dia = '$dia', fech_hora = '$hora', fech_des='$descripcion',fech_titulo='$titulo'  WHERE fech_id = '$id' AND fech_usu_id ='$usuario'";
$query = mysqli_query($conn, $sql);

if($query){
    Header("Location: index.php");
}
else
{
    echo $query;
}
?>