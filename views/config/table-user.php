<?php

require_once('../../config.php');

$query = mysqli_query($conexion, "SELECT * FROM usuarios");
$result = mysqli_num_rows($query);

?>

<!-- tabla de los usuarios registrados en el sistema -->
<main>

    <div class="row container-fluid d-flex px-1">

        <div class="col-xl-12">
            <div class="control container">
                <h2> <b> Lista de Usuarios del Sistema </b> </h2>
            </div>
        </div>

    </div>


    <div class="table-circle table-responsive text-nowrap">
        <table class="table table-hover table-bordered">
            <thead class="table table-sm">
                <tr>
                    
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Nombre de Usuario</th>
                    <th>Contraseña</th>
                    <th>Nivel de Privilegios</th>
                    <th>Opciones</th>
                </tr>
            </thead>

            <tbody class="table-border-bottom-0">

                <?php
                    if($result > 0)
                    {
                    while ($data = mysqli_fetch_array($query)) 
                    {
                ?>
                <tr>
                    
                    <td><?php echo $data['nombre'];?></td>
                    <td><?php echo $data['apellido'];?></td>
                    <td><?php echo $data['nombre_usuario'];?></td>
                    <td><?php echo $data['contrasena'];?></td>
                    <td><?php echo $data['rol'];?></td>

                    <td>
                        <a href="../config/edit-user.php?id=<?= $data['ID'] ?>" class="btn btn-warning">
                            Editar
                        </a>                        
                        <a href="../config/delete-user.php?id=<?= $data['ID'] ?>" class="btn btn-danger">
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
