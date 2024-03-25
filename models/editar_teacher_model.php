<?php
    
        require_once "../config.php"; // metodo para llamar al archivo que nos da la conexión a la base de datos

        $id = $_POST['id'];
        $ci = $_POST['cedula'];
        $fname = $_POST['primer_nombre'];
        $sname = $_POST['segundo_nombre'];
        $plastname = $_POST['primer_apellido'];
        $slastname = $_POST['segundo_apellido'];
        $birth = $_POST['fecha_nacimiento'];
        $sex = $_POST['genero'];
        $munic = $_POST['municipio'];
        $parroq = $_POST['parroquia'];
        $av = $_POST['av_calle'];
        $telefono = $_POST['telefono'];
        $correo = $_POST['correo'];


       $editar_teacher = mysqli_query($conexion, "UPDATE profesor SET id_prof='$id', cedula='$ci', 
                                        primer_nombre='$fname', segundo_nombre='$sname',
                                        primer_apellido='$plastname', segundo_apellido='$slastname',
                                        fecha_nacimiento='$birth', genero='$sex', municipio='$munic',
                                        parroquia='$parroq', av_calle='$av', telefono='$telefono', correo='$correo' 
                                        where id_prof='$id'");


        require_once('../controllers/editar_teacher_controller.php'); 
?>