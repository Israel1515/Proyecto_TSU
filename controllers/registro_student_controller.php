<?php

if(!$insertar_student && !$insertar_student_pay && !$insertar_course_student && !$insertar_estatus){
            die("Error al insertar los datos del Estudiante");
        }else{
              echo '
              <script>
                  alert("Se registrado al estudiante correctamente!");
                  window.location = "../views/main/student.php";
              </script>
          ';
          exit ();
        }

?>