<!-- Tabla con el listado de profesores -->
<?php

?>

<main>

    <div class="row container-fluid d-flex px-1">
        <div class="col-xl-5">
            <div class="control container">
                <h2> <b> Lista de Profesores </b> </h2>
            </div>
        </div>

        <div class="col-xl-7">
            <div class="control">

                <div class="row">
                    <div class="col-md-auto" style="display: flex; align-content: stretch; justify-content: space-evenly;">
                        <form class="control-search" action="teacher.php" method=post>
                            <input class="searchText" type="search" name="search" placeholder="Buscar Profesor" style="width: 190px;">
                            <input class="searchSubmit" type="submit" value="Buscar">
                        </form>
                    </div>

                    <div class="col-md-auto" style="display: flex; align-items: center;">
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#Modaladdteacher">
                            Agregar Nuevo Profesor 
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

                $query_register = mysqli_query($conexion,"SELECT COUNT(*) as total_registros FROM profesor;");
                $result_query = mysqli_fetch_array($query_register);
                $total_registros = $result_query['total_registros'];
                ?> <h5><figcaption class="figure-caption">Cantidad de profesores: <?php echo $total_registros; ?></figcaption></h5>
                <br>

                <tr>
                    <th>Cédula</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Parroquía</th>
                    <th>Teléfono</th>
                    <th>Opciones</th>
                </tr>
            </thead>

            <tbody>
                <?php 
                //Paginador
                $query_register = mysqli_query($conexion,"SELECT COUNT(*) as total_registro FROM profesor");
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

                $query = mysqli_query($conexion,"SELECT cedula, primer_nombre, 
                primer_apellido, parroquia, telefono FROM profesor 
                ORDER BY cedula ASC LIMIT $inicio_pag,$por_pagina;");
                $result = mysqli_num_rows($query);
                if($result > 0)
                {
                while ($data = mysqli_fetch_array($query)) { ?> 

                <tr>
                    <td><?php echo $data['cedula'];?></td>
                    <td><?php echo $data['primer_nombre'];?></td>
                    <td><?php echo $data['primer_apellido'];?></td>
                    <td><?php echo $data['parroquia'];?></td>
                    <td><?php echo $data['telefono'];?></td>

                    <td>
                        <!-- <div type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#ModalSeeMore">
                            Ver Mas
                        </div> -->
                        <a href="../register/teacher/config/edit_teacher.php?cedula=<?= $data['cedula'] ?>" class="btn btn-warning">
                            Editar
                        </a>                        
                        <a href="../register/teacher/config/delete_teacher.php?cedula=<?= $data['cedula'] ?>" class="btn btn-danger">
                            Eliminar
                        </a>  
                        <a href="../register/teacher/config/seemore_teacher.php?cedula=<?= $data['cedula'] ?>" class="btn btn-success">
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

        <?php 
        include_once("../register/teacher/modal_teacher.php");         
        ?>

        <?php 
            include_once("../register/teacher/modal_teacher_seemore.php"); 
        ?>

<div class="wave"></div>

</main>
