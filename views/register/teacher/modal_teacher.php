
<!-- Modal Agregar-->
<div class="modal fade" id="Modaladdteacher" data-bs-backdrop="static" tabindex="-1" aria-labelledby="viewModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title" id="ModalLabel">Agregar Nuevo Profesor</h3>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </button>
      </div>

      <div class="modal-body">

        <form action="../../models/registro_teacher_model.php" method="POST" class="container"> 

          <div class="row g-3"> <!-- apertura de etiqueta div con clases de bootstrap que asigna cuantos intems del formulario pueden estar en fila -->

            <div class="col-lg-4"> <!-- apertura de etiqueta div con clases de bootstrap que permite a los items del formulario colocarlos uno al lado del otro -->
              <label for="ci" class="form-label" style="display: flex;">Cédula</label> <!-- etiqueta label que esta vinculada un input  -->
              <input class="modal-add-form-input form-control" type="number" placeholder="Cédula" name="cedula" required autofocus> <!-- etiqueta input con un id, de tipo númerico, con una clase de bootstrap, con atributo de placeholder y autofocus, y esta vinculada con un label -->
            </div> <!-- cierre de etiqueta div que permite a los items del formulario colocarlos uno al lado del otro -->

            <div class="col-lg-4"> 
              <label for="name1" class="form-label" style="display: flex;">Primer Nombre</label> 
              <input class="modal-add-form-input form-control" type="text" placeholder="Primer Nombre" name="primer_nombre" required> 
            </div>

            <div class="col-lg-4"> 
              <label for="name1" class="form-label" style="display: flex;">Segundo Nombre</label> 
              <input class="modal-add-form-input form-control" type="text" placeholder="Segundo Nombre" name="segundo_nombre">  
            </div> 

          </div> 
      
          <br> 

          <div class="row g-3">

            <div class="col-lg-4"> 
              <label for="lastname1" class="form-label" style="display: flex;">Primer Apellido</label>
              <input class="modal-add-form-input form-control" type="text" placeholder="Primer Apellido" name="primer_apellido" required>
            </div>

            <div class="col-lg-4"> 
              <label for="lasname2" class="form-label" style="display: flex;">Segundo Apellido</label>
              <input class="modal-add-form-input form-control" type="text" placeholder="Segundo Apellido" name="segundo_apellido"> 
            </div> 

            <div class="col-lg-4"> <!-- apertura de etiqueta div con clases de bootstrap que permite a los items del formulario colocarlos uno al lado del otro -->
              <label for="nacimiento" class="form-label" style="display: flex;">Fecha de Nacimiento</label> <!-- etiqueta label que esta vinculada un input -->
              <input class="modal-add-form-input form-control" type="date" placeholder="Fecha de Nacimiento" name="fecha_nacimiento" required> <!-- etiqueta input con un id, de tipo texto, con una clase de bootstrap, con atributo de placeholder, y esta vinculada con un label -->
              <div id="nacimientoHelp" class="form-text" style="display: flex;">Ej: 15-03-2002</div> <!-- etiqueta div que muestra una descripción de como llenar el input -->
            </div>
            
          </div> 

          <br> <!-- etiqueta de salto de linea -->

          <div class="row g-3">
            
            <div class="col-lg-4"> <!-- apertura de etiqueta div con clases de bootstrap que permite a los items del formulario colocarlos uno al lado del otro -->
              <label class="form-label" style="display: flex; margin-top: 3px;">Seleccione Genero</label> <!-- etiqueta label que esta vinculada un input -->
              
              <div style="display: inline-block; margin-top: 4px; margin-right: 10px;">
              <input style="width: 15px; height: 15px;" class="modal-add-form-input" type="radio" name="genero" value="Masculino" value="0" required>
              <label for="modal-add-radio-male">Masculíno</label>
              </div>

              <div style="display: inline-block; margin-top: 4px;">
              <input style="width: 15px; height: 15px;" class="modal-add-form-input" type="radio" name="genero" value="Femenino" value="1" required>
              <label for="modal-add-radio-female">Femeníno</label>
              </div>
            </div>

            <div class="col-lg-4">
              <label for="telefc" class="form-label" style="display: flex;">Número de teléfono</label>
              <input class="modal-add-form-input form-control" type="number" placeholder="Número de teléfono" name="telefono" required>
            </div> 

            <div class="col-lg-4"> 
              <label for="telefc" class="form-label" style="display: flex;">Correo Electrónico</label> 
              <input class="modal-add-form-input form-control" type="mail" placeholder="Correo Electrónico" name="correo">
            </div> 
          
          </div>

          <br> 

          <div class="row g-3">

            <div class="col-lg-3" style="align-self: center;">
              <label for="munic" class="form-label" style="display: flex;">Municipio</label> 
                <select name="municipio" id="munic" type="text" class="form-control" placeholder="Municipio" aria-describedby="munichelp" required>
                          <option value=""></option>
                          <option value="Libertador">Libertador</option>
                          <option value="Sucre">Sucre</option>
                          <option value="Baruta">Baruta</option>
                          <option value="Chacao">Chacao</option>
                          <option value="El Hatillo">El Hatillo</option>
                </select>
            </div>

            <div class="col-lg-3" style="align-self: center;">
              <label for="parroq" class="form-label" style="display: flex;">Parroquia</label>
                <select name="parroquia" id="parroq" type="text" class="form-control" placeholder="Parroquia" aria-describedby="parroqhelp" required>
                        
                        <option value=""></option>
                        <option value="San Agustin">San Agustin</option>
                        <option value="Altagracia">Altagracia</option>
                        <option value="Antímano">Antímano</option>
                        <option value="Catedral">Catedral</option>
                        <option value="Chacao">Chacao</option>
                        <option value="Coche">Coche</option>
                        <option value="El Cafetal">El Cafetal</option>
                        <option value="El Hatillo">El Hatillo</option>
                        <option value="El Junquito">El Junquito</option>
                        <option value="El Paraíso">El Paraíso</option>
                        <option value="El Recreo">El Recreo</option>
                        <option value="El Valle">El Valle</option>
                        <option value="Filas de Mariche">Filas de Mariche</option>
                        <option value="La Candelaría">La Candelaría</option>
                        <option value="La Dolorita">La Dolorita</option>
                        <option value="La Pastora">La Pastora</option>
                        <option value="La Vega">La Vega</option>
                        <option value="La Minas">La Minas</option>
                        <option value="Macarao">Macarao</option>
                        <option value="Petare">Petare</option>
                        <option value="San Bernardino">San Bernardino</option>
                        <option value="San José">San José</option>
                        <option value="San Juan">San Juan</option>
                        <option value="San Pedro">San Pedro</option>
                        <option value="Santa Rosalía">Santa Rosalía</option>
                        <option value="Santa Teresa">Santa Teresa</option>
                        <option value="Sucre">Sucre</option>
                        <option value="23 de Enero">23 de Enero</option>
                </select>
            </div>

            <div class="col-lg-6"> <!-- apertura de etiqueta div con clases de bootstrap que permite a los items del formulario colocarlos uno al lado del otro -->
              <label for="av" class="form-label" style="display: flex;">Avenida o Calle</label> <!-- etiqueta label que esta vinculada un input -->
              <input name="av_calle" id="av" type="text" class="form-control" placeholder="Avenida o Calle" aria-describedby="avHelp" required> <!-- etiqueta input con un id, de tipo númerico, con una clase de bootstrap, con atributo de placeholder, y esta vinculada con un label -->
              <div id="nacimientoHelp" class="form-text" style="display: flex;">Especifíque también el sector</div> <!-- etiqueta div que muestra una descripción de como llenar el input -->
            </div> <!-- cierre de etiqueta div que permite a los items del formulario colocarlos uno al lado del otro -->
  
          </div>

          <br> <!-- etiqueta de salto de linea -->
          <br>


          <h4 class="modal-title" id="ModalLabel">Taller(es) a Dictar</h4>

          <div class="row">

            <div class="col-lg-6" style="align-self: center;"> <!-- apertura de etiqueta div con clases de bootstrap que permite a los items del formulario colocarlos uno al lado del otro -->
              <select id="taller" name="taller" class="select2 form-select form-control" style="margin-top: 10px; padding: 10px; border: none; background: #F2F2F2; font-size: 16px;">
              <?php
                require_once "../../config.php";
                $query = mysqli_query($conexion,"SELECT id_taller, nombre
                FROM taller");
                $result = mysqli_num_rows($query);
                if($result > 0)
                {
                while ($dato = mysqli_fetch_array($query)) { ?>
                <option value="<?php echo $dato['id_taller'] ?>"> <?php echo $dato['nombre']; ?> </option>
                <?php } }?>
              </select>
            </div> <!-- cierre de etiqueta div que permite a los items del formulario colocarlos uno al lado del otro -->

          </div>

          <br> <!-- etiqueta de salto de linea -->

          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" aria-label="Close">Cancelar</button>
            <button type="submit" class="btn btn-primary">Guardar</button>
          </div>

        </form>

      </div>
      
    </div>
  </div>
</div>

