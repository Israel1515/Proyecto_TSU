<?php
    
        require_once "../config.php"; // metodo para llamar al archivo que nos da la conexión a la base de datos

        $id_est = $_POST['id'];

        $eliminar_student = mysqli_query($conexion, "DELETE FROM representado where id_est='$id_est'");
        $eliminar_student = mysqli_query($conexion, "DELETE FROM realiza where id_est='$id_est'");
        $eliminar_student = mysqli_query($conexion, "DELETE FROM cursa where id_est='$id_est'");
        $eliminar_student = mysqli_query($conexion, "DELETE FROM estudiante where id_est='$id_est'");


        require_once('../controllers/eliminar_student_controller.php'); 
?>