<?php

if(!$eliminar_teacher){
            die("Error al eliminar Profesor");
        }else{
              echo '
              <script>
                  alert("Se ha eliminado al profesor correctamente!");
                  window.location = "../views/main/teacher.php";
              </script>
          ';
          exit ();
        }

?>