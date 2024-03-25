<?php

session_start();

if(!empty(!$_SESSION['active'])) { //inicio de la priemra condición del inicio de sesión, donde si la variable de sesión con su nombre active no esta vacia se cumple esta condición
	header('location: ../../../../'); //método de la ruta donde me enviará al sistema si la condición se cumple
}

require_once "../../../../config.php"; // metodo para llamar al archivo que nos da la conexión a la base de datos
$id=$_GET['id_taller'];

$query = mysqli_query($conexion,"SELECT * FROM taller where id_taller='$id';");

$data = mysqli_fetch_array($query);

?>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Taller</title>
    <link rel="stylesheet" href="../../../public/bootstrap/CSS/bootstrap.css">
    <link rel="stylesheet" href="../../../public/css/styletable.css">
    <link rel="stylesheet" href="../../../public/css/color.css">
</head>
<body>
<?php
require_once ('../../../loader.php');
?>

<!-- Tabla de informacion del Taller a editar -->
<main>

    <div class="control container">

        <h2><b> Editar Dato(s) de Taller</b></h2>
        
    </div>


    <div class="table-circle container">
        <form action="../../../../models/editar_course_model.php" method="POST" class="container"> 

            <div class="row g-4"> 

                    <input class="form-control" type="hidden" name="id" value="<?php echo $data['id_taller'] ?>"> 

                <div class="col-lg-3">
                    <label class="form-label" style="display: flex;">Nombre del Taller</label> <!-- etiqueta label que esta vinculada un input -->
                    <input class="form-control" type="text" name="nombre" value="<?php echo $data['nombre'] ?>"> 
                </div>

                <div class="col-lg-3">
                    <label class="form-label" style="display: flex;">Sede del Taller</label> <!-- etiqueta label que esta vinculada un input -->
                    <input class="form-control" type="text" name="sede" value="<?php echo $data['sede'] ?>">  
                </div>

                <div class="col-lg-6">
                    <label class="form-label" style="display: flex;">Descripción del Taller</label> <!-- etiqueta label que esta vinculada un input -->
                    <input class="form-control" type="text" name="descripcion" value="<?php echo $data['descripcion'] ?>">  
                </div>
            </div>

            <div style="text-align: center; margin-top: 50px">
                <button type="submit" class="btn btn-primary">Guardar Cambios</button>
                <a href="../../../main/course.php" class="btn btn-secondary">Cancelar</a>
            </div>

        </form>
    </div>
</main>


</body>
</html>