<link rel="stylesheet" href="<?php echo constant("URL"); ?>/views/public/bootstrap/CSS/bootstrap.ccs"> <!--Aquí va el link del Css-->
   
<div class="modal fade" id="ModalseeTeacher" tabindex="-1" aria-labelledby="viewModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
        
            <div class="modal-header">
                <h3 class="modal-title text-center" id="viewModalLabel">Información del Profesor</h3>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-body">

                <!-- Tabla de informacion del Profesor -->
                <div class="form-group" style="font-size: 20px; font-weight: 600;">

                    <div class="row">
                        <div class="col">
                            <label class="control-label"> <b> Cédula: </b> </label>
                            <p class="form-control-static"> 16395044 </p> 
                        </div>
                        <div class="col">
                            <label class="control-label"> <b> Nombres: </b> </label>
                            <p class="form-control-static"> Jose Alejandro </p> 
                        </div>
                        <div class="col">
                            <label class="control-label"> <b> Apellidos: </b> </label>
                            <p class="form-control-static"> Palacios Contreras </p>  
                        </div>
                    </div>

                        <br>

                    <div class="row">
                        <div class="col">
                            <label class="control-label"> <b> Edad: </b> </label>
                            <p class="form-control-static"> 43 </p> 
                        </div>
                        <div class="col">
                            <label class="control-label"> <b> Fecha de Nacimiento: </b> </label>
                            <p class="form-control-static"> 23-03-1980 </p> 
                        </div>
                        <div class="col">
                            <label class="control-label"> <b> Genero: </b> </label>
                            <p class="form-control-static"> M </p> 
                        </div>
                    </div>

                        <br>

                    <div class="row">
                        <div class="col">
                            <label class="control-label"> <b> Municipio: </b> </label>
                            <p class="form-control-static"> Libertador </p> 
                        </div>
                        <div class="col">
                            <label class="control-label"> <b> Parroquia: </b> </label>
                            <p class="form-control-static"> San Agustin </p> 
                        </div>
                        <div class="col">
                            <label class="control-label"> <b> Avenida o Calle: </b> </label>
                            <p class="form-control-static"> 1ra calle de Marín </p>  
                        </div>
                    </div>

                        <br>

                    <div class="row">
                        <div class="col">
                            <label class="control-label"> <b> Telefono: </b> </label>
                            <p class="form-control-static"> 04120181980 </p>  
                        </div>
                        <div class="col">
                            <label class="control-label"> <b> Fecha de Incorporación: </b> </label>
                            <p class="form-control-static"> 15/02/2023 </p>  
                        </div>
                        <div class="col">
                            <label class="control-label"> <b> Taller(es) Asignado(s): </b> </label>
                            <p class="form-control-static"> Percusión Afrovenezolana </p> 
                        </div>
                    </div>
                </div>

            </div>
            
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
            </div>

        </div>
    </div>
</div>

<script src="<?php echo constant("URL"); ?>/views/public/bootstrap/JS/bootstrap.bundle.js"></script>