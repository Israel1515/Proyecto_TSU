<?php
    
        require_once "../config.php"; // metodo para llamar al archivo que nos da la conexión a la base de datos

        $id = $_POST['id'];

        $eliminar_user = mysqli_query($conexion, "DELETE FROM usuarios where id='$id'");


        require_once('../controllers/eliminar_user_controller.php'); 
?>