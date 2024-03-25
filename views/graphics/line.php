<!-- Graphics line -->

<div style="width: 345; margin-top: 25px; margin-bottom: 5px;"> <!-- etiqueta que asigna el tamaño del grafico -->
    <h2 style="text-align: center;"> Cantidad de Inscripciones Por Mes </h2>
    <canvas id="myChart-line"> </canvas> <!-- se crea etiqueta canvas para mostrar el grafico -->
</div>


<!-- importante llamar al archivo chartjs.min.js para el grafico -->
<script src="../public/javascript/chartjs.min.js"></script> 


<!-- script Graphics line -->
<script>

    const ctx = document.getElementById('myChart-line'); //hace referencia al id de la etiqueta canvas con el nombre myChart-line

    new Chart(ctx, { //instancia de la clase chart 
        type: 'line', // tipo de grafico
        data: { //data del grafico
        labels: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio','Julio','Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'], // data de la leyenda del grafico
        datasets: [{
            label: 'Inscripciones del Mes', //nombre que muestra cuando se pasa el click encima del grafico
            data: [20, 19, 15, 5, 2, 3, 10, 5, 5, 8, 20, 15, 14], //data de la cantidad
        }]
        },
    });

</script>
