<?php

session_start();

if(!empty(!$_SESSION['active'])) { //inicio de la priemra condición del inicio de sesión, donde si la variable de sesión con su nombre active no esta vacia se cumple esta condición
	header('location: ../../../'); //método de la ruta donde me enviará al sistema si la condición se cumple
}

require_once "../../../../config.php"; // metodo para llamar al archivo que nos da la conexión a la base de datos
$ci=$_GET['cedula'];

$query = mysqli_query($conexion,"SELECT cedula, primer_nombre, segundo_nombre, primer_apellido, 
segundo_apellido, fecha_nacimiento, TIMESTAMPDIFF(YEAR, fecha_nacimiento, CURDATE()) AS 'edad', 
genero, condicion, municipio, parroquia, av_calle, telefono, correo
FROM estudiante where cedula='$ci';");

$data = mysqli_fetch_array($query);

?>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Datos del Estudiante</title>
    <link rel="stylesheet" href="../../../public/bootstrap/CSS/bootstrap.css">
    <link rel="stylesheet" href="../../../public/css/styletable.css">
    <link rel="stylesheet" href="../../../public/css/color.css">
</head>
<body>
<?php
require_once ('../../../loader.php');
?>

<!-- Tabla de informacion del estudiante a editar -->
<main>

    <div class="control container">

        <h2><b> Información del Estudiante Seleccionado </b></h2>
        
    </div>


    <div class="table-circle container">

        <!-- Tabla de informacion del estudiante -->
        <div class="form-group" style="font-size: 20px; font-weight: 600;">

                <div class="row">
                    <div class="col">
                        <label class="control-label"> <b> Cédula: </b> </label>
                        <p class="form-control-static"> <?php echo $data['cedula'] ?></p> 
                    </div>

                    <div class="col">
                        <label class="control-label"> <b> Nombres: </b> </label>
                        <p class="form-control-static"> <?php echo $data['primer_nombre']; echo " "; echo $data['segundo_nombre']; ?> </p> 
                    </div>

                    <div class="col">
                        <label class="control-label"> <b> Apellidos: </b> </label>
                        <p class="form-control-static"> <?php echo $data['primer_apellido']; echo " "; echo $data['segundo_apellido']; ?> </p>  
                    </div>
                </div>

                    <br>

                <div class="row">
                    <div class="col">
                        <label class="control-label"> <b> Edad: </b> </label>
                        <p class="form-control-static"> <?php echo $data['edad'] ?> </p> 
                    </div>
                    <div class="col">
                        <label class="control-label"> <b> Fecha de Nacimiento: </b> </label>
                        <p class="form-control-static"> <?php echo $data['fecha_nacimiento'] ?> </p> 
                    </div>
                    <div class="col">
                        <label class="control-label"> <b> Género: </b> </label>
                        <p class="form-control-static"> <?php echo $data['genero'] ?> </p> 
                    </div>
                </div>

                    <br>

                <div class="row">
                <div class="col">
                        <label class="control-label"> <b> Condición: </b> </label>
                        <p class="form-control-static"> <?php echo $data['condicion'] ?> </p>  
                    </div>

                    <div class="col">
                        <label class="control-label"> <b> Municipio: </b> </label>
                        <p class="form-control-static"> <?php echo $data['municipio'] ?> </p> 
                    </div>

                    <div class="col">
                        <label class="control-label"> <b> Parroquia: </b> </label>
                        <p class="form-control-static"> <?php echo $data['parroquia'] ?> </p> 
                    </div>


                </div>

                    <br>

                <div class="row">

                <div class="col">
                        <label class="control-label"> <b> Avenida o Calle: </b> </label>
                        <p class="form-control-static"> <?php echo $data['av_calle'] ?> </p>  
                    </div>

                    <div class="col-4">
                        <label class="control-label"> <b> Correo Electrónico: </b> </label>
                        <p class="form-control-static"> <?php echo $data['correo'] ?> </p> 
                    </div>
                    <div class="col">
                        <label class="control-label"> <b> Teléfono: </b> </label>
                        <p class="form-control-static"> <?php echo $data['telefono'] ?> </p>  
                    </div>
                </div>

                <br>
                
                <table>
                    <thead class="table table-sm">
                        <tr>
                            <div class="row">
                                <div class="col-4">
                                    <label class="control-label"> <b> Taller(es) Inscrito(s): </b> </label>
                                </div>

                                <div class="col">
                                    <label class="control-label"> <b> Fecha de Inscripción: </b> </label>  
                                </div>
                            </div>                  
                        </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                        <?php
                            $query = mysqli_query($conexion,"SELECT date_format(fecha_inscripcion, '%d/%m/%Y'), taller.nombre
                            FROM estudiante, cursa, taller
                            where estudiante.id_est = cursa.id_est and taller.id_taller = cursa.id_taller and cedula='$ci';");
                            $result = mysqli_num_rows($query);
                            if($result > 0)
                            {
                            while ($dato = mysqli_fetch_array($query)) { ?>
                        
                        <tr>
                            <div class="row">
                                <div class="col-4">
                                    <label class="control-label"> <?php echo $dato['nombre']; ?> </label>
                                </div>

                                <div class="col">
                                    <label class="control-label"> <?php echo $dato[0] ?> </label>  
                                </div>
                            </div>
                        </tr>

                        <?php } }?>

                    </tbody>

                </table>
                
                    <br>

                <div style="text-align: center; margin-top: 50px">
                    <?php
                        if($data['edad'] <= 17){ ?>
                        
                       <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#Modalrepresentante">
                            Ver Datos  del Representante
                        </button>

                        <?php }else { ?>
                        <button type="button" class="btn btn-primary visually-hidden" data-bs-toggle="modal" data-bs-target="#Modalrepresentante">
                            Ver Datos del Representante
                        </button>
                    <?php } ?>
                    <a href="../../../main/student.php" class="btn btn-secondary">Volver</a>
                </div>

            <!-- Modal Representante -->
            <div class="modal fade" id="Modalrepresentante" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h3 class="modal-title" id="staticBackdropLabel">Datos del Representante</h3>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>

                        <div class="modal-body">

                            <!-- Tabla de informacion de estudiante -->
                            <div class="form-group" style="font-size: 20px; font-weight: 600;">
                                <?php    
                                $sql = mysqli_query($conexion,"SELECT representante.cedula, representante.primer_nombre, representante.segundo_nombre, representante.primer_apellido, 
                                representante.segundo_apellido, representante.telefono, representante.correo
                                FROM representante, estudiante, representado
                                WHERE estudiante.id_est = representado.id_est and representante.id_repre = representado.id_repre and estudiante.cedula='$ci';");
                                $date = mysqli_fetch_array($sql);
                                ?>

                                <div class="row">
                                    <div class="col">
                                        <label class="control-label"> <b> Cédula: </b> </label>
                                        <p class="form-control-static"> <?php echo $date['cedula'] ?> </p> 
                                    </div>

                                    <div class="col">
                                        <label class="control-label"> <b> Nombres: </b> </label>
                                        <p class="form-control-static"> <?php echo $date['primer_nombre']; echo " "; echo $date['segundo_nombre']; ?> </p> 
                                    </div>

                                </div>

                                    <br>

                                <div class="row">
                                    <div class="col">
                                        <label class="control-label"> <b> Apellidos: </b> </label>
                                        <p class="form-control-static"> <?php echo $date['primer_apellido']; echo " "; echo $date['segundo_apellido']; ?> </p>  
                                    </div>
                                    <div class="col">
                                        <label class="control-label"> <b> Teléfono: </b> </label>
                                        <p class="form-control-static"> <?php echo $date['telefono'] ?> </p>  
                                    </div>
                                </div>

                                    <br>

                                <div class="row">
                                    <div class="col">
                                        <label class="control-label"> <b> Correo Electrónico: </b> </label>
                                        <p class="form-control-static"> <?php echo $date['correo'] ?> </p>  
                                    </div>
                                </div>

                                    <br>
                                    <br>

                            </div>

                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                        </div>
                    </div>
                </div>
            </div>

            </div>

        </div>
        
    </div>

</main>


<script src="../../../public/bootstrap/JS/bootstrap.bundle.js"></script> <!--Esto es el llamado a la plantilla del modal!-->
</body>
</html>