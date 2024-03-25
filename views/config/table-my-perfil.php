<!-- Tabla de Informacion del Usuario -->
<div class="card" style="margin-left: 60px; margin-right: 25px; margin-top: 5px; margin-bottom: 5px;">

    <h5 class="mb-4" style="margin: 15px;">Informacion de Usuario</h5>

        <div class="card">
          <div class="row g-3">
            <div class="col-lg-4">
              <img class="card-img card-img-left img-fluid" src="../public/img/icon-user.png" alt="Card image" style="margin-top: 25px; margin-left: 15px; width: 250px;">
            </div>
            <div class="col-md-8">
              <div class="card-body">
                <h6 class="card-title">Nombre y Apellido </h6>
                <p class="card-text">
                    <?php
                    echo $_SESSION['nombre']; echo " "; echo $_SESSION['apellido']
                    ?>
                </p>

                <h6 class="card-title">Nombre de Usuario: </h6>
                <p class="card-text">
                    <?php
                    echo $_SESSION['user']
                    ?>
                </p>

                <h6 class="card-title">Contraseña: </h6>
                <p class="card-text">
                    <?php
                    echo $_SESSION['contrasena']
                    ?>
                </p>

                <h6 class="card-title">Nivel de Privilegios: </h6>
                <p class="card-text">
                    <?php
                    echo $_SESSION['rol']
                    ?>
                </p>

                <br>

              </div>
            </div>
          </div>
        </div>

</div>



<!-- Tabla de notificaciones del Sistema -->
<div class="card" style="margin-left: 60px; margin-right: 25px; margin-top: 5px; margin-bottom: 5px;">

    <h5 class="mb-4" style="margin: 15px;">Historial de movimientos en el Sistema</h5>

        <?php

        require_once('../../config.php');

        ?>

        <div class="card">

            <div class="col-md-12">
              <div class="card-body">
                <div class="table-responsive text-nowrap">
                  <table class="table">

                      <thead>
                        <tr>
                        
                        <th>Descripción</th>
                        <th>Fecha</th>
                        
                        </tr>
                      </thead>
          
                      <tbody>
          
                          <?php 
                          //Paginador
                          $query_register = mysqli_query($conexion,"SELECT COUNT(*) as total_registro FROM insert_trigger_fundacion");
                          $result_query = mysqli_fetch_array($query_register);
                          $total_registro = $result_query['total_registro'];
          
                          $por_pagina = 20;
          
                          if(empty($_GET['pagina']))
                          {
                              $pagina = 1;
                          }else{
                              $pagina = $_GET['pagina'];
                          }
          
                          $inicio_pag = ($pagina-1) * $por_pagina;
                          $total_pag = ceil($total_registro / $por_pagina);
          
                          $sql = mysqli_query($conexion,"SELECT id_trigger_insert, desc_trigger_insert, 
                          fecha_trigger_insert FROM `insert_trigger_fundacion` ORDER BY id_trigger_insert
                          DESC LIMIT $inicio_pag,$por_pagina;");
                          
                          $result = mysqli_num_rows($sql);
                          if($result > 0)
                          {
                          while ($data = mysqli_fetch_array($sql)) { ?> 
          
                          
                                  <tr>
          
                                    <td> <?php echo $data['desc_trigger_insert']; ?> </td>
                                     <td> <?php echo $data['fecha_trigger_insert']; ?> </td>
                                    
                                  </tr>
          
                          <?php } }?>
          
                        </tbody>
                   
                  </table>
                </div>

                <div>
                  <ul style="display: inline-flex;">
                      <?php 
                          if($pagina != 1)
                          {
                      ?>
                          <li class="table-number"><a href="?pagina=<?php echo 1; ?>">|<</a></li>
                          <li class="table-number"><a href="?pagina=<?php echo $pagina-1; ?>"><<</a></li>
                      <?php 
                          }
                          for ($i=1; $i <= $total_pag; $i++) { 
                              if($i == $pagina)
                              {
                                  echo '<li class="table-number">'.$i.'</li>';
                              }else{
                                  echo '<li class="table-number"><a href="?pagina='.$i.'">'.$i.'</a></li>';
                              }
                          }

                          if($pagina != $total_pag)
                          {
                      ?>
                          <li class="table-number"><a href="?pagina=<?php echo $pagina + 1; ?>">>></a></li>
                          <li class="table-number"><a href="?pagina=<?php echo $total_pag; ?> ">>|</a></li>
                      <?php } ?>
                  </ul>
                </div>





             </div>
            </div>
        </div>
</div>
