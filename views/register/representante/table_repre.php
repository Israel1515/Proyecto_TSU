<?php

require_once('../../config.php');

?>

<!-- Tabla con el listado de Representantes -->
<main>

    <div class="row container-fluid d-flex px-1">
        <div class="col-xl-5">
            <div class="control container">
                <center>
                <h2><b> Lista de Representantes</b></h2>
                </center>
                
            </div>
        </div>

        <div class="col-xl-7">
            <div class="control">

                <div class="row">
                    <div class="col-md-auto" style="display: flex; align-content: stretch; justify-content: space-evenly;">
                        <form class="control-search" action="repre.php" method=post>
                            <input class="searchText" type="search" name="search" placeholder="Buscar Representante" style="width: 190px;">
                            <input class="searchSubmit" type="submit" value="Buscar">
                        </form>
                    </div>

                    <div class="col-md-auto" style="display: flex; align-items: center;">
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#ModalRepre">
                                Agregar Nuevo Representante
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

                $query_register = mysqli_query($conexion,"SELECT COUNT(*) as total_registros FROM representante;");
                $result_query = mysqli_fetch_array($query_register);
                $total_registros = $result_query['total_registros'];
                ?> <h5><figcaption class="figure-caption">Cantidad de representantes: <?php echo $total_registros; ?></figcaption></h5>
                <br>

                <tr>
                    
                    <th>Cédula</th>
                    <th>Nombres</th>
                    <th>Apellidos</th>
                    <th>Teléfono</th>
                    <th>Correo</th>
                    <th>Representado</th>
                    <th>Opciones</th>
                    
                </tr>
            </thead>

            <tbody>

                <?php 
                //Paginador
                $query_register = mysqli_query($conexion,"SELECT COUNT(*) as total_registro FROM representante");
                $result_query = mysqli_fetch_array($query_register);
                $total_registro = $result_query['total_registro'];

                $por_pagina = 5;

                if(empty($_GET['pagina']))
                {
                    $pagina = 1;
                }else{
                    $pagina = $_GET['pagina'];
                }

                $inicio_pag = ($pagina-1) * $por_pagina;
                $total_pag = ceil($total_registro / $por_pagina);

                $sql = mysqli_query($conexion,"SELECT representante.cedula, representante.primer_nombre,
                representante.segundo_nombre, representante.primer_apellido as apellido, representante.segundo_apellido,
                representante.telefono, representante.correo, estudiante.primer_nombre, estudiante.primer_apellido
                from representante, estudiante, representado
                WHERE estudiante.id_est= representado.id_est and representante.id_repre=representado.id_repre
                ORDER BY cedula ASC LIMIT $inicio_pag,$por_pagina;");
                
                $result = mysqli_num_rows($sql);
                if($result > 0)
                {
                while ($data = mysqli_fetch_array($sql)) { ?> 

                <tr>

                    <td><?php echo $data['cedula'];?></td>
                    <td><?php echo $data[1]; echo" "; echo $data["segundo_nombre"]; ?></td>                    
                    <td><?php echo $data["apellido"]; echo" "; echo $data["segundo_apellido"]; ?></td>
                    <td><?php echo $data['telefono'];?></td>
                    <td><?php echo $data['correo'];?></td>
                    <td><?php echo $data["primer_nombre"]; echo" "; echo $data["primer_apellido"]; ?></td>
                    
                    <td>
                        <a href="../register/representante/config/edit_repre.php?cedula=<?= $data['cedula'] ?>" class="btn btn-warning">
                            Editar
                        </a>                        
                        <a href="../register/representante/config/delete_repre.php?cedula=<?= $data['cedula'] ?>" class="btn btn-danger">
                            Eliminar
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
        include_once("../register/representante/modal_repre.php"); 
        ?>

<div class="wave"></div>
</main>
