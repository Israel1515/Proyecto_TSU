<?php

require_once "../../../config.php";

session_start();
    
if(empty($_SESSION['active'])) { //inicio de la priemra condición del inicio de sesión, donde si la variable de sesión con su nombre active no esta vacia se cumple esta condición
	header('location: ../../../'); //método de la ruta donde me enviará al sistema si la condición se cumple
}

$id_taller = $_GET['id_taller'];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estatus de Pagos</title>
    <link rel="stylesheet" href="../../public/bootstrap/CSS/bootstrap.css">
</head>
<body>

<?php

require_once ('../../loader.php');

?>

    
<!-- Tarjeta de encabezado -->
    <div class="container" style="padding-left: 0;">
        <div class="card" style="margin-top: 5px; margin-bottom: 5px;">
            <div class="d-flex row">

                <div class="col-sm-3" style="align-self: center;">
                    <div class="card-body px-md-4 d-none d-md-inline-flex">
                    <img class="card-img img-fluid" src="../../public/img/logo.png" alt="100% San Agustin">
                    </div>
                </div>

                <div class="col-md-6" style="display: flex;">
                    <div class="card-body" style="align-self: center;">

                        <?php
                            $query = mysqli_query($conexion,"SELECT nombre FROM taller
                            where id_taller='$id_taller';");
                            $result = mysqli_num_rows($query);
                            if($result > 0)
                            {
                            while ($dato = mysqli_fetch_array($query)) { ?>

                            <h1 class="card-title text-primary py-5 text-center"><?php echo $dato['nombre']; ?></h1>
                            
                            <?php } }?>

                    </div>
                </div>

                <div class="col-sm-3" style="align-self: center;">
                    <div class="card-body px-md-4">
                    <img class="card-img img-fluid d-none d-md-inline-flex" src="../../public/img/logo-alameda.jpg" alt="100% San Agustin">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">                            
        <div class="col-md-10 offset-md-1">
            <div class="card h-100">
                <div class="card-body">

                    <h3 class="card-title"> Pagos del Taller </h3>
                   

                        <!-- Graphics doughnut -->
                        <center>
                            <div style="width: 500px;">
                                <div style= "margin-top: 25px; margin-bottom: 5px;"> <!-- etiqueta que asigna el tamaño del grafico -->
                                    <canvas id="myChart-doughnut" style= "width: 200px !important;"> </canvas> <!-- se crea etiqueta canvas para mostrar el grafico -->
                                </div>
                            </div>
                        </center>

                        <figcaption class="figure-caption">Cantidad de Estudiantes Inscritos: 8</figcaption>

                    <br>

                    <a href="../../main/control-pago.php" class="btn btn-sm btn-outline-primary me-3">Atrás</a>
                    
                </div>
            </div>
        </div>
    </div>


<script src="../../public/bootstrap/JS/bootstrap.bundle.js"></script>
<script src="../../public/javascript/chartjs.min.js"></script> <!-- importante llamar al archivo chartjs.min.js para el grafico -->

<!-- script Graphics doughnut -->
<script>

    const ctx = document.getElementById('myChart-doughnut'); //hace referencia al id de la etiqueta canvas con el nombre myChart-doughnut

    new Chart(ctx, { //instancia de la clase chart 
    type: 'doughnut', // tipo de grafico
    data: { //data del grafico
    labels: ['Estudiantes al Dia', 'Estudiantes Morosos', 'Estudiantes Solo Inscritos'], // data de la leyenda del grafico
    datasets: [{
        label: 'Cantidad', //nombre que muestra cuando se pasa el click encima del grafico
        data: [3, 5, 1], //data de la cantidad

        backgroundColor: [
            'rgb(21, 101, 192)',
            'rgb(255, 53, 12)',
            'rgb(255, 255, 255)'
    ],

        borderColor: [
            'rgb(0, 0, 0)',
            'rgb(0, 0, 0)',
            'rgb(0, 0, 0)'
        ],
        
        borderWidth: 0.5

    }]
    },
        });

</script>
</body>
</html>





