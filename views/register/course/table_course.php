<!-- Tabla con el listado de Talleres -->
<?php

?>

<!-- Tabla de talleres -->
<main>

    <div class="row container-fluid d-flex px-1">
        <div class="col-xl-5">
            <div class="control container">
                <h2> <b> Lista de Talleres </b> </h2>
            </div>
        </div>

        <div class="col-xl-7">
            <div class="control">

                <div class="row">
                    <div class="col-md-auto" style="display: flex; align-content: stretch; justify-content: space-evenly;">
                        <form class="control-search" action="course.php" method=post>
                            <input class="searchText" type="search" name="search" placeholder="Buscar Taller" style="width: 190px;">
                            <input class="searchSubmit" type="submit" value="Buscar">
                        </form>
                    </div>

                    <div class="col-md-auto" style="display: flex; align-items: center;">
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#ModaladdCourse">
                            Agregar Nuevo Taller 
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

                $query_register = mysqli_query($conexion,"SELECT COUNT(*) as total_registros FROM taller;");
                $result_query = mysqli_fetch_array($query_register);
                $total_registros = $result_query['total_registros'];
                ?> <h5><figcaption class="figure-caption">Cantidad de talleres: <?php echo $total_registros; ?></figcaption></h5>
                <br>
                <tr>

                    
                    <th><b>Nombre</b></th>
                    <th><b>Sede</b></th>
                     <th><b>Profesor(es)</b></th> 
                    <th>Opciones</th>

                </tr>

            </thead>

            <tbody>

                <?php 
                //Paginador
                $query_register = mysqli_query($conexion,"SELECT COUNT(*) as total_registro FROM taller");
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

                $query = mysqli_query($conexion,"SELECT taller.id_taller, nombre, sede, 
                primer_nombre, primer_apellido
                FROM taller, dictado, profesor 
                WHERE profesor.id_prof= dictado.id_prof and dictado.id_taller=taller.id_taller
                
                ORDER BY id_taller ASC LIMIT $inicio_pag,$por_pagina;"); //Paginación
                $result = mysqli_num_rows($query);
                if($result > 0)
                {
                while ($data = mysqli_fetch_array($query)) { ?> 

                <tr>
                    
                    <td> <?php echo $data["nombre"]; ?> </td>
                    <td> <?php echo $data["sede"]; ?></td>
                    <td><?php echo $data["primer_nombre"]; echo" "; echo $data["primer_apellido"]; ?></td> 


                    <td>
                        <a href="../register/course/config/edit_course.php?id_taller=<?= $data['id_taller'] ?>" class="btn btn-warning">
                            Editar
                        </a>                        
                        <a href="../register/course/config/delete_course.php?id_taller=<?= $data['id_taller'] ?>" class="btn btn-danger">
                            Eliminar
                        </a>                         
                        <a href="../register/course/config/seemore_course.php?id_taller=<?= $data['id_taller'] ?>" class="btn btn-success">
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
        include_once("../register/course/modal_course.php"); 
        ?>

<div class="wave"></div>

</main>        
