<?php

if(!$eliminar_user){
            die("Error al eliminar Usuario");
        }else{
              echo '
              <script>
                  alert("Se ha eliminado al usuario correctamente");
                  window.location = "../views/main/edit-user.php";
              </script>
          ';
          exit ();
        }

?>