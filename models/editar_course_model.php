<?php
    
        require_once "../config.php"; // metodo para llamar al archivo que nos da la conexión a la base de datos

        $id = $_POST['id'];
        $name = $_POST['nombre'];
        $sede = $_POST['sede'];
        $desc = $_POST['descripcion'];


       $editar_course = mysqli_query($conexion, "UPDATE taller SET id_taller='$id',  
                                        nombre='$name', sede='$sede', descripcion='$desc'
                                        where id_taller='$id'");


        require_once('../controllers/editar_course_controller.php'); 
?>