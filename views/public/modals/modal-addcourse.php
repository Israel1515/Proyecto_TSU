<link rel="stylesheet" href="<?php echo constant("URL"); ?>/views/public/bootstrap/CSS/bootstrap.ccs"> <!--Aquí va el link del Css-->

<div class="modal fade" id="ModaladdCourse" data-bs-backdrop="static" tabindex="-1" aria-labelledby="viewModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">

      <div class="modal-header">
        <h3 class="modal-title text-center" id="viewModalLabel">Ingresar Información del Taller</h3>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      <div class="modal-body">

        <form action="#" method="post" class="container"> <!-- apertura de la etiqueta del fromulario, con el atributo action que especifica a donde va a enviar los datos del formulario y el atributo method que indica el método por el cual se enviará los mismos -->
          <div class="row g-2"> <!-- apertura de etiqueta div con clases de bootstrap que asigna cuantos intems del formulario pueden estar en fila -->
              <div class="col-lg-5"> <!-- apertura de etiqueta div con clases de bootstrap que permite a los items del formulario colocarlos uno al lado del otro -->
                <label for="course" class="form-label" style="display: flex;">Nombre del Taller</label> <!-- etiqueta label que esta vinculada un input  -->
                <input class="modal-add-form-input form-control" type="text" placeholder="Taller" name="name_course" required autofocus> <!-- etiqueta input con un id, de tipo númerico, con una clase de bootstrap, con atributo de placeholder y autofocus, y esta vinculada con un label -->
              </div><!-- cierre de etiqueta div que permite a los items del formulario colocarlos uno al lado del otro -->

              <div class="col-lg-5"> <!-- apertura de etiqueta div con clases de bootstrap que permite a los items del formulario colocarlos uno al lado del otro -->
                <label for="sede" class="form-label" style="display: flex;">Sede del Taller</label> <!-- etiqueta label que esta vinculada un input  -->
                <input class="modal-add-form-input form-control" type="text" placeholder="Sede" name="sede_course" required> <!-- etiqueta input con un id, de tipo númerico, con una clase de bootstrap, con atributo de placeholder y autofocus, y esta vinculada con un label -->
              </div> <!-- cierre de etiqueta div que permite a los items del formulario colocarlos uno al lado del otro -->
          </div> <!-- cierre de etiqueta div que asigna cuantos intems del formulario pueden estar en fila -->
<br> <!-- etiqueta de salto de linea -->
          <div class="row g-1"> <!-- apertura de etiqueta div con clases de bootstrap que asigna cuantos intems del formulario pueden estar en fila -->
            <div class="col-lg-10"> <!-- apertura de etiqueta div con clases de bootstrap que permite a los items del formulario colocarlos uno al lado del otro -->
              <label for="descripcion" class="form-label" style="display: flex;">Descripción del Taller</label> <!-- etiqueta label que esta vinculada un input  -->
              <input class="modal-add-form-input form-control" type="text" placeholder="Descripción" name="descripcion_course" required> <!-- etiqueta input con un id, de tipo númerico, con una clase de bootstrap, con atributo de placeholder y autofocus, y esta vinculada con un label -->
            </div> <!-- cierre de etiqueta div que permite a los items del formulario colocarlos uno al lado del otro -->
          </div>
        </form>
      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
        <button class="btn btn-primary" id="modal-add-submit" type="submit">Guardar</button> <!-- etiqueta input tipo boton de inicio de sesión, posee clases de bootstrap y un atributo style -->
      </div>

    </div>
  </div>
</div>

<script src="<?php echo constant("URL"); ?>/views/public/bootstrap/JS/bootstrap.bundle.js"></script>
