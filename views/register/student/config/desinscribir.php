<?php
require_once "../../../../config.php"; // metodo para llamar al archivo que nos da la conexión a la base de datos
$ci=$_GET['estudiante'];
$taller=$_GET['taller'];

$query = mysqli_query($conexion,"SELECT * FROM estudiante where cedula='$ci';");

$data = mysqli_fetch_array($query);

$query = mysqli_query($conexion,"SELECT * FROM taller where nombre='$taller';");

$dato = mysqli_fetch_array($query);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../../public/bootstrap/CSS/bootstrap.css">
    <title>¿Eliminar Estudiante?</title>

    <style>
        body{
            padding-top: 20%;
        }
        .botones {
            text-align: right;
            margin-right: 30px;
        }
        .botones > a {
            padding: 6px 20px;
            margin-left: 10px;
        }

        .botones > button {
            padding: 6px 25px;
        }
    </style>

</head>
<body>
    
<!-- offcanvas Alerta -->
<center>
    <div class="offcanvas offcanvas-top show" data-bs-scroll="true" data-bs-backdrop="false" tabindex="-1" id="offcanvasScrolling" aria-labelledby="offcanvasScrollingLabel" style="width: 40%; height: 25%; background-color: #f8d7da; position: relative;">

        <div class="offcanvas-header">

            <h3 style="color: #842029;" class="offcanvas-title" id="offcanvasLabel">Alerta!</h3>

        </div>

        <div class="offcanvas-body">

            <form action="../../../../models/eliminar_cursa_student.php" method="post">

            <label class="form-label" style="display: flex; color: #842029;">¿Esta seguro que desea desinscribir al estudiante de este taller?</label>
            <input class="form-control" type="hidden" name="estudiante" value="<?php echo $data['id_est'] ?>"> 
            <input class="form-control" type="hidden" name="taller" value="<?php echo $dato['id_taller'] ?>"> 
            <input class="form-control" type="hidden" name="ci" value="<?php echo $ci ?>"> 

            <br>

            <div class="botones">

                <button type="submit" class="btn btn-primary">Si</button>

                <a href="../../../register/student/config/edit_student.php?cedula=<?= $data['cedula'] ?>" 
                class="btn btn-secondary">No</a>
            </div>

            </form>
        </div>
    </div>
</center>


<script src="../../../public/bootstrap/JS/bootstrap.bundle.js"></script>

</body>
</html>