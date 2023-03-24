<?php

include("conexion.php");
$con=conectar();

$carrera_id=$_GET['carrera_id'];

$sql="DELETE FROM carreras  WHERE carrera_id='$carrera_id'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: ../index2.php");
    }
?>
