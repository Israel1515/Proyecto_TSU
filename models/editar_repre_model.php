<?php
    
        require_once "../config.php"; // metodo para llamar al archivo que nos da la conexión a la base de datos

        $id = $_POST['id'];
        $ci = $_POST['cedula'];
        $fname = $_POST['primer_nombre'];
        $sname = $_POST['segundo_nombre'];
        $plastname = $_POST['primer_apellido'];
        $slastname = $_POST['segundo_apellido'];
        $telefono = $_POST['telefono'];
        $correo = $_POST['correo'];


       $editar_student = mysqli_query($conexion, "UPDATE representante SET id_repre='$id', cedula='$ci', 
                                        primer_nombre='$fname', segundo_nombre='$sname',
                                        primer_apellido='$plastname', segundo_apellido='$slastname',
                                         telefono='$telefono', correo='$correo'
                                        where id_repre='$id'");


        require_once('../controllers/editar_repre_controller.php'); 
?>