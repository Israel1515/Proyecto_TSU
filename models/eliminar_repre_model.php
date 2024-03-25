<?php
    
        require_once "../config.php"; // metodo para llamar al archivo que nos da la conexión a la base de datos

        $id = $_POST['id_repre'];
        
        
        $eliminar_repre = mysqli_query($conexion, "DELETE FROM representado where id_repre='$id'");
        $eliminar_repre = mysqli_query($conexion, "DELETE FROM representante where id_repre='$id'");


        require_once('../controllers/eliminar_repre_controller.php'); 
?>