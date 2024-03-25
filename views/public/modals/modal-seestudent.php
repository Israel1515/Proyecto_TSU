<link rel="stylesheet" href="<?php echo constant("URL"); ?>/views/public/bootstrap/CSS/bootstrap.ccs"> <!--Aquí va el link del Css-->
   
<div class="modal fade" id="ModalseeStudent" data-bs-backdrop="static" tabindex="-1" aria-labelledby="viewModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
        
            <div class="modal-header">
                <h3 class="modal-title text-center" id="viewModalLabel">Información del Estudiante</h3>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-body">

                <!-- Tabla de informacion del estudiante -->
                <div class="form-group" style="font-size: 20px; font-weight: 600;">

                    <div class="row">
                        <div class="col">
                            <label class="control-label"> <b> Cédula: </b> </label>
                            <p class="form-control-static"> 26455987 </p> 
                        </div>

                        <div class="col">
                            <label class="control-label"> <b> Nombres: </b> </label>
                            <p class="form-control-static"> Israel Antonio </p> 
                        </div>

                        <div class="col">
                            <label class="control-label"> <b> Apellidos: </b> </label>
                            <p class="form-control-static"> León Gacía </p>  
                        </div>
                    </div>

                        <br>

                    <div class="row">
                        <div class="col">
                            <label class="control-label"> <b> Edad: </b> </label>
                            <p class="form-control-static"> 24 </p> 
                        </div>
                        <div class="col">
                            <label class="control-label"> <b> Fecha de Nacimiento: </b> </label>
                            <p class="form-control-static"> 05/03/1999 </p> 
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
                            <p class="form-control-static"> Av. principal </p>  
                        </div>
                    </div>

                        <br>

                    <div class="row">
                        <div class="col">
                            <label class="control-label"> <b> Correo Electronico: </b> </label>
                            <p class="form-control-static"> israel.leon@gmail.com </p> 
                        </div>
                        <div class="col">
                            <label class="control-label"> <b> Telefono: </b> </label>
                            <p class="form-control-static"> 04126639874 </p>  
                        </div>
                        <div class="col">
                            <label class="control-label"> <b> Fecha de Inscripción: </b> </label>
                            <p class="form-control-static"> 05/06/2023 </p>  
                        </div>
                    </div>

                        <br>
                        
                    <div class="row">
                        <div class="col">
                            <label class="control-label"> <b> Taller(es) Inscrito(s): </b> </label>
                            <p class="form-control-static"> Percusión Afrovenezolana </p> 
                        </div>
                    </div>
                </div>

            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#ModalseeRepresentante">
                Ver Datos del Representante
                </button>
            </div>

        </div>
    </div>
</div>

<?php
    include_once 'views/public/modals/modal-seerepresentante.php';
?>

<script src="<?php echo constant("URL"); ?>/views/public/bootstrap/JS/bootstrap.bundle.js"></script>