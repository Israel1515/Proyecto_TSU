<?php
        require_once "../config.php";

        $ci = $_POST['id'];
        $query = mysqli_query($conexion,"SELECT id_est FROM estudiante where cedula='$ci';");
        $data = mysqli_fetch_array($query);
        $id_est = $data[0];
        $id_taller = $_POST['taller'];
        
        $insertar_cursa_student = mysqli_query($conexion, "INSERT INTO cursa (fecha_inscripcion,id_est,id_taller)
        VALUES(CURRENT_TIMESTAMP,'$id_est', '$id_taller')"); //Se guarda en variable la inserción de la información a la base de datos 

        if(!$insertar_cursa_student){
            die("Error al inscribir al Estudiante");
        }
        else { 
            echo "<script>alert('Se ha inscrito al estudiante correctamente.');</script>";
            header("location: ../views/register/student/config/edit_student.php?cedula=$ci");
        exit ();
        } 



?>








