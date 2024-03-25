<?php

if(!$eliminar_course){
            die("Error al eliminar Taller");
        }else{
              echo '
              <script>
                  alert("Se ha eliminado el taller correctamente!");
                  window.location = "../views/main/course.php";
              </script>
          ';
          exit ();
        }

?>