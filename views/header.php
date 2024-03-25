<?php

    $admin = 'Super Usuario';

    require_once "../../config.php";
    $query_notification = mysqli_query($conexion,"SELECT COUNT(*) as total_notification FROM insert_trigger_fundacion");
    $result_notification = mysqli_fetch_array($query_notification);
    $total_notification = $result_notification['total_notification'];

    $por_pagina = 4;

    $consulta = mysqli_query($conexion,"SELECT * FROM insert_trigger_fundacion
    ORDER BY `insert_trigger_fundacion`.`fecha_trigger_insert` DESC LIMIT $por_pagina;"); // variable donde se guradara la consulta a la base de datos para validar las credenciales de los usuarios

    $resultado = mysqli_num_rows($consulta); // método para hacer la validación de la consulta a la base de datos

?>

<!-- header -->
<nav class="navbar navbar-expand bg-secondary sticky-top px-4 py-1" style="background-color: #3a3f51 !important;">
    
    <!-- menu desplegables de las notificaciones -->
    <div class="navbar-nav align-items-center ms-auto">
        <div class="nav-item dropdown">
            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                <img class="rounded-circle me-lg-1" src="../public/img/notification-color.png" alt="notification-color" style="width: 30px; height: 30px;">
                <span class="d-none d-sm-inline-flex" style="color: white;">Notificaciones</span>
            </a>
        
        <!-- opciones desplegables de las notificaciones -->
        <div class="dropdown-menu dropdown-menu-end border-0 rounded-0 rounded-bottom m-0">
        <?php
            
            if($resultado > 0){
            while ($dato = mysqli_fetch_array($consulta)) {

            ?>
            <a href="my-perfil.php" class="dropdown-item">
                <img src="../public/img/notification.PNG" alt="notification.icon" class="bx bx-user me-2">
                <h6 class="fw-normal mb-0"> <?php echo $dato['desc_trigger_insert']; ?> </h6>
                <small> <?php echo $dato['fecha_trigger_insert']; ?> </small>
            </a>

            <?php } } ?>

                    <hr class="dropdown-divider">
            <a href="my-perfil.php" class="dropdown-item text-center">Ver Historial</a>
        </div>
    </div>

    <!-- menu desplegables del boton usuario -->
    <div class="nav-item dropdown">
        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
            <img class="rounded-circle me-lg-2" src="../public/img/user.png" alt="usuario" style="width: 40px; height: 40px;">
            <span class="d-lg-inline-flex" style="color: white;"> <?php echo $_SESSION['user']; ?></span>
        </a>
            <div class="dropdown-menu dropdown-menu-end border-0 rounded-0 rounded-bottom m-0">
                <a href="my-perfil.php" class="dropdown-item">
                    <img src="../public/img/img-user.PNG" alt="user.icon" class="bx bx-user me-2">
                    Mi Perfil
                </a>
                    <?php
                    if($_SESSION['rol'] == $admin){ ?>
                    
                    <a href="edit-user.php" class="dropdown-item" >
                        <img src="../public/img/setting.PNG" alt="setting.icon" class="bx bx-user me-2">
                        Editar Usuarios
                    </a>

                    <?php }else { ?>

                    <a href="edit-user.php" class="dropdown-item visually-hidden" >
                        <img src="../public/img/setting.PNG" alt="setting.icon" class="bx bx-user me-2">
                        Editar Usuarios
                    </a>
                    <?php } ?>
                    
                <hr class="dropdown-divider">
                <a href="../../cerrar_sesion.php" class="dropdown-item">
                    <img src="../public/img/log-out.PNG" alt="log-out.icon" class="bx bx-user me-2">
                    Cerrar Sesion
                </a>
            </div>
    </div>
</nav>
