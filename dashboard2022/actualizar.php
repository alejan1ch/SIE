<?php require_once "vistas/vistaSuperior.php";?>
<?php 
    include("crudAlumno/conexion.php");
    $con=conectar();

$id=$_GET['id'];

$sql="SELECT * FROM alumnos WHERE id='$id'";
$query=mysqli_query($con,$sql);

$row=mysqli_fetch_array($query);
?>


                <div class="container mt-5">
                    <form action="crudAlumno/update.php" method="POST">
                    
                                <input type="hidden" name="id" value="<?php echo $row['id']  ?>">
                            
                                <input type="text" class="form-control mb-3" name="alumno_nc" placeholder="Numero de Control" value="<?php echo $row['alumno_nc']  ?>">
                                <input type="text" class="form-control mb-3" name="nombre_alum" placeholder="Nombre" value="<?php echo $row['nombre_alum']  ?>">
                                <input type="text" class="form-control mb-3" name="apellido_pat" placeholder="Apellido Paterno" value="<?php echo $row['apellido_pat']  ?>">
                                <input type="text" class="form-control mb-3" name="apellido_mat" placeholder="Apellido Materno" value="<?php echo $row['apellido_mat']  ?>">
                                <input type="text" class="form-control mb-3" name="semestre" placeholder="Semestre" value="<?php echo $row['semestre']  ?>">
                                <input type="text" class="form-control mb-3" name="telefono" placeholder="Telefono" value="<?php echo $row['telefono']  ?>">
                            <input type="submit" class="btn btn-primary btn-block" value="Editar">
                    </form>
                    
                </div>
  


<?php require_once "vistas/vistaInferior.php";?>