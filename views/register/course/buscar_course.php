
<!-- Tabla de busqueda del listado de Talleres -->
<main>

    <div class="row container-fluid d-flex px-1">
        <div class="col-xl-7">
            <div class="control container">
                <center>
                <h2><b> Búsqueda de Taller(es) </b></h2>
                </center>
                
            </div>
        </div>

        <div class="col-xl-5">
            <div class="control">

                <div class="row">
                    <div class="col-md-auto" style="display: flex; align-content: stretch; justify-content: space-evenly;">
                        <form class="control-search" action="course.php" method=post>
                            <input class="searchText" type="search" name="search" placeholder="Buscar Taller" style="width: 190px;">
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
                    
                    
                    <th><b>Nombre</b></th>
                    <th><b>Sede</b></th>
                    <th><b>Profesor(es)</b></th> 
                    <th>Opciones</th>
                    
                </tr>

            </thead>

            <tbody>

                <?php 

                $buscar = $_POST['search'];

                $sql_buscar = mysqli_query($conexion,"SELECT taller.id_taller, nombre, sede, 
                primer_nombre, primer_apellido 
                FROM taller, dictado, profesor  
                where profesor.id_prof= dictado.id_prof and dictado.id_taller=taller.id_taller 
                and nombre like '%".$buscar."%'
                ORDER BY id_taller ASC;");
 
                $result = mysqli_num_rows($sql_buscar);

                if($result > 0)
                {
                while ($dato = mysqli_fetch_array($sql_buscar)  ) { ?> 

                <tr>
                    
                    <td> <?php echo $dato['nombre']; ?> </td>
                    <td> <?php echo $dato['sede']; ?></td>
                    <td> <?php echo $dato['primer_nombre']; echo" "; echo $dato['primer_apellido']; ?></td> 

                    <td>
                        <a href="../register/course/config/edit_course.php?id_taller=<?= $dato['id_taller'] ?>" class="btn btn-warning">
                            Editar
                        </a>                        
                        <a href="../register/course/config/delete_course.php?id_taller=<?= $dato['id_taller'] ?>" class="btn btn-danger">
                            Eliminar
                        </a>                         
                        <a href="../register/course/config/seemore_course.php?id_taller=<?= $dato['id_taller'] ?>" class="btn btn-success">
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
