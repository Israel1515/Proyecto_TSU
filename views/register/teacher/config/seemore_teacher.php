<?php

session_start();

if(!empty(!$_SESSION['active'])) { //inicio de la priemra condición del inicio de sesión, donde si la variable de sesión con su nombre active no esta vacia se cumple esta condición
	header('location: ../../../../'); //método de la ruta donde me enviará al sistema si la condición se cumple
}

require_once "../../../../config.php"; // metodo para llamar al archivo que nos da la conexión a la base de datos
$ci=$_GET['cedula'];

$query = mysqli_query($conexion,"SELECT cedula, primer_nombre, segundo_nombre, primer_apellido, 
segundo_apellido, fecha_nacimiento, TIMESTAMPDIFF(YEAR, fecha_nacimiento, CURDATE()) AS 'edad', 
genero, municipio, parroquia, av_calle, telefono, correo
FROM profesor where cedula='$ci';");

$data = mysqli_fetch_array($query);

?>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Datos del Profesor</title>
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

        <h2><b> Información del Profesor Seleccionado </b></h2>
        
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
                    <label class="control-label"> <b> Municipio: </b> </label>
                    <p class="form-control-static"> <?php echo $data['municipio'] ?> </p> 
                </div>

                <div class="col">
                    <label class="control-label"> <b> Parroquia: </b> </label>
                    <p class="form-control-static"> <?php echo $data['parroquia'] ?> </p> 
                </div>

                <div class="col">
                    <label class="control-label"> <b> Avenida o Calle: </b> </label>
                    <p class="form-control-static"> <?php echo $data['av_calle'] ?> </p>  
                </div>
            </div>

                <br>

            <div class="row">

                <div class="col-4">
                    <label class="control-label"> <b> Teléfono: </b> </label>
                    <p class="form-control-static"> <?php echo $data['telefono'] ?> </p>  
                </div>

                <div class="col-4">
                    <label class="control-label"> <b> Correo Electrónico: </b> </label>
                    <p class="form-control-static"> <?php echo $data['correo'] ?> </p> 
                </div>

            </div>

            <br>

            <table>
                    <thead class="table table-sm">
                        <tr>
                            <div class="row">
                                <div class="col-4">
                                    <label class="control-label"> <b> Taller(es) Dictado(s): </b> </label>
                                </div>
                            </div>                  
                        </tr>
                    </thead>

                    <tbody class="table-border-bottom-0">
                        <?php
                           $sql = mysqli_query($conexion,"SELECT taller.nombre
                           FROM profesor, dictado, taller
                           where profesor.id_prof = dictado.id_prof and taller.id_taller = dictado.id_taller and cedula='$ci';");
                           $result = mysqli_num_rows($sql);
                           if($result > 0)
                           {
                           while ($date = mysqli_fetch_array($sql)) { ?>
       
                           <p class="form-control-static"> <?php echo $date['nombre']; ?> </p>  
                       
                    
                       <?php } }?>

                    </tbody>
            </table>


        
        </div>
        
        <center style="margin-top: 25px;">
            <a href="../../../main/teacher.php" class="btn btn-secondary">Volver</a>
        </center>
       
        
    </div>

</main>





<script src="../public/bootstrap/JS/bootstrap.bundle.js"></script>
</body>
</html>