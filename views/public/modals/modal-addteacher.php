<link rel="stylesheet" href="<?php echo constant("URL"); ?>/views/public/bootstrap/CSS/bootstrap.ccs"> <!--Aquí va el link del Css-->

<div class="modal fade" id="ModaladdTeacher" data-bs-backdrop="static" tabindex="-1" aria-labelledby="viewModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">

      <div class="modal-header">
        <h3 class="modal-title text-center" id="viewModalLabel">Ingresar Datos del Profesor </h3>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      <div class="modal-body">

      <form action="#" method="post" class="modal-add-form container"> <!-- apertura de la etiqueta del fromulario, con el atributo action que especifica a donde va a enviar los datos del formulario y el atributo method que indica el método por el cual se enviará los mismos -->
          <div class="row g-3"> <!-- apertura de etiqueta div con clases de bootstrap que asigna cuantos intems del formulario pueden estar en fila -->
            <div class="col-lg-4"> <!-- apertura de etiqueta div con clases de bootstrap que permite a los items del formulario colocarlos uno al lado del otro -->
              <label for="ci" class="form-label" style="display: flex;">Cédula</label> <!-- etiqueta label que esta vinculada un input  -->
              <input class="modal-add-form-input form-control" type="number" placeholder="Cedula" name="cedula" required autofocus> <!-- etiqueta input con un id, de tipo númerico, con una clase de bootstrap, con atributo de placeholder y autofocus, y esta vinculada con un label -->
            </div> <!-- cierre de etiqueta div que permite a los items del formulario colocarlos uno al lado del otro -->

            <div class="col-lg-4"> <!-- apertura de etiqueta div con clases de bootstrap que permite a los items del formulario colocarlos uno al lado del otro -->
              <label for="name1" class="form-label" style="display: flex;">Primer Nombre</label> <!-- etiqueta label que esta vinculada un input -->
              <input class="modal-add-form-input form-control" type="text" placeholder="Primer Nombre" name="firstName" required> <!-- etiqueta input con un id, de tipo texto, con una clase de bootstrap, con atributo de placeholder, y esta vinculada con un label -->
            </div><!-- cierre de etiqueta div que permite a los items del formulario colocarlos uno al lado del otro -->

            <div class="col-lg-4"> <!-- apertura de etiqueta div con clases de bootstrap que permite a los items del formulario colocarlos uno al lado del otro -->
              <label for="name2" class="form-label" style="display: flex;">Segundo Nombre</label> <!-- etiqueta label que esta vinculada un input -->
              <input class="modal-add-form-input form-control" type="text" placeholder="Segundo Nombre" name="secondName">  <!-- etiqueta input con un id, de tipo texto, con una clase de bootstrap, con atributo de placeholder, y esta vinculada con un label -->
            </div> <!-- cierre de etiqueta div que permite a los items del formulario colocarlos uno al lado del otro -->
          </div> <!-- cierre de etiqueta div que asigna cuantos intems del formulario pueden estar en fila -->
<br> <!-- etiqueta de salto de linea -->
          <div class="row g-3"> <!-- apertura de etiqueta div con clases de bootstrap que asigna cuantos intems del formulario pueden estar en fila -->
            <div class="col-lg-4"> <!-- apertura de etiqueta div con clases de bootstrap que permite a los items del formulario colocarlos uno al lado del otro -->
              <label for="lastname1" class="form-label" style="display: flex;">Primer Apellido</label> <!-- etiqueta label que esta vinculada un input -->
              <input class="modal-add-form-input form-control" type="text" placeholder="Primer Apellido" name="firstSurname" required> <!-- etiqueta input con un id, de tipo texto, con una clase de bootstrap, con atributo de placeholder, y esta vinculada con un label -->
            </div><!-- cierre de etiqueta div que permite a los items del formulario colocarlos uno al lado del otro -->

            <div class="col-lg-4"> <!-- apertura de etiqueta div con clases de bootstrap que permite a los items del formulario colocarlos uno al lado del otro -->
              <label for="lasname2" class="form-label" style="display: flex;">Segundo Apellido</label> <!-- etiqueta label que esta vinculada un input -->
              <input class="modal-add-form-input form-control" type="text" placeholder="Segundo Apellido" name="secondSurname"> <!-- etiqueta input con un id, de tipo texto, con una clase de bootstrap, con atributo de placeholder, y esta vinculada con un label -->
            </div> <!-- cierre de etiqueta div que permite a los items del formulario colocarlos uno al lado del otro -->

            <div class="col-lg-4"> <!-- apertura de etiqueta div con clases de bootstrap que permite a los items del formulario colocarlos uno al lado del otro -->
              <label for="nacimiento" class="form-label" style="display: flex;">Fecha de Nacimiento</label> <!-- etiqueta label que esta vinculada un input -->
              <input class="modal-add-form-input form-control" type="date" placeholder="Fecha de Nacimiento" name="birthdate" required> <!-- etiqueta input con un id, de tipo texto, con una clase de bootstrap, con atributo de placeholder, y esta vinculada con un label -->
            </div> <!-- cierre de etiqueta div que permite a los items del formulario colocarlos uno al lado del otro -->
          </div> <!-- cierre de etiqueta div que asigna cuantos intems del formulario pueden estar en fila -->
