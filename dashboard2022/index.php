<?php require_once "vistas/vistaSuperior.php";?>
<?php 
    include("crudAlumno/conexion.php");
    $con=conectar();

    $sql="SELECT *  from alumnos";
    $query=mysqli_query($con,$sql);
?>
<!--INICIO CONTENIDO PRINCIPAL-->
<div class="container mt-6">
                    <div class="row"> 
                        <div class="col-lg-2">
                       <div class="table-responsive">
                            <h3>Nuevo Alumno</h3>
                                <form action="crudAlumno/insertar.php" method="POST">

                                    <input type="text" class="form-control mb-3" name="alumno_nc" placeholder="Numero de Control">
                                    <input type="text" class="form-control mb-3" name="nombre_alum" placeholder="Nombre">
                                    <input type="text" class="form-control mb-3" name="apellido_pat" placeholder="Apellido Paterno">
                                    <input type="text" class="form-control mb-3" name="apellido_mat" placeholder="Apellido Materno">
                                    <input type="text" class="form-control mb-3" name="semestre" placeholder="Semestre">
                                    <input type="text" class="form-control mb-3" name="telefono" placeholder="Telefono">
                                    
                                    <input type="submit" class="btn btn-primary " value="Agregar">
                                  
                                </form>
                        </div>
                        </div>
                        <div class="col-lg-10">
                        <div class="table-responsive">
                          <h3>Informacion del Alumno</h3>
                            <table id="tablaAlumno" class="cell-border compact stripe" border=1 >
                                <thead class="table-success table-striped" >
                                    <tr>
                                        
                                        <th>NUMERO DE CONTROL</th>
                                        <th>NOMBRE</th>
                                        <th>APELLIDO PATERNO</th>
                                        <th>APELLIDO MATERNO</th>
                                        <th>SEMESTRE</th>
                                        <th>TELEFONO</th>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                </thead>

                                <tbody>
                                        <?php
                                            while($row=mysqli_fetch_array($query)){
                                        ?>
                                            <tr>
                                                <?php   $row['id']?>
                                                <th><?php  echo $row['alumno_nc']?></th>
                                                <th><?php  echo $row['nombre_alum']?></th>
                                                <th><?php  echo $row['apellido_pat']?></th>
                                                <th><?php  echo $row['apellido_mat']?></th>
                                                <th><?php  echo $row['semestre']?></th> 
                                                <th><?php  echo $row['telefono']?></th>     
                                                <th><a href="actualizar.php?id=<?php echo $row['id'] ?>" class="btn btn-info">Editar</a></th>
                                                <th><a href="crudAlumno/delete.php?id=<?php echo $row['id'] ?>" class="btn btn-danger">Eliminar</a></th>                                        
                                            </tr>
                                        <?php 
                                            }
                                        ?>
                                </tbody>
                            </table>
                        </div>
                        </div>
                    </div>  
            </div>
<!--FINAL CONTENIDO PRINCIPAL-->


<?php require_once "vistas/vistaInferior.php";?>