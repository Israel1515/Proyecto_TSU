<?php

if(!$editar_user){
            die("Error al cambiar los datos del Usuario");
        }else{
              echo '
              <script>
                  alert("Se ha cambiado los datos del usuario correctamente!");
                  window.location = "../views/main/edit-user.php";
              </script>
          ';
          exit ();
        }

?>