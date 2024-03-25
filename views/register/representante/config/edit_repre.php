<?php

session_start();

if(!empty(!$_SESSION['active'])) { //inicio de la priemra condición del inicio de sesión, donde si la variable de sesión con su nombre active no esta vacia se cumple esta condición
	header('location: ../../../../'); //método de la ruta donde me enviará al sistema si la condición se cumple
}

require_once "../../../../config.php"; // metodo para llamar al archivo que nos da la conexión a la base de datos
$ci=$_GET['cedula'];

$query = mysqli_query($conexion,"SELECT * FROM representante where cedula='$ci';");

$data = mysqli_fetch_array($query);

?>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Estudiante</title>
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

        <h2><b> Editar Dato(s) del Representante</b></h2>
        
    </div>


    <div class="table-circle container">
        <form action="../../../../models/editar_repre_model.php" method="POST" class="container"> 

            <div class="row g-4"> 
                    <input class="form-control" type="hidden" name="id" value="<?php echo $data['id_repre'] ?>"> 

                <div class="col-lg-4"> 
                    <label class="form-label" style="display: flex;">Cédula</label> <!-- etiqueta label que esta vinculada un input  -->
                    <input class="form-control" type="number" name="cedula" value="<?php echo $data['cedula'] ?>"> 
                </div>

                <div class="col-lg-4">
                    <label class="form-label" style="display: flex;">Primer Nombre</label> <!-- etiqueta label que esta vinculada un input -->
                    <input class="form-control" type="text" name="primer_nombre" value="<?php echo $data['primer_nombre'] ?>"> 
                </div>

                <div class="col-lg-4">
                    <label class="form-label" style="display: flex;">Segundo Nombre</label> <!-- etiqueta label que esta vinculada un input -->
                    <input class="form-control" type="text" name="segundo_nombre" value="<?php echo $data['segundo_nombre'] ?>">  
                </div>
            </div>

            <div class="row g-3"> 
                <div class="col-lg-4"> 
                    <label class="form-label" style="display: flex;">Primer Apellido</label> <!-- etiqueta label que esta vinculada un input -->
                    <input class="form-control" type="text" name="primer_apellido" value="<?php echo $data['primer_apellido'] ?>"> 
                </div>

                <div class="col-lg-4">
                    <label class="form-label" style="display: flex;">Segundo Apellido</label> <!-- etiqueta label que esta vinculada un input -->
                    <input class="form-control" type="text" name="segundo_apellido" value="<?php echo $data['segundo_apellido'] ?>"> 
                </div>

                <div class="col-lg-4">
                    <label class="form-label" style="display: flex;">Número de Teléfono</label> <!-- etiqueta label que esta vinculada un input -->
                    <input class="form-control" type="number" name="telefono" value="<?php echo $data['telefono'] ?>"> 
                </div>

                <div class="col-lg-4">
                    <label class="form-label" style="display: flex;">Correo Electrónico</label> <!-- etiqueta label que esta vinculada un input -->
                    <input class="form-control" type="text" name="correo" value="<?php echo $data['correo'] ?>"> 
                </div>

            </div>

            <br>

            <div style="text-align: center; margin-top: 50px">
                <button type="submit" class="btn btn-primary">Guardar Cambios</button>
                <a href="../../../main/repre.php" class="btn btn-secondary">Cancelar</a>
            </div>

        </form>
    </div>
</main>


</body>
</html>