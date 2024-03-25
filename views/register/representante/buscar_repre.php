

<!-- Tabla de busqueda del listado de alumnos -->
<main>

    <div class="row container-fluid d-flex px-1">
        <div class="col-xl-7">
            <div class="control container">
                <center>
                <h2><b> Búsqueda de Representante(s) </b></h2>
                </center>
                
            </div>
        </div>

        <div class="col-xl-5">
            <div class="control">

                <div class="row">
                    <div class="col-md-auto" style="display: flex; align-content: stretch; justify-content: space-evenly;">
                        <form class="control-search" action="repre.php" method=post>
                            <input class="searchText" type="search" name="search" placeholder="Buscar Repre" style="width: 190px;">
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
                    <th>Teléfono</th>
                    <th>Correo</th>
                    <th>Opciones</th>
                    
                </tr>
            </thead>

            <tbody>

                <?php 

                $buscar = $_POST['search'];

                $sql_buscar = mysqli_query($conexion,"SELECT cedula, primer_nombre, segundo_nombre, primer_apellido, segundo_apellido,
                telefono, correo FROM representante 
                where cedula like '%".$buscar."%' or primer_nombre like '%".$buscar."%' or 
                primer_apellido like '%".$buscar."%' ORDER BY cedula ASC;");

                $result = mysqli_num_rows($sql_buscar);

                if($result > 0)
                {
                while ($dato = mysqli_fetch_array($sql_buscar)  ) { ?> 

                <tr>

                <td><?php echo $dato['cedula'];?></td>
                    <td><?php echo $dato[1]; echo "" ; echo $dato["segundo_nombre"]; ?></td>                    
                    <td><?php echo $dato["primer_apellido"]; echo" "; echo $dato["segundo_apellido"]; echo" "?></td>
                    <td><?php echo $dato['telefono'];?></td>
                    <td><?php echo $dato['correo'];?></td>
                    

                    <td>
                        <a href="../register/representante/config/edit_repre.php?cedula=<?= $dato['cedula'] ?>" class="btn btn-warning">
                            Editar
                        </a>                        
                        <a href="../register/representante/config/delete_repre.php?cedula=<?= $dato['cedula'] ?>" class="btn btn-danger">
                            Eliminar
                        </a>                          
                    </td>

                </tr>

                <?php } }?>

            </tbody>
        </table>
    </div>

    <div class="wave"></div>

</main>

