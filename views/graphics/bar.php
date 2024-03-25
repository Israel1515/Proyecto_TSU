<?php 
    require_once "../../config.php";
    $talleres = [];
    $nombreTaller = [];
    
    $result = mysqli_query($conexion,"SELECT id_taller FROM taller;");
    if ($result) {
        while ($row = mysqli_fetch_array($result)) {
            $id_taller = $row[0];
            $sql = mysqli_query ($conexion, "SELECT COUNT(id_cursa) AS cantidad_estudiantes FROM cursa where id_taller = $id_taller;");
            if ($sql) {
                while ($row = mysqli_fetch_array($sql)) {
                    array_push($talleres, $row[0]);
                }
            }
        }
    }


    $name = mysqli_query($conexion, "SELECT nombre FROM taller;");

    if ($name){
        while ($row = mysqli_fetch_array($name)) {
            array_push($nombreTaller, $row[0]);
        }
    }

    foreach ($nombreTaller as $nombre) {
        echo "<div style='display:none;' class='nombreTaller'>$nombre</div>";
    }
  
    foreach ($talleres as $taller) {
        echo "<div style='display:none;' class='talleres'>$taller</div>";
    }


    
?>
        


<!-- Graphics bar -->

<div style="margin-top: 25px; margin-bottom: 5px; width: auto;"> <!-- etiqueta que asigna el tamaño del grafico -->
    <h2 style="text-align: center;"> Cantidad de Estudiantes por Taller </h2>
    <canvas id="myChart-bar" style="width: 600px !impórtant; height: 600px !impórtant;"> </canvas> <!-- se crea etiqueta canvas para mostrar el grafico -->
</div>


<!-- importante llamar al archivo chartjs.min.js para el grafico -->
<script src="../public/javascript/chartjs.min.js"></script> 


<!-- script Graphics bar -->
<script>
    talleres = [];
    const $talleres = document.querySelectorAll(".talleres");
    $talleres.forEach(taller => {
       talleres.push(Number(taller.innerText));
    });

    nombres = [];
    const $nombreTalleres = document.querySelectorAll(".nombreTaller");
    $nombreTalleres.forEach(nombre => {
       nombres.push(nombre.innerText);
    });



    const ctx = document.getElementById('myChart-bar'); //hace referencia al id de la etiqueta canvas con el nombre myChart-bar

    new Chart(ctx, { //instancia de la clase chart 
        type: 'bar', // tipo de grafico
        data: { //data del grafico
            labels: nombres, // data de la leyenda del grafico
        datasets: [{
            label: 'Estudiantes', //nombre que muestra cuando se pasa el click encima del grafico
           
            data: talleres, //data de la cantidad
        }]
    },
});

</script>
