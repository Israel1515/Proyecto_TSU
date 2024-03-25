<?php

session_start();

if(!empty(!$_SESSION['active'])) { //inicio de la priemra condición del inicio de sesión, donde si la variable de sesión con su nombre active no esta vacia se cumple esta condición
	header('location: ../../../../../'); //método de la ruta donde me enviará al sistema si la condición se cumple
}

//require_once "../../../../config.php"; // metodo para llamar al archivo que nos da la conexión a la base de datos
//$ci=$_GET['cedula'];
//$id_taller=$_GET['id_taller'];

//$query = mysqli_query($conexion,"SELECT id_est, cedula
//FROM estudiante where cedula='$ci';");

//$data = mysqli_fetch_array($query);

?>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar Pago</title>
    <link rel="stylesheet" href="../../public/bootstrap/CSS/bootstrap.css">
    <link rel="stylesheet" href="../../public/css/styletable.css">
    <link rel="stylesheet" href="../../public/css/color.css">
</head>
<body>
<?php
require_once ('../../../loader.php');
?>

<!-- Tabla de informacion del estudiante a editar -->
<main>

    <div class="control container">

        <h2><b> Resgistrar Pago del Estudiante </b></h2>
        
    </div>


    <div class="table-circle container">
        <form action="../../../models/registro_pay_model.php" method="POST" class="container"> 

            <div class="row g-3"> 
                    <input class="form-control" type="hidden" name="id_est" value="<?php echo $data['id_est'] ?>">

            
                <div class="col-lg-4"> 
                    <label class="form-label" style="display: flex;"> Cédula del Estudiante </label> <!-- etiqueta label que esta vinculada un input  -->
                    <input class="form-control" type="number" name="cedula" disabled value="<?php echo $data['cedula'] ?>"> 
                </div>

               
            </div>

            

            <br> 

            <div class="row g-3"> <!-- apertura de etiqueta div con clases de bootstrap que asigna cuantos intems del formulario pueden estar en fila -->
              <div class="col-lg-4"> <!-- apertura de etiqueta div con clases de bootstrap que permite a los items del formulario colocarlos uno al lado del otro -->
                      
                <label for="Fpay" class="form-label" style="display: flex;">Forma de Pago</label> <!-- etiqueta label que esta vinculada un input -->
                    <select name="forma_pago" id="Fpay" type="text" class="form-control" placeholder="Inserte Forma de Pago" aria-describedby="FpayHelp" required> <!-- etiqueta input con un id, de tipo texto, con una clase de bootstrap, con atributo de placeholder, y esta vinculada con un label --> 
                      <option value=""></option>  
                      <option value="Tarjeta">Tarjeta</option>
                      <option value="Efectivo">Efectivo</option>
                      <option value="Movil">Pago Móvil</option>
                    </select> 
                    
              </div><!-- cierre de etiqueta div que permite a los items del formulario colocarlos uno al lado del otro -->
              
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
                        <div id="CpayHelp" class="form-text" style="display: flex;"></div>                       
                </div> <!-- cierre de etiqueta div que permite a los items del formulario colocarlos uno al lado del otro -->
            </div>

<br>
<br>
            <a class="btn btn-sm btn-outline-primary me-1" data-bs-toggle="collapse" href="#collapsebutton" role="button" aria-expanded="false" aria-controls="collapsepay"> Seleccione el mes que se esta cancelando </a></b> 

<br>
            <?php
            include_once '../../register/pay/checkbox_monthpay.php';
            ?>

            <div style="text-align: center; margin-top: 50px">
                <button type="submit" class="btn btn-primary">Registrar</button>
            </div>
            <a href="../../register/pay/taller_pay.php?id_taller=<?php echo $id_taller; ?>" class="btn btn-secondary">Cancelar</a>            
            
            <input style="display:none" type="text" name="id_taller" value="<?php echo $id_taller ?>">
        </form>
    </div>

    

</main>

<script src="../../public/bootstrap/JS/bootstrap.bundle.js"></script>



</body>
</html>