<?php
include("conexion.php");
$con=conectar();



$alumno_nc=$_POST['alumno_nc']; //19230215
$materia_id=$_POST['materia_id']; //1
$calificacion=$_POST['calificacion']; //9


$sqlid="SELECT id from alumnos where alumno_nc='$alumno_nc'";
$query=mysqli_query($con,$sqlid);

if($query){
    $row = mysqli_fetch_array($query);
    
    $sql="INSERT INTO calificacion_alumno (alumno,materia,calificacion)values($row[id],$materia_id,$calificacion)";
    $query= mysqli_query($con,$sql);

}else{}




if($query){
    Header("Location: ../index2.php");
    
}else {
}
?>