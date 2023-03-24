<?php require_once "vistas/vistaSuperior.php";?>
<?php 
    include("crudCarreras/conexion.php");
    $con=conectar();

    $sqlc="SELECT *  from carreras";
    $queryc=mysqli_query($con,$sqlc);

    $sqlm="SELECT materia_id,nombre_mat,clave_asignatura,satca,nombre_car from materias m, carreras c where m.carrera = c.carrera_id";
    $querym=mysqli_query($con,$sqlm);

    $sqlca="SELECT calificacion_id,alumno_nc,nombre_alum,apellido_pat,apellido_mat,nombre_mat,calificacion from calificacion_alumno c,alumnos a, materias m where c.alumno = a.id and c.materia = m.materia_id";
    $queryca=mysqli_query($con,$sqlca);

?>
<!--INICIO CONTENIDO PRINCIPAL-->
<div class="container mt-5">
    <div class="row"> 
         <div class="col-lg-2">
                <div class="table-responsive">
                    <h3>Nueva Carrera</h3>
                       <form action="crudCarreras/insertar.php" method="POST">
                             <input type="text" class="form-control mb-3" name="nombre_car" placeholder="Carrera">
                             <input type="submit" class="btn btn-primary " value="Agregar">   
                         </form>
                 </div>
         </div>
         <div class="col-lg-10">
             <div class="table-responsive">
                 <h3>Carrera</h3>
                  <table id="tablaCarreras" class="cell-border compact stripe" border=1 >
                       <thead class="table-success table-striped" >
                           <tr>
                                        
                                        <th>CARRERA</th>
                                        <th></th>
                                    </tr>
                                </thead>

                                <tbody>
                                        <?php
                                            while($row=mysqli_fetch_array($queryc)){
                                        ?>
                                            <tr>
                                                <?php   $row['carrera_id']?>
                                                <th><?php  echo $row['nombre_car']?></th>
                                                    
                                              <!--  <th><a href="actualizar.php?id=<?php echo $row['carrera_id'] ?>" class="btn btn-info">Editar</a></th>-->
                                                <th><a href="crudCarreras/delete.php?carrera_id=<?php echo $row['carrera_id'] ?>" class="btn btn-danger">Eliminar</a></th>                                        
                                            </tr>
                                        <?php 
                                            }
                                        ?>
                                </tbody>
                     </table>
                                      </div>
         </div>
         
         <div class="col-lg-2">
                <div class="table-responsive">
                    <h3>Nueva Materia</h3>
                       <form action="crudMaterias/insertar.php" method="POST">
                             <input type="text" class="form-control mb-3" name="nm" placeholder="Materia">
                             <input type="text" class="form-control mb-3" name="cv" placeholder="Clave">
                             <input type="text" class="form-control mb-3" name="satca" placeholder="SATCA">
                             <input type="text" class="form-control mb-3" name="car" placeholder="Carrera">
                            
                             <input type="submit" class="btn btn-primary " value="Agregar">   
                         </form>
                 </div>
         </div>
         <div class="col-lg-10">
            <div class="table-responsive">
              <h3>Materias</h3>
                  <table id="tablaMateria" class="cell-border compact stripe" border=1 >
                       <thead class="table-success table-striped" >
                           <tr>
                                        <th>ID</th>
                                        <th>MATERIA</th>
                                        <th>ClAVE</th>
                                        <th>SATCA</th>
                                        <th>CARRERAS</th>
                                        <th></th>
                                    </tr>
                                </thead>

                                <tbody>
                                        <?php
                                            while($row=mysqli_fetch_array($querym)){
                                        ?>
                                            <tr>
                                               <th><?php echo  $row['materia_id']?></th>
                                                <th><?php  echo $row['nombre_mat']?></th>
                                                <th><?php  echo $row['clave_asignatura']?></th>
                                                <th><?php  echo $row['satca']?></th>
                                                <th><?php  echo $row['nombre_car']?></th>
                                                
                                              <!--  <th><a href="actualizar.php?materia_id=<?php echo $row['materia_id'] ?>" class="btn btn-info">Editar</a></th>-->
                                                <th><a href="crudMaterias/delete.php?materia_id=<?php echo $row['materia_id'] ?>" class="btn btn-danger">Eliminar</a></th>                                        
                                            </tr>
                                        <?php 
                                            }
                                        ?>
                                </tbody>
                     </table>
                </div>
         </div>
       

         <div class="col-lg-2">
                <div class="table-responsive">
                    <h3>Nueva Calificiación</h3>
                       <form action="crudCalificaciones/insertar.php" method="POST">
                             <input type="text" class="form-control mb-3" name="alumno_nc" placeholder="Numero de Cotrol">
                             <input type="number" class="form-control mb-3" name="materia_id" placeholder="IDMateria">
                             <input type="number" class="form-control mb-3" name="calificacion" placeholder="Calificacion">
                             <input type="submit" class="btn btn-primary " value="Agregar">   
                         </form>
                 </div>
         </div>
         <div class="col-lg-10">
            <div class="table-responsive">
              <h3>Calificaciones</h3>
                  <table id="tablaCalificaciones" class="cell-border compact stripe" border=1 >
                       <thead class="table-success table-striped" >
                           <tr>
                                        
                                        <th>NUMERO DE CONTROL</th>
                                        <th>NOMBRE</th>
                                        <th>APELLIDO PATERNO</th>
                                        <th>APELLIDO MATERNO</th>
                                        <th>MATERIA</th>
                                        <th>CALIFICACION</th>
                                        <th></th>
                                    </tr>
                                </thead>

                                <tbody>
                                        <?php
                                            while($row=mysqli_fetch_array($queryca)){
                                        ?>
                                            <tr>
                                                <?php   $row['calificacion_id']?>
                                                <th><?php  echo $row['alumno_nc']?></th>
                                                <th><?php  echo $row['nombre_alum']?></th>
                                                <th><?php  echo $row['apellido_pat']?></th>
                                                <th><?php  echo $row['apellido_mat']?></th>
                                                <th><?php  echo $row['nombre_mat']?></th>
                                                <th><?php  echo $row['calificacion']?></th>
                                                
                                              <!--  <th><a href="actualizar.php?calificacion_id=<?php echo $row['calificacion_id'] ?>" class="btn btn-info">Editar</a></th>-->
                                                <th><a href="crudCalificaciones/delete.php?calificacion_id=<?php echo $row['calificacion_id'] ?>" class="btn btn-danger">Eliminar</a></th>                                        
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
<script>
     $(document).ready(function() {
     $('#tablaCarreras').DataTable({
      "language": {
        "url": "//cdn.datatables.net/plug-ins/1.10.15/i18n/Spanish.json"
            }
         });
        });
  </script>
<script>
    $(document).ready(function() {
    $('#tablaMateria').DataTable({
      "language": {
        "url": "//cdn.datatables.net/plug-ins/1.10.15/i18n/Spanish.json"
      }
    });
  });
  </script>
<script>
    $(document).ready(function() {
    $('#tablaCalificaciones').DataTable({
      "language": {
        "url": "//cdn.datatables.net/plug-ins/1.10.15/i18n/Spanish.json"
      }
    });
  });
  </script>







