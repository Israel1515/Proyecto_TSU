
<!-- Modal Agregar-->
<div class="modal fade" id="ModalStudent" data-bs-backdrop="static" tabindex="-1" aria-labelledby="viewModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title" id="ModalLabel">Agregar Al Nuevo Estudiante</h3>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </button>
      </div>

      <div class="modal-body">

        <form action="../../models/registro_student_model.php" method="POST" class="container"> 

        <div class="row g-3"> 
          
          <div class="col-lg-4"> 
            <label for="ci" class="form-label" style="display: flex;">Cédula</label> 
            <input class="modal-add-form-input form-control" type="number" placeholder="Cedula" name="cedula" required autofocus> 
          </div> 

          <div class="col-lg-4"> <!-- apertura de etiqueta div con clases de bootstrap que permite a los items del formulario colocarlos uno al lado del otro -->
            <label for="name1" class="form-label" style="display: flex;">Primer Nombre</label> <!-- etiqueta label que esta vinculada un input -->
            <input class="modal-add-form-input form-control" type="text" placeholder="Primer Nombre" name="primer_nombre" required> <!-- etiqueta input con un id, de tipo texto, con una clase de bootstrap, con atributo de placeholder, y esta vinculada con un label -->
          </div><!-- cierre de etiqueta div que permite a los items del formulario colocarlos uno al lado del otro -->

          <div class="col-lg-4"> <!-- apertura de etiqueta div con clases de bootstrap que permite a los items del formulario colocarlos uno al lado del otro -->
            <label for="name2" class="form-label" style="display: flex;">Segundo Nombre</label> <!-- etiqueta label que esta vinculada un input -->
            <input class="modal-add-form-input form-control" type="text" placeholder="Segundo Nombre" name="segundo_nombre">  <!-- etiqueta input con un id, de tipo texto, con una clase de bootstrap, con atributo de placeholder, y esta vinculada con un label -->
          </div> 

        </div> 

<br> 

        <div class="row g-3">

          <div class="col-lg-4"> 
            <label for="lastname1" class="form-label" style="display: flex;">Primer Apellido</label> 
            <input class="modal-add-form-input form-control" type="text" placeholder="Primer Apellido" name="primer_apellido" required> <!-- etiqueta input con un id, de tipo texto, con una clase de bootstrap, con atributo de placeholder, y esta vinculada con un label -->
          </div>

          <div class="col-lg-4"> 
            <label for="lasname2" class="form-label" style="display: flex;">Segundo Apellido</label> <!-- etiqueta label que esta vinculada un input -->
            <input class="modal-add-form-input form-control" type="text" placeholder="Segundo Apellido" name="segundo_apellido"> 
          </div> 

          <div class="col-lg-4">  
            <label for="nacimiento" class="form-label" style="display: flex;">Fecha de Nacimiento</label> 
            <input class="modal-add-form-input form-control" type="date" placeholder="Fecha de Nacimiento" name="fecha_nacimiento" required> 
        
        </div> 

<br>

        <div class="row g-3">

          <div class="col-lg-4"> 
            <label class="form-label" style="display: flex; margin-top: 3px;">Seleccione el Género</label> 
            
            <div style="display: inline-block; margin-top: 4px; margin-right: 10px;">
            <input style="width: 15px; height: 15px;" class="modal-add-form-input" type="radio" name="genero" value="Masculino" value="0" required>
            <label for="modal-add-radio-male">Masculino</label>
            </div>

            <div style="display: inline-block; margin-top: 4px;">
            <input style="width: 15px; height: 15px;" class="modal-add-form-input" type="radio" name="genero" value="Femenino" value="1" required>
            <label for="modal-add-radio-female">Femenina</label>
            </div>
          </div>

          <div class="col-lg-4"> <!-- apertura de etiqueta div con clases de bootstrap que permite a los items del formulario colocarlos uno al lado del otro -->
            <label class="form-label" style="display: flex;">Número de Teléfono</label> <!-- etiqueta label que esta vinculada un input -->
            <input class="modal-add-form-input form-control" type="number" placeholder="Teléfono" name="telefono" required>
          </div> <!-- cierre de etiqueta div que permite a los items del formulario colocarlos uno al lado del otro -->

          <div class="col-lg-4"> 
              <label class="form-label" style="display: flex;">Correo Electrónico</label> 
              <input class="modal-add-form-input form-control" type="mail" placeholder="Correo" name="correo">
          </div> 
        
        </div>
