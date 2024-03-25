<?php

session_start();

if(!empty(!$_SESSION['active'])) { //inicio de la priemra condición del inicio de sesión, donde si la variable de sesión con su nombre active no esta vacia se cumple esta condición
	header('location: ../../../../'); //método de la ruta donde me enviará al sistema si la condición se cumple
}

require_once "../../../../config.php"; // metodo para llamar al archivo que nos da la conexión a la base de datos
$ci=$_GET['cedula'];

$query = mysqli_query($conexion,"SELECT * FROM estudiante where cedula='$ci';");

$data = mysqli_fetch_array($query);

?>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Estudiante</title>
    <link rel="stylesheet" href="../../../public/bootstrap/CSS/bootstrap.css">
    <link rel="stylesheet" href="../../../public/css/styletable.css">
    <link rel="stylesheet" href="../../../public/css/color.css">
</head>
<body>
<?php
require_once ('../../../loader.php');
?>

<!-- Tabla de informacion del estudiante a editar -->
<main>

    <div class="control container">

        <h2><b> Editar Dato(s) del Estudiante</b></h2>
        
    </div>


    <div class="table-circle container">
        <form action="../../../../models/editar_student_model.php" method="POST" class="container"> 

            <div class="row g-4"> 
                    <input class="form-control" type="hidden" name="id" value="<?php echo $data['id_est'] ?>"> 

                <div class="col-lg-4"> 
                    <label class="form-label" style="display: flex;">Cédula</label> <!-- etiqueta label que esta vinculada un input  -->
                    <input class="form-control" type="number" name="cedula" value="<?php echo $data['cedula'] ?>"> 
                </div>

                <div class="col-lg-4">
                    <label class="form-label" style="display: flex;">Primer Nombre</label> <!-- etiqueta label que esta vinculada un input -->
                    <input class="form-control" type="text" name="primer_nombre" value="<?php echo $data['primer_nombre'] ?>"> 
                </div>

                <div class="col-lg-4">
                    <label class="form-label" style="display: flex;">Segundo Nombre</label> <!-- etiqueta label que esta vinculada un input -->
                    <input class="form-control" type="text" name="segundo_nombre" value="<?php echo $data['segundo_nombre'] ?>">  
                </div>
            </div>

            <div class="row g-3"> 
                <div class="col-lg-4"> 
                    <label class="form-label" style="display: flex;">Primer Apellido</label> <!-- etiqueta label que esta vinculada un input -->
                    <input class="form-control" type="text" name="primer_apellido" value="<?php echo $data['primer_apellido'] ?>"> 
                </div>

                <div class="col-lg-4">
                    <label class="form-label" style="display: flex;">Segundo Apellido</label> <!-- etiqueta label que esta vinculada un input -->
                    <input class="form-control" type="text" name="segundo_apellido" value="<?php echo $data['segundo_apellido'] ?>"> 
                </div>

                <div class="col-lg-4">
                    <label class="form-label" style="display: flex;">Fecha de Nacimiento</label> <!-- etiqueta label que esta vinculada un input -->
                    <input class="form-control" type="date" name="fecha_nacimiento" value="<?php echo $data['fecha_nacimiento'] ?>">  
                </div>
            </div>

            <div class="row g-4"> 
                <div class="col-lg-4"> 
                    <label class="form-label" style="display: flex;">Género</label> <!-- etiqueta label que esta vinculada un input -->
                    <input class="form-control" type="text" name="genero" value="<?php echo $data['genero'] ?>"> 
                </div>

                <div class="col-lg-4">
                    <label class="form-label" style="display: flex;">Padece de Alguna Condición</label> <!-- etiqueta label que esta vinculada un input -->
                    <input class="form-control" type="text" name="condicion" value="<?php echo $data['condicion'] ?>"> 
                </div>

                <div class="col-lg-4">
                    <label class="form-label" style="display: flex;">Municipio</label> <!-- etiqueta label que esta vinculada un input -->
                    <input class="form-control" type="text" name="municipio" value="<?php echo $data['municipio'] ?>"> 
                </div>

            </div>

            <div class="row g-4"> 

                <div class="col-lg-4">
                    <label class="form-label" style="display: flex;">Parroquia</label> <!-- etiqueta label que esta vinculada un input -->
                    <input class="form-control" type="text" name="parroquia" value="<?php echo $data['parroquia'] ?>">  
                 </div>

                <div class="col-lg-4"> 
                    <label class="form-label" style="display: flex;">Avenida o Calle</label> <!-- etiqueta label que esta vinculada un input -->
                    <input class="form-control" type="text" name="av_calle" value="<?php echo $data['av_calle'] ?>"> 
                </div>

                <div class="col-lg-4">
                    <label class="form-label" style="display: flex;">Número de Teléfono</label> <!-- etiqueta label que esta vinculada un input -->
                    <input class="form-control" type="number" name="telefono" value="<?php echo $data['telefono'] ?>"> 
                </div>

            </div>

            <div class="row g-1">
                <div class="col-lg-4">
                    <label class="form-label" style="display: flex;">Correo Electrónico</label> <!-- etiqueta label que esta vinculada un input -->
                    <input class="form-control" type="text" name="correo" value="<?php echo $data['correo'] ?>"> 
                </div>
            </div> 