<br> <!-- etiqueta de salto de linea -->
          <div class="row g-4"> <!-- apertura de etiqueta div con clases de bootstrap que asigna cuantos intems del formulario pueden estar en fila -->
            <div class="col-lg-2" style="align-self: center;"> <!-- apertura de etiqueta div con clases de bootstrap que permite a los items del formulario colocarlos uno al lado del otro -->
              <input style="width: 15px; height: 15px;" type="radio" name="gender" value="1" required>
              <label for="modal-add-radio-male">Masculino</label>
            </div> <!-- cierre de etiqueta div que permite a los items del formulario colocarlos uno al lado del otro -->

            <div class="col-lg-2" style="align-self: center;">
              <input style="width: 15px; height: 15px;" type="radio" name="gender" value="0" required>
              <label for="modal-add-radio-female">Femenina</label>
            </div>

            <div class="col-lg-4"> <!-- apertura de etiqueta div con clases de bootstrap que permite a los items del formulario colocarlos uno al lado del otro -->
              <label for="telefc" class="form-label" style="display: flex;">Numero de Telefono</label> <!-- etiqueta label que esta vinculada un input -->
              <input class="modal-add-form-input form-control" type="phone" placeholder="Telefono" name="phone" required>
            </div> <!-- cierre de etiqueta div que permite a los items del formulario colocarlos uno al lado del otro -->
          
            <div class="col-lg-4"> <!-- apertura de etiqueta div con clases de bootstrap que permite a los items del formulario colocarlos uno al lado del otro -->
              <label for="telefc" class="form-label" style="display: flex;">Correo Electronico</label> <!-- etiqueta label que esta vinculada un input -->
              <input class="modal-add-form-input form-control" type="mail" placeholder="Correo" name="correo">
            </div> <!-- cierre de etiqueta div que permite a los items del formulario colocarlos uno al lado del otro -->
          </div>
<br> <!-- etiqueta de salto de linea -->
          <div class="row g-3"> <!-- apertura de etiqueta div con clases de bootstrap que asigna cuantos intems del formulario pueden estar en fila -->
            <div class="col-lg-4"> <!-- apertura de etiqueta div con clases de bootstrap que permite a los items del formulario colocarlos uno al lado del otro -->
              <label for="munic" class="form-label" style="display: flex;">Municipio</label> <!-- etiqueta label que esta vinculada un input -->
              <input name="municipio" id="munic" type="text" class="form-control" placeholder="Municipio" aria-describedby="munichelp" required> <!-- etiqueta input con un id, de tipo texto, con una clase de bootstrap, con atributo de placeholder, y esta vinculada con un label -->
            </div> <!-- cierre de etiqueta div que permite a los items del formulario colocarlos uno al lado del otro -->

            <div class="col-lg-4"> <!-- apertura de etiqueta div con clases de bootstrap que permite a los items del formulario colocarlos uno al lado del otro -->
              <label for="parroq" class="form-label" style="display: flex;">Parroquia</label> <!-- etiqueta label que esta vinculada un input -->
              <input name="parroquia" id="parroq" type="text" class="form-control" placeholder="Parroquia" aria-describedby="parroqhelp" required> <!-- etiqueta input con un id, de tipo númerico, con una clase de bootstrap, con atributo de placeholder, y esta vinculada con un label -->
            </div> <!-- cierre de etiqueta div que permite a los items del formulario colocarlos uno al lado del otro -->

            <div class="col-lg-4"> <!-- apertura de etiqueta div con clases de bootstrap que permite a los items del formulario colocarlos uno al lado del otro -->
              <label for="av" class="form-label" style="display: flex;">Avenida o Calle</label> <!-- etiqueta label que esta vinculada un input -->
              <input name="avenida" id="av" type="text" class="form-control" placeholder="Avenida o Calle" aria-describedby="avHelp" required> <!-- etiqueta input con un id, de tipo númerico, con una clase de bootstrap, con atributo de placeholder, y esta vinculada con un label -->
            </div> <!-- cierre de etiqueta div que permite a los items del formulario colocarlos uno al lado del otro -->
          </div>
<br> <!-- etiqueta de salto de linea -->
          <div class="row"> <!-- apertura de etiqueta div con clases de bootstrap que asigna cuantos intems del formulario pueden estar en fila -->
            <div class="col-lg-6"> <!-- apertura de etiqueta div con clases de bootstrap que permite a los items del formulario colocarlos uno al lado del otro -->
              <label for="Tallins" class="form-label" style="display: flex;">Taller(es) Asignado(s)</label> <!-- etiqueta label que esta vinculada un input -->
              <input name="Taller" id="Tallins" type="text" class="form-control" placeholder="Nombre del Taller" aria-describedby="tallerhelp" required> <!-- etiqueta input con un id, de tipo númerico, con una clase de bootstrap, con atributo de placeholder, y esta vinculada con un label -->
            </div> <!-- cierre de etiqueta div que permite a los items del formulario colocarlos uno al lado del otro -->
          </div>
<br> <!-- etiqueta de salto de linea -->

          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
            <button class="btn btn-primary" id="modal-add-submit" type="submit">Guardar</button> <!-- etiqueta input tipo boton de inicio de sesión, posee clases de bootstrap y un atributo style -->
          </div>

        </form>
      </div>

    </div>
  </div>
</div>

<script src="<?php echo constant("URL"); ?>/views/public/bootstrap/JS/bootstrap.bundle.js"></script>