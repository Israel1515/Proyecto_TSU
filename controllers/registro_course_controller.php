<?php

if(!$insertar_course){
            die("Error al insertar los datos del Taller");
        }else{
              echo '
              <script>
                  alert("Se registrado el taller correctamente!");
                  window.location = "../views/main/course.php";
              </script>
          ';
          exit ();
        }

?>