<?php

        //code...
        
        require_once "../config.php"; // metodo para llamar al archivo que nos da la conexión a la base de datos
        
        $id = $_POST['id'];
        $fechaDeInscripcion = $_POST['fechaDeInscripcion'];
        $id_taller = $_POST['id_taller'];
        $ci = $_POST['cedula'];
        $fname = $_POST['primer_nombre'];
        $sname = $_POST['segundo_nombre'];
        $plastname = $_POST['primer_apellido'];
        $slastname = $_POST['segundo_apellido'];
        $birth = $_POST['fecha_nacimiento'];
        $sex = $_POST['genero'];
        $condicion = $_POST['condicion'];
        $munic = $_POST['municipio'];
        $parroq = $_POST['parroquia'];
        $av = $_POST['av_calle'];
        $telefono = $_POST['telefono'];
        $correo = $_POST['correo'];
        $fechaDeInscripcion = date('Y-m-d', strtotime($fechaDeInscripcion));



        $editar_student = mysqli_query($conexion, "UPDATE estudiante SET id_est='$id', cedula='$ci', 
                                        primer_nombre='$fname', segundo_nombre='$sname',
                                        primer_apellido='$plastname', segundo_apellido='$slastname',
                                        fecha_nacimiento='$birth', genero='$sex', condicion='$condicion', municipio='$munic',
                                        parroquia='$parroq', av_calle='$av', telefono='$telefono', correo='$correo'
                                        where id_est='$id'");
                                        
        $editar_fecha_1 = mysqli_query($conexion, "UPDATE cursa SET fecha_inscripcion='$fechaDeInscripcion' where id_taller='$id_taller'");

        $editar_fecha_2 = mysqli_query($conexion, "UPDATE cursa SET fecha_inscripcion='$fechaDeInscripcion' where id_taller='$id_taller'");
        

        
        require_once('../controllers/editar_student_controller.php'); 

        ?>