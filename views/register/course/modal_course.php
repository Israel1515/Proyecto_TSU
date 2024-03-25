
<!-- Modal Agregar-->
<div class="modal fade" id="ModaladdCourse" data-bs-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Agregar Nuevo Taller</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </button>
      </div>

      <div class="modal-body">
        <form action="../../models/registro_course_model.php" method="post">
          <div class="modal-body">

            <label for="">Nombre</label>
            <input type="text" class="form-control" name="nombre" value = "" placeholder="Ingrese el Nombre" required> 

            <br>
            <label for="">Sede</label>
            <input type="text" class="form-control" name="sede" value = "" placeholder="Ingrese la Sede" required>

            <br>
            <label for="">Descripción</label>
            <input type="text" class="form-control" name="descripcion" value = "" placeholder="Ingrese la Descripción del taller" required> 

          </div>

          <br>
          <br>

          <div class="modal-footer">
            
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
            <button type="submit" class="btn btn-primary">Guardar</button>
          </div>

        </form>
      </div>
    </div>
  </div>
</div>