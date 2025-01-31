<?php
require_once "../../../../config.php"; // metodo para llamar al archivo que nos da la conexión a la base de datos
$ci=$_GET['cedula'];

$query = mysqli_query($conexion,"SELECT * FROM representante where cedula='$ci';");

$data = mysqli_fetch_array($query);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../../public/bootstrap/CSS/bootstrap.css">
    <title>¿Eliminar Representante?</title>

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

            <form action="../../../../models/eliminar_repre_model.php" method="post">

            <label class="form-label" style="display: flex; color: #842029;">¿Esta seguro que desea eliminar al representante?</label>
            <input class="form-control" type="hidden" name="id" value="<?php echo $data['id_repre'] ?>"> 

            <br>

            <div class="botones">
                <button type="submit" class="btn btn-primary">Si</button>
                <a href="../../../main/repre.php" class="btn btn-secondary">No</a>
            </div>

            </form>
        </div>
    </div>
</center>


<script src="../../../public/bootstrap/JS/bootstrap.bundle.js"></script>

</body>
</html>