<br> 

        <div class="row g-3"> 
          <div class="col-lg-4"> 
            <label class="form-label" style="display: flex;">Tiene algún tipo de condición</label> 
            <input class="modal-add-form-input form-control" type="text" placeholder="Si la tiene indique cual" name="condicion">
          </div> 

          <div class="col-lg-4" style="align-self: center;">
            <label for="munic" class="form-label" style="display: flex;">Municipio</label> 
              <select name="municipio" id="munic" type="text" class="form-control" placeholder="Municipio" aria-describedby="munichelp" required>
                <option value=""></option>
                <option value="Libertador">Libertador</option>
                <option value="Sucre">Sucre</option>
                <option value="Baruta">Baruta</option>
                <option value="Chacao">Chacao</option>
                <option value="El Hatillo">El Hatillo</option>
                <option value="Otro">Otro</option>
              </select>
          </div>

          <div class="col-lg-4" style="align-self: center;">
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
                <option value="Otro">Otro</option>
            </select>
          </div>

        </div>

<br> 
<br>

        <div class="row g-1"> <!-- apertura de etiqueta div con clases de bootstrap que asigna cuantos intems del formulario pueden estar en fila -->

          <div class="col-lg-8"> 
            <br>
            <label for="av" class="form-label" style="display: flex;">Avenida o Calle</label> <!-- etiqueta label que esta vinculada un input -->
            <input name="av_calle" id="av" type="text" class="form-control" placeholder="Especifíque también el sector" aria-describedby="avHelp" required> <!-- etiqueta input con un id, de tipo númerico, con una clase de bootstrap, con atributo de placeholder, y esta vinculada con un label -->
            <div id="nacimientoHelp" class="form-text" style="display: flex;"></div> <!-- etiqueta div que muestra una descripción de como llenar el input -->
          </div> 

        </div>

<br> <!-- etiqueta de salto de linea -->
<br> <!-- etiqueta de salto de linea -->

        <div class="col-md-auto" style="display: flex; align-items: center;">
          <button type="button" class="btn btn-md btn-outline-primary me-1 add-btn">
              Agregar Datos Del Representante
          </button>
        </div>   

<div class="newData" style="margin-top: 1rem;"></div>

<br> <!-- etiqueta de salto de linea -->

        <h5 class="modal-title" id="ModalLabel">Taller(es) a Inscribir</h5>

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
        
<br> 
<br>
<br>

        <h5 class="modal-title" id="ModalLabel">Pago de Incripción</h5>
<br>
          <div class="row g-3"> <!-- apertura de etiqueta div con clases de bootstrap que asigna cuantos intems del formulario pueden estar en fila -->

            <div class="col-lg-4"> <!-- apertura de etiqueta div con clases de bootstrap que permite a los items del formulario colocarlos uno al lado del otro -->
              <label for="Fpay" class="form-label" style="display: flex;">Forma de Pago</label> <!-- etiqueta label que esta vinculada un input -->
                <select name="forma_pago" id="Fpay" type="text" class="form-control" placeholder="Inserte Forma de Pago" aria-describedby="FpayHelp" required> <!-- etiqueta input con un id, de tipo texto, con una clase de bootstrap, con atributo de placeholder, y esta vinculada con un label --> 
                    <option value=""></option>  
                    <option value="Tarjeta">Tarjeta</option>
                    <option value="Efectivo">Efectivo</option>
                    <option value="Pago Movil">Pago Móvil</option>
                </select>  
            </div><!-- cierre de etiqueta div que permite a los items del formulario colocarlos uno al lado del otro -->

            <div class="col-lg-3"> <!-- apertura de etiqueta div con clases de bootstrap que permite a los items del formulario colocarlos uno al lado del otro -->
              <label for="Tpay" class="form-label" style="display: flex;">Tipo de Pago</label> 
                <select name="tipo_pago" id="Tpay" type="text" class="form-control" placeholder="Inserte Tipo de Pago" aria-describedby="TpayHelp" required> 
                    <option value=""></option>  
                    <option value="Bs">Bs</option>
                    <option value="$">$</option>
                </select>
            </div> <!-- cierre de etiqueta div que permite a los items del formulario colocarlos uno al lado del otro -->
            
            <div class="col-lg-3"> <!-- apertura de etiqueta div con clases de bootstrap que permite a los items del formulario colocarlos uno al lado del otro -->
                    <label for="Mpay" class="form-label" style="display: flex;">Monto</label> <!-- etiqueta label que esta vinculada un input -->
                    <input name="monto_pago" id="Mpay" type="number" class="form-control" placeholder="Inserte El Monto" aria-describedby="MpayHelp" required> <!-- etiqueta input con un id, de tipo texto, con una clase de bootstrap, con atributo de placeholder, y esta vinculada con un label --> 
            </div> <!-- cierre de etiqueta div que permite a los items del formulario colocarlos uno al lado del otro -->

          </div> <!-- cierre de etiqueta div que asigna cuantos intems del formulario pueden estar en fila -->
