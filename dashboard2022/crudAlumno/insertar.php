<?php
include("conexion.php");
$con=conectar();


$alumno_nc=$_POST['alumno_nc'];
$nombre_alum=$_POST['nombre_alum'];
$apellido_pat=$_POST['apellido_pat'];
$apellido_mat=$_POST['apellido_mat'];
$semestre=$_POST['semestre'];
$telefono=$_POST['telefono'];;



$sql="SELECT * from alumnos where alumno_nc='$alumno_nc' ";
$query=mysqlI_query($con,$sql);

if(mysqli_num_rows($query)==0){
    $sql="insert into alumnos (alumno_nc,nombre_alum,apellido_pat,apellido_mat,semestre,telefono)values('$alumno_nc','$nombre_alum','$apellido_pat','$apellido_mat','$semestre','$telefono')";
    $query=mysqli_query($con,$sql);
}else{
}

if($query){
    Header("Location: ../index.php");
    
}else {
}
?>
