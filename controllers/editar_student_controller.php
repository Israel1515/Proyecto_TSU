<?php

if(!$editar_student && !$editar_course_student){
            die("Error al cambiar los datos del Estudiante");
        }else{
              echo '
              <script>
                  alert("Se ha cambiado los datos del estudiante correctamente!");
                  window.location = "../views/main/student.php";
              </script>
          ';
          exit ();
        }

?>