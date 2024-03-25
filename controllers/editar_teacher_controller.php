<?php

if(!$editar_teacher){
            die("Error al cambiar los datos del Profesor");
        }else{
              echo '
              <script>
                  alert("Se ha cambiado los datos del profesor correctamente!");
                  window.location = "../views/main/teacher.php";
              </script>
          ';
          exit ();
        }

?>