<br>

            <tbody class="table-border-bottom-0">

                <table>
                    <thead class="table table-sm">
                        <tr>
                            <div class="row" style="padding-top:1vh;">
                                <div class="col-4">
                                    <label class="form-label">Taller Inscrito:</label>
                                </div>

                            </div>                  
                        </tr>
                    </thead>
                    
                    <br>
                    
                    <tbody class="table-border-bottom-0">
                        <?php
                            $query = mysqli_query($conexion,"SELECT fecha_inscripcion, taller.id_taller, taller.nombre
                            FROM estudiante, cursa, taller
                            where estudiante.id_est = cursa.id_est and taller.id_taller = cursa.id_taller and cedula='$ci';");
                            $result = mysqli_num_rows($query);
                            if($result > 0)
                            {
                            while ($dato = mysqli_fetch_array($query)) { ?>
                        
                        <tr>
                            <div class="row">
                                <div class="col-4" style="margin-bottom:2vh;">
                                    <label class="form-control"> <?php echo $dato['nombre']; ?> </label>
                                </div>
                                <div class="col-3">
                                      
                             
                                
                                    <input style="display:none;" type="text" name="id_taller" value="<?php echo $dato['id_taller'] ?>">  
                                </div>
                                <a class="col-2" href="desinscribir.php?estudiante=<?php echo $ci ?>&taller=<?php echo $dato['nombre'] ?>">
                                    <input style="width: 8vw; height: 5vh;" class=" btn btn-danger" type="button" value="Desinscribir"></a>
                                </div>
                        </tr>
                        
                        <?php } }?>

                        <br>

                        
                    </tbody>
                </table>

            </tbody>
      

            <div style="text-align: center; margin-top: 50px">
                <button type="submit" class="btn btn-primary">Guardar Cambios</button>
                <a href="../../../main/student.php" class="btn btn-secondary">Atrás</a>
            </div>

        </form>
        <form action="../../../../models/registro_cursa_student_model.php" method="POST" class="container"> <!-- Todo el modal esta dentro de este contenedor -->
                            <button Type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#Modalinscribir">Inscribir Nuevo Taller</button>
                                
                            <div class="modal fade" id="Modalinscribir" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                        <h3 class="modal-title" id="staticBackdropLabel">Seleccione el taller a Inscribir</h3>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>

                                        <div class="modal-body">
                                            <div class="form-group" style="font-size: 20px; font-weight: 600;">
                                                <div class="col-lg-6" style="align-self: center;"> <!-- apertura de etiqueta div con clases de bootstrap que permite a los items del formulario colocarlos uno al lado del otro -->
                                                    <select id="taller" name="taller" class="select2 form-select form-control" style="margin-top: 10px; padding: 10px; border: none; background: #F2F2F2; font-size: 16px;">
                                                        <?php
                                                        require_once "../../../../config.php";
                                                        $id_est = $data['id_est'];
                                                        $query = mysqli_query($conexion,"SELECT * FROM `taller` WHERE id_taller not in (SELECT id_taller from cursa WHERE id_est = '$id_est');");
                                                        $result = mysqli_num_rows($query);
                                                        if($result > 0)
                                                        {
                                                        while ($data = mysqli_fetch_array($query)) { ?>
                                                        <option value="<?php echo $data['id_taller'] ?>"> <?php echo $data['nombre']; ?> </option>
                                                        <?php } }?>
                                                    </select>

                                                    <input type="hidden" name="id" value="<?php echo $ci ?>"> 

                                                    <br>
                                                    <br>

                                                    
                                                    <!-- <div class="col-lg-6"> 
                                                            <label class="form-label" style="display: flex;">Fecha de Inscripción</label>
                                                            <input class="modal-add-form-input form-control" type="date" placeholder="Fecha de Inscripción" name="">  Validar este input 
                                                        </div> -->

                                                    <br>

                                                </div>  <!-- cierre de etiqueta div que permite a los items del formulario colocarlos uno al lado del otro -->

                                                <div class="modal-footer">
                                                    <button type="submit" class="btn btn-info">Inscribir</button>
                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                                                </div>


                                            </div>

                                        </div>

                                    </div>
                                </div>  
                            </div>
                        </form> <!-- Cierre del modal -->


<div class="wave"></div>

    </div>


</main>


<script src="../../../public/bootstrap/JS/bootstrap.bundle.js"></script> <!--Esto es el llamado a la plantilla del modal!-->

</body>
</html>