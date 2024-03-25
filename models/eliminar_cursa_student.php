<?php

require_once "../config.php"; // metodo para llamar al archivo que nos da la conexión a la base de datos

$estudiante = $_POST['estudiante'];
$ci = $_POST['ci'];
$taller = $_POST['taller'];
?>

<div id="ci" ><?echo $ci?></div>

<?php
try {

  
  $eliminar_cursa_student = mysqli_query($conexion, "DELETE FROM cursa where id_est='$estudiante' and id_taller='$taller'");



if(!$eliminar_cursa_student){
            die("Error al desinscribir al Estudiante");
        }
        else { 
          echo '
          <script>
          const ci = document.querySelector"#ci";
            alert("Se ha desinscrito al estudiante correctamente. Ya no forma parte de este taller");
            </script>
            ';
            header("location: ../views/register/student/config/edit_student.php?cedula=$ci");
          exit ();
        }

} catch (\Throwable $th) {
  echo "<script>
  alert('no puedes desinscribir a este estudiante  porque tiene pagos realizados, primero limpia el historia')
  ";
  header("location: ../views/register/student/config/edit_student.php?cedula=$ci");
  exit ();
}
?>


