<?php

require_once('../../config.php');

?>

<!-- Tabla con el listado de Estudiantes -->
<main>

    <div class="row container-fluid d-flex px-1">
        <div class="col-xl-5">
            
            <div class="control container">
                <center>
                <h2><b> Lista de Estudiantes</b></h2>
                </center>
                
            </div>
        </div>


        <div class="col-xl-7">
            <div class="control">

                <div class="row">
                    <div class="col-md-auto" style="display: flex; align-content: stretch; justify-content: space-evenly;">
                        <form class="control-search" action="student.php" method=post>
                            <input class="searchText" type="search" name="search" placeholder="Buscar Estudiante" style="width: 190px;">
                            <input class="searchSubmit" type="submit" value="Buscar">
                        </form>
                    </div>

                    <div class="col-md-auto" style="display: flex; align-items: center;">
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#ModalStudent">
                            Agregar Nuevo Estudiante 
                        </button>
                    </div>  
                
                </div>
                
            </div>
        </div>
    </div>

    <div class="table-circle table-responsive text-nowrap">
        <table class="table table-hover table-bordered">
            <thead class="table table-sm">

            <?php

            $query_register = mysqli_query($conexion,"SELECT COUNT(*) as total_registros FROM estudiante;");
            $result_query = mysqli_fetch_array($query_register);
            $total_registros = $result_query['total_registros'];
            ?> <h5><figcaption class="figure-caption">Cantidad de estudiantes: <?php echo $total_registros; ?></figcaption></h5>
            <br>

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
                //Paginador
                $query_register = mysqli_query($conexion,"SELECT COUNT(*) as total_registro FROM estudiante");
                $result_query = mysqli_fetch_array($query_register);
                $total_registro = $result_query['total_registro'];

                $por_pagina = 20;

                if(empty($_GET['pagina']))
                {
                    $pagina = 1;
                }else{
                    $pagina = $_GET['pagina'];
                }

                $inicio_pag = ($pagina-1) * $por_pagina;
                $total_pag = ceil($total_registro / $por_pagina);

                $sql = mysqli_query($conexion,"SELECT cedula, primer_nombre, primer_apellido, 
                TIMESTAMPDIFF(YEAR, fecha_nacimiento, CURDATE()) AS 'edad', parroquia from estudiante
                ORDER BY cedula ASC LIMIT $inicio_pag,$por_pagina;");
                
                $result = mysqli_num_rows($sql);
                if($result > 0)
                {
                while ($data = mysqli_fetch_array($sql)) { ?> 

                <tr>

                    <td><?php echo $data['cedula'];?></td>
                    <td><?php echo $data['primer_nombre'];?></td>
                    <td><?php echo $data['primer_apellido'];?></td>
                    <td><?php echo $data['edad'];?></td>
                    <td><?php echo $data['parroquia'];?></td>

                    <td>
                       
                                     
                        <a href="../register/student/config/edit_student.php?cedula=<?= $data['cedula'] ?>" class="btn btn-warning">
                            Editar
                        </a>                        
                        <a href="../register/student/config/delete_student.php?cedula=<?= $data['cedula'] ?>" class="btn btn-danger">
                            Eliminar
                        </a>  

                        <a href="../register/student/config/seemore_student.php?cedula=<?= $data['cedula'] ?>" class="btn btn-success">
                            Ver Más
                        </a>  
                    </td>

                </tr>

                <?php } }?>

            </tbody>
        </table>
    </div>

    <div>
        <ul style="display: inline-flex;">
            <?php 
                if($pagina != 1)
                {
            ?>
                <li class="table-number"><a href="?pagina=<?php echo 1; ?>">|<</a></li>
                <li class="table-number"><a href="?pagina=<?php echo $pagina-1; ?>"><<</a></li>
            <?php 
                }
                for ($i=1; $i <= $total_pag; $i++) { 
                    if($i == $pagina)
                    {
                        echo '<li class="table-number">'.$i.'</li>';
                    }else{
                        echo '<li class="table-number"><a href="?pagina='.$i.'">'.$i.'</a></li>';
                    }
                }

                if($pagina != $total_pag)
                {
            ?>
                <li class="table-number"><a href="?pagina=<?php echo $pagina + 1; ?>">>></a></li>
                <li class="table-number"><a href="?pagina=<?php echo $total_pag; ?> ">>|</a></li>
            <?php } ?>
        </ul>
    </div>

    <div class="wave"></div>

    <?php 
        include_once("../register/student/modal_student.php"); 
    ?>

    <?php 
        include_once("../register/student/modal_student_seemore.php"); 
    ?>



<style>
    .my-modal {
        height 50vh;
        width 50vw;
        display: flex;
        justify-content: center;
        align-items: center;
        background-color: red;
    }
</style>
                        <script>
                            const $modal = document.querySelectorAll('.modal')
                            for (modal of $modal) {
                                modal.addEventListener('click', () => {
                                    $modal.classList.add('my-modal')
                                })
                            }
                        </script>
</main>
