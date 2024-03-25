<?php
    
        require_once "../config.php"; // metodo para llamar al archivo que nos da la conexión a la base de datos

        $id = $_POST['id'];

        $eliminar_course = mysqli_query($conexion, "DELETE FROM taller where id_taller='$id'");


        require_once('../controllers/eliminar_course_controller.php'); 
?>