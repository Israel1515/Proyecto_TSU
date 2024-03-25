<?php

if(!$editar_course){
            die("Error al cambiar los datos del Taller");
        }else{
              echo '
              <script>
                  alert("Se ha cambiado los datos del taller correctamente!");
                  window.location = "../views/main/course.php";
              </script>
          ';
          exit ();
        }

?>