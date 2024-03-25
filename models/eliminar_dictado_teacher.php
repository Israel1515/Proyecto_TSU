<?php

require_once "../config.php"; // metodo para llamar al archivo que nos da la conexión a la base de datos

$profesor = $_POST['profesor'];
$ci = $_POST['ci'];
$taller = $_POST['taller'];
?>

<div id="ci" ><?echo $ci?></div>

<?php

$eliminar_dictado_teacher = mysqli_query($conexion, "DELETE FROM dictado where id_prof='$profesor' and id_taller='$taller'");



if(!$eliminar_dictado_teacher){
            die("Error al retirar al profesor del taller");
        }
        else { 
          echo '
            <script>
            const ci = document.querySelector"#ci";
            alert("Se ha retirado al profesor correctamente. Ya no dicta este taller");
            </script>
            ';
            header("location: ../views/register/teacher/config/edit_teacher.php?cedula=$ci");
          exit ();
        }

?>