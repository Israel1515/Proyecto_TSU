<?php
    require_once "../../config.php";

    $masculino = 'Masculino';
    $femenino = 'Femenino';

    $query = mysqli_query($conexion,"SELECT COUNT(id_est) AS cantidad_genero 
    FROM estudiante where genero = '$femenino';");
    $data = mysqli_fetch_array($query); // Consulta para sacar la cantidad de estudiantes

    $sql = mysqli_query($conexion,"SELECT COUNT(id_est) AS cantidad_genero 
    FROM estudiante where genero = '$masculino';");
    $dato = mysqli_fetch_array($sql); // Consulta para sacar la cantidad de estudiantes
?>

<!-- Graphics pie -->

<div style= "margin-top: 25px; margin-bottom: 5px;"> <!-- etiqueta que asigna el tamaño del grafico -->
    <h2 style="text-align: center;"> Cantidad de Estudiantes por Género </h2>
    <canvas id="myChart-pie-genero" style="width: 400px !impórtant; height: 400px !impórtant;"> </canvas> <!-- se crea etiqueta canvas para mostrar el grafico -->
</div>



<!-- importante llamar al archivo chartjs.min.js para el grafico -->
<script src="../public/javascript/chartjs.min.js"></script> 


    <!-- script Graphics pie -->
<script>

    const ctxb = document.getElementById('myChart-pie-genero'); //hace referencia al id de la etiqueta canvas con el nombre myChart-bar

        new Chart(ctxb, { //instancia de la clase chart 
            type: 'pie', // tipo de grafico
            data: { //data del grafico
            labels: ['Masculinos', 'Femeninas'], // data de la leyenda del grafico
            datasets: [{
                label: 'Estudiantes', //nombre que muestra cuando se pasa el click encima del grafico
                data: [<?php echo $dato['cantidad_genero'] ?>, <?php echo $data['cantidad_genero'] ?>], //data de la cantidad
            }]
            },
        });

</script>




