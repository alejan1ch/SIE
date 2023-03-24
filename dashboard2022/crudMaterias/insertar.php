<?php
include("conexion.php");
$con=conectar();



$nm=$_POST['nm'];
$cv=$_POST['cv'];
$satca=$_POST['satca'];
$car=$_POST['car'];

$sqlid="SELECT carrera_id from carreras where nombre_car='$car'";
$query=mysqli_query($con,$sqlid);

if($query){
    $row = mysqli_fetch_array($query);
    
    $sql="INSERT INTO materias (nombre_mat,clave_asignatura,satca,carrera)values('$nm','$cv','$satca',$row[carrera_id])";
    $query= mysqli_query($con,$sql);

}else{}




if($query){
    Header("Location: ../index2.php");
    
}else {
}
?>