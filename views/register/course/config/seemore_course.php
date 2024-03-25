<?php

session_start();

if(!empty(!$_SESSION['active'])) { //inicio de la priemra condición del inicio de sesión, donde si la variable de sesión con su nombre active no esta vacia se cumple esta condición
	header('location: ../../../../'); //método de la ruta donde me enviará al sistema si la condición se cumple
}

require_once "../../../../config.php"; // metodo para llamar al archivo que nos da la conexión a la base de datos
$id=$_GET['id_taller'];
$query = mysqli_query($conexion,"SELECT nombre, sede, descripcion 
FROM taller where id_taller='$id';");

$data = mysqli_fetch_array($query);

?>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Datos del Taller</title>
    <link rel="stylesheet" href="../../../public/bootstrap/CSS/bootstrap.css">
    <link rel="stylesheet" href="../../../public/css/styletable.css">
    <link rel="stylesheet" href="../../../public/css/color.css">
</head>
<body>
<?php
require_once ('../../../loader.php');
?>

<main>

    <div class="control container">

        <h2><b> Información del Taller Seleccionado </b></h2>
        
    </div>


    <div class="table-circle container">

        
        <div class="form-group" style="font-size: 20px; font-weight: 600;">

            <div class="row">

                <div class="col">
                    <label class="control-label"> <b> Nombre: </b> </label>
                    <p class="form-control-static"> <?php echo $data['nombre'] ?> </p> 
                </div>

                <div class="col">
                    <label class="control-label"> <b> Sede: </b> </label>
                    <p class="form-control-static"> <?php echo $data['sede'] ?> </p>  
                </div>
            </div>

            <br>

            <div class="row">
                <div class="col">
                    <label class="control-label"> <b> Cantidad de Participantes </b> </label>
                    <?php
                        $sql = mysqli_query($conexion,"SELECT COUNT(id_est) AS cantidad_estudiante
                        FROM cursa
                        where id_taller = '$id';");
                        $dato = mysqli_fetch_array($sql); // Consulta para sacar la cantidad de estudiantes
                    ?>

                        <p class="form-control-static"> <?php echo $dato['cantidad_estudiante']; ?> </p>  
                </div>   

                <div class="col">
                        <label class="control-label"> <b> Descripción: </b> </label>
                        <p class="form-control-static"> <?php echo $data['descripcion'] ?> </p> 
                 </div>           
                   
            </div>

            <br>
            <br>

            <a class="btn btn-sm btn-outline-primary me-1" data-bs-toggle="collapse" href="#collapsebutton" role="button" aria-expanded="false" aria-controls="collapselist" style="margin-bottom: 25px;"> 
                Ver Lista de Estudiantes 
            </a></b> 

            <!-- Collapse -->
            <div class="collapse" id="collapsebutton" style="margin-bottom: 4px;">

                    <div class="row">

                        <div class="col">

                            <div class="table-responsive text-nowrap">
                                <table class="table table-hover table-bordered">
                                    <thead class="table table-sm">

                                        <tr>
                                            
                                            <th>Nombre de los Estudiantes:</th>
                                            <th>Cédula de los Estudiantes:</th>
                                            
                                        </tr>
                                    </thead>

                                    <tbody>

                                    <?php

                                    $id_est_from_taller = [];
                                    $index = 0;
                                    $result = mysqli_query($conexion, "SELECT id_est FROM `cursa` WHERE id_taller=$id");
                                    if($result)
                                    {
                                        while ($row = mysqli_fetch_array($result)) {
                                            array_push($id_est_from_taller, $row[0]);
                                        }
                                    }

                                    foreach ($id_est_from_taller as $id_est) {
                                        $result = mysqli_query($conexion, "SELECT * FROM estudiante where id_est=$id_est");
                                        if($result)
                                        {
                                            while ($data = mysqli_fetch_array($result)) { ?>
                                                <tr id="num">
                                                    
                                                    <td><?php echo $data['primer_nombre']; echo " "; echo $data['primer_apellido']; ?></td>
                                                    <td><?php echo $data['cedula']; ?></td>
                                                </tr>
                                                
                                                    <?php 
                                                    } 
                                                }
                                            }
                                    ?>

                                    </tbody>

                                </table>
                            </div>

                        </div>

                    </div>


            </div>


                <br>
                <center>
                <a href="../../../main/course.php" class="btn btn-secondary">Volver</a>
                </center>

       
        
    </div>

</main>


<script src="../../../public/bootstrap/JS/bootstrap.bundle.js"></script>
</body>
</html>