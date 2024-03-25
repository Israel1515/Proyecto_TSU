<?php

if(!$eliminar_student){
            die("Error al eliminar Estudiante");
        }else{
              echo '
              <script>
                  alert("Se ha eliminado al estudiante correctamente!");
                  window.location = "../views/main/student.php";
              </script>
          ';
          exit ();
        }

?>