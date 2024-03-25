<link rel="stylesheet" href="<?php echo constant("URL"); ?>/views/public/bootstrap/CSS/bootstrap.ccs"> <!--Aquí va el link del Css-->

<div class="modal fade" id="ModalPay" data-bs-backdrop="static" tabindex="-1" aria-labelledby="viewModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">

      <div class="modal-header">
        <h3 class="modal-title text-center" id="viewModalLabel">Ingresar Información del Pago</h3>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      <div class="modal-body">

        <form action="#" method="post" class="container"> <!-- apertura de la etiqueta del fromulario, con el atributo action que especifica a donde va a enviar los datos del formulario y el atributo method que indica el método por el cual se enviará los mismos -->
            <div class="row g-3"> <!-- apertura de etiqueta div con clases de bootstrap que asigna cuantos intems del formulario pueden estar en fila -->
                <div class="col-lg-4"> <!-- apertura de etiqueta div con clases de bootstrap que permite a los items del formulario colocarlos uno al lado del otro -->
                  <label for="Fpay" class="form-label" style="display: flex;">Forma de Pago</label> <!-- etiqueta label que esta vinculada un input -->
                  <input name="Formapay" id="Fpay" type="text" class="form-control" placeholder="Inserte Forma de Pago" aria-describedby="FpayHelp" required> <!-- etiqueta input con un id, de tipo texto, con una clase de bootstrap, con atributo de placeholder, y esta vinculada con un label -->
                </div><!-- cierre de etiqueta div que permite a los items del formulario colocarlos uno al lado del otro -->
                <div class="col-lg-3"> <!-- apertura de etiqueta div con clases de bootstrap que permite a los items del formulario colocarlos uno al lado del otro -->
                  <label for="Tpay" class="form-label" style="display: flex;">Tipo de Pago</label> <!-- etiqueta label que esta vinculada un input -->
                  <input name="Tipopay" id="Tpay" type="text" class="form-control" placeholder="Inserte Tipo de Pago" aria-describedby="TpayHelp" required> <!-- etiqueta input con un id, de tipo texto, con una clase de bootstrap, con atributo de placeholder, y esta vinculada con un label -->
                </div> <!-- cierre de etiqueta div que permite a los items del formulario colocarlos uno al lado del otro -->
                <div class="col-lg-3"> <!-- apertura de etiqueta div con clases de bootstrap que permite a los items del formulario colocarlos uno al lado del otro -->
                  <label for="Mpay" class="form-label" style="display: flex;">Monto</label> <!-- etiqueta label que esta vinculada un input -->
                  <input name="MontoPay" id="Mpay" type="number" class="form-control" placeholder="Inserte El Monto" aria-describedby="MpayHelp" required> <!-- etiqueta input con un id, de tipo texto, con una clase de bootstrap, con atributo de placeholder, y esta vinculada con un label -->
                </div> <!-- cierre de etiqueta div que permite a los items del formulario colocarlos uno al lado del otro -->
            </div> <!-- cierre de etiqueta div que asigna cuantos intems del formulario pueden estar en fila -->
<br> <!-- etiqueta de salto de linea -->
            <div class="row g-1"> <!-- apertura de etiqueta div con clases de bootstrap que asigna cuantos intems del formulario pueden estar en fila -->
              <div class="col-lg-7"> <!-- apertura de etiqueta div con clases de bootstrap que permite a los items del formulario colocarlos uno al lado del otro -->
                <label for="concepto" class="form-label" style="display: flex;">Concepto de Pago</label> <!-- etiqueta label que esta vinculada un input -->
                <input name="concepto_pay" id="concepto" type="text" class="form-control" placeholder="Ingrese Concepto de Pago" aria-describedby="CpayHelp" required> <!-- etiqueta input con un id, de tipo númerico, con una clase de bootstrap, con atributo de placeholder, y esta vinculada con un label -->
              </div> <!-- cierre de etiqueta div que permite a los items del formulario colocarlos uno al lado del otro -->
            </div>        
        </form>
        </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
        <input type="submit" value="Ingresar Datos" class="btn btn-primary"> <!-- etiqueta input tipo boton de inicio de sesión, posee clases de bootstrap y un atributo style -->
      </div>
      
    </div>
  </div>
</div>

<script src="<?php echo constant("URL"); ?>/views/public/bootstrap/JS/bootstrap.bundle.js"></script>