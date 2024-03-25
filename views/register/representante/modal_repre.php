<!-- Modal Agregar-->
<div class="modal fade" id="ModalRepre" data-bs-backdrop="static" tabindex="-1" aria-labelledby="viewModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title" id="ModalLabel">Agregar Nuevo Representante</h3>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </button>
      </div>

      <div class="modal-body">

        <form action="../../models/registro_repre_model.php" method="POST" class="container"> 

        <div class="row g-3"> 
          <div class="col-lg-4"> 
            <label for="ci" class="form-label" style="display: flex;">Cédula</label> 
            <input class="modal-add-form-input form-control" type="number" placeholder="Cédula" name="cedula" required autofocus>
          </div>

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

          <div class="col-lg-4">
            <label for="telefc" class="form-label" style="display: flex;">Número de teléfono</label>
            <input class="modal-add-form-input form-control" type="phone" placeholder="Número de teléfono" name="telefono" required>
          </div> 

          <div class="col-lg-4"> 
              <label for="telefc" class="form-label" style="display: flex;">Correo Electrónico</label> 
              <input class="modal-add-form-input form-control" type="mail" placeholder="Correo Electrónico" name="correo">
          </div> 

        </div>
          
        <br> 
        <br> 
    
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" aria-label="Close">Cancelar</button>
            <button type="submit" class="btn btn-primary">Guardar</button>
          </div>

        </form>

      </div>
      
    </div>
  </div>
</div>