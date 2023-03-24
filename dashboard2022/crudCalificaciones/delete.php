<?php

include("conexion.php");
$con=conectar();

$calificacion_id=$_GET['calificacion_id'];

$sql="DELETE FROM calificacion_alumno  WHERE calificacion_id='$calificacion_id'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: ../index2.php");
    }
?>
