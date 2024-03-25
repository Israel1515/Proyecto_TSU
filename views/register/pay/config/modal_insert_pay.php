<!-- Modal Agregar-->
<div class="modal fade" id=<?php echo "modalPage$indexModal";?> data-bs-backdrop="static" tabindex="-1" aria-labelledby="viewModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title" id="ModalLabel"> <b> Resgistrar Pago del Estudiante </b> </h3>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </button>
      </div> 
      <div class="modal-body">
        <form action="../../models/registro_pay_model.php" method="post">
<?php

require_once "../../config.php";
$id_taller=$_GET['id_taller'];
$id_cursa = 0;
$id_est = $data['id_est'];
$query= "SELECT cursa.id_cursa as cursa FROM cursa WHERE id_est=$id_est and id_taller=$id_taller";
$result = mysqli_query($conexion, $query);
if ($result) {
  while ($row = mysqli_fetch_array($result)) {
    $id_cursa = $row['cursa'];
  }
}

?>
          <input type="hidden" name="cursa" value=<?php echo $id_cursa; ?>>
          <input type="hidden" name="taller" value=<?php echo $id_taller; ?>>
          <div class="row g-3">
                <div class="col-lg-4"> 
                  <label class="form-label" style="display: flex;"> Cédula del Estudiante </label> 
                  <b class="form-control" value=""><?php echo $data['cedula'] ?></b> 
                </div> 
          </div>
            <br> 
            <div class="row g-3">
              <div class="col-lg-4"> 
                <label for="Fpay" class="form-label" style="display: flex;">Forma de Pago</label>
                    <select name="forma_pago" id="Fpay" type="text" class="form-control" placeholder="Inserte Forma de Pago" aria-describedby="FpayHelp" required> 
                      <option value=""></option>  
                      <option value="Tarjeta">Tarjeta</option>
                      <option value="Efectivo">Efectivo</option>
                      <option value="Movil">Pago Móvil</option>
                    </select> 
              </div>
              <div class="col-lg-4"> 
                <label for="Tpay" class="form-label" style="display: flex;">Tipo de Pago</label> 
                  <select name="tipo_pago" id="Tpay" type="text" class="form-control" placeholder="Inserte Tipo de Pago" aria-describedby="TpayHelp" required> 
                    <option value=""></option>  
                    <option value="Bs">Bs</option>
                    <option value="$">$</option>
                </select>
              </div> 
              <div class="col-lg-4">
                  <label for="Mpay" class="form-label" style="display: flex;">Monto</label> 
                  <input name="monto_pago" id="Mpay" type="number" class="form-control" placeholder="Inserte El Monto" aria-describedby="MpayHelp" required> 
                </div> 
            </div>
            <br>    
            <div class="row g-1"> <!-- apertura de etiqueta div con clases de bootstrap que asigna cuantos intems del formulario pueden estar en fila -->
                <div class="col-lg-7"> <!-- apertura de etiqueta div con clases de bootstrap que permite a los items del formulario colocarlos uno al lado del otro -->
                  <label for="concepto" class="form-label" style="display: flex;">Concepto de Pago</label> 
                  <input name="concepto_pago" id="concepto" type="text" class="form-control" placeholder="Ingrese Concepto de Pago" aria-describedby="CpayHelp" required> <!-- etiqueta input con un id, de tipo númerico, con una clase de bootstrap, con atributo de placeholder, y esta vinculada con un label -->
                </div> <!-- cierre de etiqueta div que permite a los items del formulario colocarlos uno al lado del otro -->
            </div>
            <div class="container-fluid"> 
              <div style="padding-top:4vh" class="col-lg-12">
<?php

include("checkbox_monthpay.php");

?>              
              </div>                    
            </div>
            <br> 
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
            <button type="submit" class="btn btn-primary">Registrar</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
