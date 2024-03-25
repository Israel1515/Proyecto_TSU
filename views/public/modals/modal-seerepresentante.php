<link rel="stylesheet" href="<?php echo constant("URL"); ?>/views/public/bootstrap/CSS/bootstrap.ccs"> <!--Aquí va el link del Css-->

  <!-- Modal Representante -->
  <div class="modal fade" id="ModalseeRepresentante" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h3 class="modal-title" id="staticBackdropLabel">Datos del Representante</h3>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>

        <div class="modal-body">

            <!-- Tabla de informacion de estudiante -->
            <div class="form-group" style="font-size: 20px; font-weight: 600;">

                <div class="row">
                    <div class="col">
                        <label class="control-label"> <b> Cédula: </b> </label>
                        <p class="form-control-static"> 10255639 </p> 
                    </div>

                    <div class="col">
                        <label class="control-label"> <b> Nombres: </b> </label>
                        <p class="form-control-static"> Leslie Margarita </p> 
                    </div>

                    <div class="col">
                        <label class="control-label"> <b> Apellidos: </b> </label>
                        <p class="form-control-static"> León Gacía </p>  
                    </div>
                </div>

                    <br>

                <div class="row">
                    <div class="col">
                        <label class="control-label"> <b> Telefono: </b> </label>
                        <p class="form-control-static"> 04126639874 </p>  
                    </div>
                </div>

                    <br>

            </div>

        </div>

        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
        </div>
      </div>
    </div>
  </div>
  
  <script src="<?php echo constant("URL"); ?>/views/public/bootstrap/JS/bootstrap.bundle.js"></script>