<?php

include("conexion.php");
$con=conectar();

$id=$_POST['id'];
$alumno_nc=$_POST['alumno_nc'];
$nombre_alum=$_POST['nombre_alum'];
$apellido_pat=$_POST['apellido_pat'];
$apellido_mat=$_POST['apellido_mat'];
$semestre=$_POST['semestre'];
$telefono=$_POST['telefono'];

$sql="UPDATE alumnos SET alumno_nc='$alumno_nc', nombre_alum='$nombre_alum', apellido_pat='$apellido_pat', apellido_mat='$apellido_mat',  semestre='$semestre', telefono='$telefono' WHERE id='$id'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: ../index.php");
    }
?>