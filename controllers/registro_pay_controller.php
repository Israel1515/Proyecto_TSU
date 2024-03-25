<?php

if(!$insertar_pay){
            die("Error al insertar el pago del Estudiante");
        }else{
              echo "
              <script>
                  alert('Se registrado el Pago del estudiante correctamente!');
                  window.location = '../views/main/pago-taller.php?id_taller=$id_taller';
              </script>
          ";
          exit ();
        }

?>