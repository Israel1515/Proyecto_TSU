<?php
    
    require_once "../config.php"; // metodo para llamar al archivo que nos da la conexión a la base de datos

    $nombre = $_POST['nombre'];
    $sede = $_POST['sede'];
    $decripcion = $_POST['descripcion'];

    $insertar_course = mysqli_query($conexion, "INSERT INTO taller (nombre,sede,descripcion)
                            VALUES('$nombre', '$sede', '$decripcion')"); //Se guarda en variable la inserción de la información a la base de datos
    
    require_once('../controllers/registro_course_controller.php');

?>