<?php
    
        require_once "../config.php"; // metodo para llamar al archivo que nos da la conexión a la base de datos

        $id = $_POST['id'];

        $eliminar_teacher = mysqli_query($conexion, "DELETE FROM profesor where id_prof='$id'");


        require_once('../controllers/eliminar_teacher_controller.php'); 
?>