<?php
    
        require_once "../config.php"; // metodo para llamar al archivo que nos da la conexión a la base de datos

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

        $insertar_teacher = mysqli_query($conexion, "INSERT INTO profesor (cedula,primer_nombre,segundo_nombre,primer_apellido,segundo_apellido,
        fecha_nacimiento,genero,municipio,parroquia,av_calle,telefono,correo)
                                VALUES('$ci', '$fname', '$sname', '$plastname', '$slastname', 
                                '$birth', '$sex', '$munic', '$parroq', '$av', '$telefono', '$correo')"); //Se guarda en variable la inserción de la información a la base de datos

        

                $id_taller = $_POST['taller'];

                $query = mysqli_query($conexion,"SELECT id_prof, cedula
                FROM profesor where cedula = '$ci';");

                $data = mysqli_fetch_array($query);

                $insert_id = $data['id_prof'];

                $insertar_course_student = mysqli_query($conexion, "INSERT INTO dictado (id_prof,id_taller)
                VALUES('$insert_id', '$id_taller')"); //Se guarda en variable la inserción de la información a la base de datos 


        require_once('../controllers/registro_teacher_controller.php');

?>