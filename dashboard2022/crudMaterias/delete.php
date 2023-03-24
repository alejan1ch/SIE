<?php

include("conexion.php");
$con=conectar();

$materia_id=$_GET['materia_id'];

$sql="DELETE FROM materias  WHERE materia_id='$materia_id'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: ../index2.php");
    }
?>
