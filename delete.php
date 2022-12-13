<?php
include("conexion2.php");
$conn = conectar();
$id = $_GET['id'];
$usu = $_GET['usu'];

$sql = "DELETE FROM fechas WHERE fech_id = '$id' AND fech_usu_id = '$usu'";
$query = mysqli_query($conn, $sql);

if($query){
    Header("Location: index.php");
}
else
{
    echo $query;
}
?>