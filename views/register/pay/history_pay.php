<?php
require_once "../../../config.php"; // metodo para llamar al archivo que nos da la conexión a la base de datos

session_start();

if(!empty(!$_SESSION['active'])) { //inicio de la priemra condición del inicio de sesión, donde si la variable de sesión con su nombre active no esta vacia se cumple esta condición
	header('location: ../../../../'); //método de la ruta donde me enviará al sistema si la condición se cumple
}



$id_est = $_GET['id_est'];
$id_taller = $_GET['id_taller'];

$query = "SELECT pago.monto, pago.tipo, pago.forma_pago, pago.concepto, pago.fecha, mes.nombre_mes 
FROM pago , cursa, realiza, mes
WHERE cursa.id_est=$id_est
and cursa.id_taller=$id_taller
and cursa.id_cursa=realiza.id_cursa
and realiza.id_pago=pago.id_pago
and realiza.id_mes=mes.id_mes";


$result = mysqli_query($conexion, $query);



?>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Historial de Pago</title>
    <link rel="stylesheet" href="../../public/bootstrap/CSS/bootstrap.css">
    <link rel="stylesheet" href="../../public/css/styletable.css">
    <link rel="stylesheet" href="../../public/css/color.css">
</head>
<body>
<?php
require_once ('../../loader.php');
?>

<!-- Tabla de informacion del estudiante a editar -->
<main>

    <div class="control container">

        <h2><b> Historial de Pagos del Estudiante </b></h2>
        
    </div>

    <div class="container">

        <div class="collapse show" id="collapsetable" style="margin-bottom: 5px;">
                <div class="table-circle" style="display: flex; ">
                        
                    <h2 style="text-align: center;">Meses Pagado</h2>

<br>
<div class="content-pago" style="">

<style>
.content-pago {
    display: grid;
    grid-template-columns: repeat(3, 1fr); 
    grid-gap: 2vh;
}

.card-pago {
    width: 100%;
    background-color:#b4ceed;
    border:1px solid #777; 
    border-radius: 10px;
    padding: 2vh;
}

.card-pago-title {
    display: flex;
    justify-content: center;
    border:1px solid #7770; 
    border-radius: 10px;
    margin-bottom: 2vh;
    font-size: 1.25rem; 
    font-weight: 999px;
}


</style>

<?php
while ($row = mysqli_fetch_array($result)) {
?>
    <div class="card-pago">
        <div class="card-pago-title"><b>Información del Pago Mensual</b></div>
        <div class="form-check">
            <span> <b> Mes: </b> <?php echo $row['nombre_mes']; ?> </span> <br>
            <span> <b> Monto: </b> <?php echo $row['monto']." ".$row['tipo']; ?> </span> <br>
            <span> <b> Forma de Pago: </b> <?php echo $row['forma_pago']; ?> </span> <br>
            <span> <b> Concepto: </b> <?php echo $row['concepto']; ?> </span> <br>
            <span> <b> Fecha: </b> <?php echo $row['fecha']; ?> </span>
        </div>
    </div>
    <?php
}
?>


</div>

<div style="margin-top: 25px; text-align: center;">
<a href="../../main/pago-taller.php?id_taller=<?php echo $id_taller ?>" class="btn btn-secondary">Volver</a>
</div>

                </div>    
        </div>

    </div>

</main>

<script src="../../public/bootstrap/JS/bootstrap.bundle.js"></script>

</body>
</html>