<br> 
          <div class="row g-1"> <!-- apertura de etiqueta div con clases de bootstrap que asigna cuantos intems del formulario pueden estar en fila -->

            <div class="col-lg-7"> <!-- apertura de etiqueta div con clases de bootstrap que permite a los items del formulario colocarlos uno al lado del otro -->
                    <label for="concepto" class="form-label" style="display: flex;">Concepto de Pago</label> <!-- etiqueta label que esta vinculada un input -->
                    <input name="concepto_pago" id="concepto" type="text" class="form-control" placeholder="Ingrese Concepto de Pago" aria-describedby="CpayHelp" required> <!-- etiqueta input con un id, de tipo númerico, con una clase de bootstrap, con atributo de placeholder, y esta vinculada con un label -->                    
            </div> <!-- cierre de etiqueta div que permite a los items del formulario colocarlos uno al lado del otro -->

          </div>
<br>

            <div class="row g-1"> 

              <input class="form-control" type="hidden" name="estatus" value="1"> 

            </div>

          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
            <button type="submit" class="btn btn-primary">Guardar</button>
          </div>

        </form>

      </div>
      
    </div>
  </div>
</div>

<script src="../public/javascript/jquery-3.5.1.min.js"></script>

<script>
  $(function () { 
    var i = 1;
    let activoInputs = true;
    $('.add-btn').click(function (e) {
      e.preventDefault();
        i++;

        if (activoInputs){
          $('.newData').append('<div id="newRow'+i+'" class="form-row">'

            +'<div class="row">'

              +'<div class="col-lg-3">'
                +'<label class="form-label" style="display: flex;">Cedula</label>'
                +'<input type="number" name="cirepre" class="form-control" required>'
              +'</div>'

              +'<div class="col-lg-3">'
                +'<label class="form-label" style="display: flex;">Primer Nombre</label>'
                +'<input type="text" name="primernombre_repre" class="form-control" required>'
              +'</div>'

              +'<div class="col-lg-3">'
                +'<label class="form-label" style="display: flex;">Segundo Nombre</label>'
                +'<input type="text" name="segundonombre_repre" class="form-control">'
              +'</div>'

              +'<div class="col-lg-3">'
                +'<label class="form-label" style="display: flex;">Primer Apellido</label>'
                +'<input type="text" name="primerapellido_repre" class="form-control" required>'
              +'</div>'

            +'</div>'

            +'<div class="row">'

              +'<div class="col-lg-3">'
                +'<label class="form-label" style="display: flex;">Segundo Apellido</label>'
                +'<input type="text" name="segundoapellido_repre" class="form-control">'
              +'</div>'

              +'<div class="col-lg-3">'
                +'<label class="form-label" style="display: flex;">Telefono</label>'
                +'<input type="number" name="telefono_repre" class="form-control" required>'
              +'</div>'

              +'<div class="col-lg-6">'
                +'<label class="form-label" style="display: flex;">Correo Electrónico</label>'
                +'<input type="mail" name="correo_repre" class="form-control">'
              +'</div>'

            +'</div>'

            +'<div style="margin-top: 15px;">'
              +'<a href="#" style="margin-top: 15px;" class="remove-lnk btn btn-secondary" id="'+i+'">Cancelar</a>'
            +'</div>'
            ); 
          }
        
            activoInputs = false;
    });

     $(document).on('click', '.remove-lnk', function(e) {
       e.preventDefault();

        var id = $(this).attr("id");
         $('#newRow'+id+'').remove();
      });

  });
</script>