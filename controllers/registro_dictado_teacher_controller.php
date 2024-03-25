<?php

$ci = $_POST['id'];

if(!$insertar_dictado_teacher){
    die("Error al asignarle un taller al profesor");
}
else { 
    echo '
    <script>
    alert("Se le ha asignado un taller ha este profesor correctamente.");
    
    </script>';
    header("location: ../views/register/teacher/config/edit_teacher.php?cedula=$ci");
exit ();
} 

?>