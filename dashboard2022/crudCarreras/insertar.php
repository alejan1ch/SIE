<?php
include("conexion.php");
$con=conectar();



$nombre_car=$_POST['nombre_car'];




$sql="insert into carreras (nombre_car)values('$nombre_car')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: ../index2.php");
    
}else {
}
?>