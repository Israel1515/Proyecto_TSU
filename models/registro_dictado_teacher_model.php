<?php
        require_once "../config.php";

        $ci = $_POST['id'];
        $query = mysqli_query($conexion,"SELECT id_prof FROM profesor where cedula='$ci';");
        $data = mysqli_fetch_array($query);
        $id_prof = $data[0];
        $id_taller = $_POST['taller'];
        
        $insertar_dictado_teacher = mysqli_query($conexion, "INSERT INTO dictado (id_prof,id_taller)
        VALUES('$id_prof', '$id_taller')");

        if(!$insertar_dictado_teacher){
            die("Error al asignarle un taller al profesor");
        }
        else { 
            echo "<script>alert('Se le ha asignado un taller ha este profesor correctamente.');</script>";
            header("location: ../views/register/teacher/config/edit_teacher.php?cedula=$ci");
        exit ();
        } 

?>