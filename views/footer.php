<!-- Footer -->    
<footer class="text-center text-lg-start text-white"style="background-color: #3a3f51 !important;">

    <!-- Section: Links  -->
    <section >
        
        <div class="container text-center text-sm-center" style="padding-top: 10px;">

        <div class="row">

            <div class="col-lg-2 col-xl-2 mx-auto mb-4">

            <h6 class="text-uppercase fw-bold">Menú de Inicio</h6>
            <hr class="mb-4 mt-0 d-inline-block mx-auto" style="width: 130px; background-color: #1e90ff5c; height: 2px" />
            <p>
                <a href="inicio.php" class="text-white">Inicio</a>
            </p>

            <p>
                <a href="statistic.php" class="text-white">Estadísticas</a>
            </p>
            </div>


            <div class="offset-2 col-lg-2 col-xl-2 mx-auto mb-4">
            <!-- Links -->
            <h6 class="text-uppercase fw-bold">Registros</h6>
            <hr class="mb-4 mt-0 d-inline-block mx-auto" style="width: 90px; background-color: #1e90ff5c; height: 2px" />
            <p>
                <a href="student.php" class="text-white">Estudiantes</a>
            </p>
            <p>
                <a href="course.php" class="text-white">Talleres</a>
            </p>
            <p>
                <a href="teacher.php" class="text-white">Profesores</a>
            </p>
            <p>
                <a href="control-pago.php" class="text-white">Control de Pagos</a>
            </p>
            <p>
                <a href="repre.php" class="text-white">Representante</a>
            </p>
            </div>


            <div class="offset-6 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
            <!-- Links -->
            <h6 class="text-uppercase fw-bold">Configuraciones</h6>
            <hr class="mb-4 mt-0 d-inline-block mx-auto" style="width: 155px; background-color: #1e90ff5c; height: 2px" />
                <p>
                    <a href="my-perfil.php" class="text-white">Mi Perfil</a>
                </p>

            <?php
                if($_SESSION['rol'] == $admin){ ?>
                <p>
                    <a href="edit-user.php" class="text-white">Editar Usuarios</a>
                </p>

            <?php } else { ?>
            
                <p>
                    <a href="edit-user.php" class="text-white visually-hidden">Editar Usuarios</a>
                </p>
            <?php } ?>

                <p>
                    <a href="../../cerrar_sesion.php" class="text-white">Cerrar Sesión</a>
                </p>
            </div>

        </div>

        </div>

    </section>

    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2)"> © 2023-2024 Copyleft </div>

</footer>
