<link rel="stylesheet" href="<?php echo constant("URL"); ?>/views/public/bootstrap/CSS/bootstrap.ccs"> <!--Aquí va el link del Css-->
   
<div class="modal fade" id="ModalseeCourse" tabindex="-1" aria-labelledby="viewModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
        
            <div class="modal-header">
                <h3 class="modal-title text-center" id="viewModalLabel">Información del Taller</h3>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-body">

                <!-- Tabla de informacion del Taller -->
                <div class="form-group" style="font-size: 20px; font-weight: 600;">

                    <div class="row">
                        <div class="col">
                            <label class="control-label"> <b> Nombre del Taller: </b> </label>
                            <p class="form-control-static"> Percusión Afrovenezolana </p> 
                        </div>
                        <div class="col">
                            <label class="control-label"> <b> Sede del Taller: </b> </label>
                            <p class="form-control-static"> Pasaje 8 </p>  
                        </div>
                    </div>

                        <br>

                    <div class="row">
                        <div class="col">
                            <label class="control-label"> <b> Descripción: </b> </label>
                            <p class="form-control-static"> Los géneros más famosos de la percusión Venezolana </p> 
                        </div>
                    </div>

                        <br>

                    <div class="row">
                        <div class="col">
                            <label class="control-label"> <b> Cantidad de Estudiantes: </b> </label>
                            <p class="form-control-static"> 15 </p> 
                        </div>
                        <div class="col">
                            <label class="control-label"> <b> Profesor: </b> </label>
                            <p class="form-control-static"> José Palacios </p> 
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