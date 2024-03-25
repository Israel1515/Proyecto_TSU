<?php

require_once "../../config.php";

$menor_edad = 17;
$mayor_edad = 18;

$query = mysqli_query($conexion,"SELECT COUNT(fecha_nacimiento) as cantidad_edad
FROM estudiante 
where TIMESTAMPDIFF(YEAR, fecha_nacimiento, CURDATE()) <= $menor_edad;");
$data = mysqli_fetch_array($query); // Consulta para sacar la cantidad de estudiantes

$sql = mysqli_query($conexion,"SELECT COUNT(fecha_nacimiento) as cantidad_edad
FROM estudiante 
where TIMESTAMPDIFF(YEAR, fecha_nacimiento, CURDATE()) >= $mayor_edad;");
$dato = mysqli_fetch_array($sql); // Consulta para sacar la cantidad de estudiantes

?>
<!-- Graphics pie -->

<div style= "margin-top: 25px; margin-bottom: 5px;"> <!-- etiqueta que asigna el tamaño del grafico -->
    <h2 style="text-align: center;"> Cantidad de Estudiantes por Edad </h2>
    <canvas id="myChart-pie-edad" style="width: 400px !impórtant; height: 400px !impórtant;"> </canvas> <!-- se crea etiqueta canvas para mostrar el grafico -->
</div>


<!-- importante llamar al archivo chartjs.min.js para el grafico -->
<script src="../public/javascript/chartjs.min.js"></script> 

<!-- script Graphics pie -->
<script>

    const ctx = document.getElementById('myChart-pie-edad'); //hace referencia al id de la etiqueta canvas con el nombre myChart-pie

    new Chart(ctx, { //instancia de la clase chart 
    type: 'pie', // tipo de grafico
    data: { //data del grafico
    labels: ['Mayores de Edad', 'Menores de Edad'], // data de la leyenda del grafico
    datasets: [{
        label: 'Cantidad', //nombre que muestra cuando se pasa el click encima del grafico
        data: [<?php echo $dato['cantidad_edad'] ?>, <?php echo $data['cantidad_edad'] ?>], //data de la cantidad
    }]
    },
        });

</script>

