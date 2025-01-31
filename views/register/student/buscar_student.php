

<!-- Tabla de busqueda del listado de alumnos -->
<main>

    <div class="row container-fluid d-flex px-1">
        <div class="col-xl-7">
            <div class="control container">
                <center>
                <h2><b> Búsqueda de Estudiante(s) </b></h2>
                </center>
                
            </div>
        </div>

        <div class="col-xl-5">
            <div class="control">

                <div class="row">
                    <div class="col-md-auto" style="display: flex; align-content: stretch; justify-content: space-evenly;">
                        <form class="control-search" action="student.php" method=post>
                            <input class="searchText" type="search" name="search" placeholder="Buscar Estudiante" style="width: 190px;">
                            <input class="searchSubmit" type="submit" value="Buscar">
                        </form>
                    </div>
                
                </div>
                
            </div>
        </div>
    </div>

    <div class="table-circle table-responsive text-nowrap">
        <table class="table table-hover table-bordered">
            <thead class="table table-sm">

                <tr>
                    
                    <th>Cédula</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Edad</th>
                    <th>Parroquía</th>
                    <th>Opciones</th>
                    
                </tr>
            </thead>

            <tbody>

                <?php 

                $buscar = $_POST['search'];

                $sql_buscar = mysqli_query($conexion,"SELECT cedula, primer_nombre, primer_apellido, 
                TIMESTAMPDIFF(YEAR, fecha_nacimiento, CURDATE()) AS 'edad', parroquia FROM estudiante 
                where cedula like '%".$buscar."%' or primer_nombre like '%".$buscar."%' or 
                primer_apellido like '%".$buscar."%' or edad like '%".$buscar."%' or parroquia like '%".$buscar."%' 
                ORDER BY cedula ASC;");

                $result = mysqli_num_rows($sql_buscar);

                if($result > 0)
                {
                while ($dato = mysqli_fetch_array($sql_buscar)  ) { ?> 

                <tr>

                    <td><?php echo $dato['cedula'];?></td>
                    <td><?php echo $dato['primer_nombre'];?></td>
                    <td><?php echo $dato['primer_apellido'];?></td>
                    <td><?php echo $dato['edad'];?></td>
                    <td><?php echo $dato['parroquia'];?></td>

                    <td>
                        <a href="../register/student/config/edit_student.php?cedula=<?= $dato['cedula'] ?>" class="btn btn-warning">
                            Editar
                        </a>                        
                        <a href="../register/student/config/delete_student.php?cedula=<?= $dato['cedula'] ?>" class="btn btn-danger">
                            Eliminar
                        </a>                          
                        <a href="../register/student/config/seemore_student.php?cedula=<?= $dato['cedula'] ?>" class="btn btn-success">
                            Ver Más
                        </a>  
                    </td>

                </tr>

                <?php } }?>

            </tbody>
        </table>
    </div>

    <div class="wave"></div>

</main>

