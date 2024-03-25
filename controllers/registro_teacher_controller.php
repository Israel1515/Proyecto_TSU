<?php

if(!$insertar_teacher){
            die("Error al insertar los datos del Profesor");
        }else{
              echo '
              <script>
                  alert("Se registrado al profesor correctamente!");
                  window.location = "../views/main/teacher.php";
              </script>
          ';
          exit ();
        }

?>