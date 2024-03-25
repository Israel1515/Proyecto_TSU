<?php 

require_once "../../config.php";

$parroquiaNumero = [];
$parroquiaNombre = [];

$result = mysqli_query($conexion,"SELECT distinct parroquia FROM estudiante;");
if ($result) {
    while ($row = mysqli_fetch_array($result)) {
        $parroquia = $row[0];
        array_push($parroquiaNombre, $row[0]);
        $query = mysqli_query($conexion,"SELECT COUNT(parroquia) FROM `estudiante` WHERE parroquia='$parroquia';");
        if ($query) {
            while ($row = mysqli_fetch_array($query)) {
                array_push($parroquiaNumero, $row[0]);
            }
        }
    }
}


foreach ($parroquiaNombre as $nombre) {
    echo "<div style='display:none;' class='parroquiaNombre'>$nombre</div>";
}

foreach ($parroquiaNumero as $numero) {
    echo "<div style='display:none;' class='parroquiaNumero'>$numero</div>";
}


?>











<!-- Graphics polar -->

<div style="width: 345; margin-top: 25px; margin-bottom: 5px;"> <!-- etiqueta que asigna el tamaño del grafico -->
    <h2 style="text-align: center;"> Cantidad de Estudiantes por parroquia de la Gran Caracas </h2>
    <canvas id="myChart-polar"> </canvas> <!-- se crea etiqueta canvas para mostrar el grafico -->
</div>


<!-- importante llamar al archivo chartjs.min.js para el grafico -->
<script src="../public/javascript/chartjs.min.js"></script> 


<!-- script Graphics polar -->
<script>
    const $parroquiaNombre = document.querySelectorAll(".parroquiaNombre")
    console.log($parroquiaNombre)

    nombres = [];
    $parroquiaNombre.forEach(nombre => {
       nombres.push(nombre.innerText);
    });


    const $parroquiaNumero = document.querySelectorAll(".parroquiaNumero")

    numeros = [];
    $parroquiaNumero.forEach(numero => {
       numeros.push(Number(numero.innerText));
    });

    const ctx = document.getElementById('myChart-polar'); //hace referencia al id de la etiqueta canvas con el nombre myChart-polar

    new Chart(ctx, { //instancia de la clase chart 
        type: 'polarArea', // tipo de grafico
        data: { //data del grafico
        labels: nombres, // data de la leyenda del grafico
        
         datasets: [{
            label: 'Cantidad: ', //nombre que muestra cuando se pasa el click encima del grafico
            data: numeros, //data de la cantidad
        }]
        },
    });

</script>
