<?php

if(!$eliminar_repre){
            die("Error al eliminar al representante");
        }else{
              echo '
              <script>
                  alert("Se ha eliminado al representante correctamente!");
                  window.location = "../views/main/repre.php";
              </script>
          ';
          exit ();
        }

?>