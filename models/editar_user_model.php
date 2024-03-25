<?php
    
        require_once "../config.php"; // metodo para llamar al archivo que nos da la conexión a la base de datos

        $id = $_POST['id'];
        $name = $_POST['nombre'];
        $lastname = $_POST['apellido'];
        $name_user = $_POST['nombre_usuario'];
        $contrasena = $_POST['contrasena'];
        $rol = $_POST['rol'];


       $editar_user = mysqli_query($conexion, "UPDATE usuarios SET id='$id', nombre='$name', 
                                        apellido='$lastname', nombre_usuario='$name_user',
                                        contrasena='$contrasena', rol='$rol'
                                        where id='$id'");


        require_once('../controllers/editar_user_controller.php'); 
?>