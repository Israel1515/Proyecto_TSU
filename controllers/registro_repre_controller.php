<?php

if(!$insertar_student && !$insertar_student_pay){
            die("Error al insertar los datos del Representante");
        }else{
              echo '
              <script>
                  alert("Se ha registrado al representante correctamente!");
                  window.location = "../views/main/repre.php";
              </script>
          ';
          exit ();
        }

?>