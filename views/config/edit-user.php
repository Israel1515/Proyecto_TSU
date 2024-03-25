<?php

session_start();

if(!empty(!$_SESSION['active'])) { //inicio de la priemra condición del inicio de sesión, donde si la variable de sesión con su nombre active no esta vacia se cumple esta condición
	header('location: ../../../../'); //método de la ruta donde me enviará al sistema si la condición se cumple
}
if($_SESSION['rol'] == 'Administrador') { //inicio de la priemra condición del inicio de sesión, donde si la variable de sesión con su nombre active no esta vacia se cumple esta condición
	header('location: ../inicio.php'); //método de la ruta donde me enviará al sistema si la condición se cumple
}

require_once "../../config.php"; // metodo para llamar al archivo que nos da la conexión a la base de datos

$id=$_GET['id'];

$query = mysqli_query($conexion,"SELECT * FROM usuarios where ID='$id';");

$data = mysqli_fetch_array($query);

?>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Usuario</title>
    <link rel="stylesheet" href="../public/bootstrap/CSS/bootstrap.css">
    <link rel="stylesheet" href="../public/css/styletable.css">
    <link rel="stylesheet" href="../public/css/color.css">
</head>
<body>
<?php
require_once ('../loader.php');
?>

<!-- Tabla de informacion del Taller a editar -->
<main>

    <div class="control container">

        <h2><b> Editar Dato(s) del Usuario</b></h2>
        
    </div>


    <div class="table-circle container">
        <form action="../../models/editar_user_model.php" method="POST" class="container"> 

            <div class="row g-4"> 

                    <input class="form-control" type="hidden" name="id" value="<?php echo $data['ID'] ?>"> 

                <div class="col-lg-4">
                    <label class="form-label" style="display: flex;">Nombre</label> <!-- etiqueta label que esta vinculada un input -->
                    <input class="form-control" type="text" name="nombre" value="<?php echo $data['nombre'] ?>"> 
                </div>

                <div class="col-lg-4">
                    <label class="form-label" style="display: flex;">Apellido</label> <!-- etiqueta label que esta vinculada un input -->
                    <input class="form-control" type="text" name="apellido" value="<?php echo $data['apellido'] ?>">  
                </div>

                <div class="col-lg-4">
                    <label class="form-label" style="display: flex;">Nombre de Usuario</label> <!-- etiqueta label que esta vinculada un input -->
                    <input class="form-control" type="text" name="nombre_usuario" value="<?php echo $data['nombre_usuario'] ?>">  
                </div>
            </div>

            <br>
            
            <div class="row g-2"> 
                <div class="col-lg-4">
                    <label class="form-label" style="display: flex;">Contraseña</label> <!-- etiqueta label que esta vinculada un input -->
                    <input class="form-control" type="text" name="contrasena" value="<?php echo $data['contrasena'] ?>"> 
                </div>

                <div class="col-lg-4">
                    <label class="form-label" style="display: flex;">Nivel de Privilegio</label> <!-- etiqueta label que esta vinculada un input -->
                    <input class="form-control" type="text" name="rol" value="<?php echo $data['rol'] ?>">  
                </div>
            </div>

            <div style="text-align: center; margin-top: 50px">
                <button type="submit" class="btn btn-primary">Guardar Cambios</button>
                <a href="../main/edit-user.php" class="btn btn-secondary">Cancelar</a>
            </div>

        </form>
    </div>
</main>


</body>
</html>