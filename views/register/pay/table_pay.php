<?php

require_once('../../config.php');

?>

<!-- Tarjeta de encabezado -->
<div style="margin-left: 50px;">
    <div class="container" style="padding-left: 0;">
        <div class="card" style="margin-top: 5px; margin-bottom: 5px;">
            <div class="d-flex row">
                <div class="col-sm-3" style="align-self: center;">
                    <div class="card-body px-md-4 d-none d-md-inline-flex">
                    <img class="card-img img-fluid" src="../public/img/logo.png" alt="100% San Agustin">
                    </div>
                </div>

                <div class="col-md-6" style="display: flex;">
                    <div class="card-body" style="align-self: center;">
                        <h1 class="card-title text-primary py-5 text-center">Control de Pagos Por Taller</h1>
                    </div>
                </div>
                <div class="col-sm-3" style="align-self: center;">
                    <div class="card-body px-md-4">
                    <img class="card-img img-fluid d-none d-md-inline-flex" src="../public/img/logo-alameda.jpg" alt="100% San Agustin">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <main style="margin-top: 4px; margin-bottom: 4px; margin-left: 0;">

        <div class="table-circle table-responsive text-nowrap">
            <table class="table table-hover table-bordered">
                <thead class="table table-sm">
                    <tr>
                        <th><b>Nombre</b></th>
                        <th><b>Opciones</b></th>

                    </tr>
                </thead>

                <tbody>

                    <?php 
                    //Paginador
                    $query_register = mysqli_query($conexion,"SELECT COUNT(*) as total_registro FROM taller");
                    $result_query = mysqli_fetch_array($query_register);
                    $total_registro = $result_query['total_registro'];

                    $por_pagina = 10;

                    if(empty($_GET['pagina']))
                    {
                        $pagina = 1;
                    }else{
                        $pagina = $_GET['pagina'];
                    }

                    $inicio_pag = ($pagina-1) * $por_pagina;
                    $total_pag = ceil($total_registro / $por_pagina);

                    $sql = mysqli_query($conexion,"SELECT nombre, id_taller
                    from  taller
                    ORDER BY nombre ASC LIMIT $inicio_pag,$por_pagina;");
                    
                    $result = mysqli_num_rows($sql);
                    if($result > 0)
                    {
                    while ($data = mysqli_fetch_array($sql)) { ?> 

                    <tr>

                        <td><?php echo $data['nombre']; ?></td>
                        <td>
                            <?php
                            $nombre = $data['nombre'];
                            $id_taller = $data['id_taller'];
                            ?>
                            <a href="pago-taller.php?nombre=<?php echo $nombre ?>& id_taller=<?php echo $id_taller; ?>" class="btn btn-sm btn-outline-primary me-1">Ingresar</a>                          

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

    </main>  

    <?php
        //require_once '../register/pay/collapse_paymonth.php';
    ?> 

</div>