<?php

if(!$editar_student){
            die("Error al cambiar los datos del representante");
        }else{
              echo '
              <script>
                  alert("Se ha cambiado los datos del representante correctamente!");
                  window.location = "../views/main/repre.php";
              </script>
          ';
          exit ();
        }

?>