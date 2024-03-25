<?php

require('../../config.php');
$id_taller = $_GET['id_taller'];


?>

    <div style="margin-left: 50px;">
        <div class="container" style="padding-left: 0;">
            <div class="card" style="margin-top: 5px; margin-bottom: 5px;">
                <div class="d-flex row">
                    <div class="col-sm-3" style="align-self: center;">
                        <div class="card-body px-md-4 d-none d-md-inline-flex">
                            <img class="card-img img-fluid" src="../public/img/logo.png" alt="100% San Agustin">
                        </div>
                    </div>
                    <div class="col-md-6" style="display: flex;">
                        <div class="card-body" style="align-self: center;">
<?php
$query = mysqli_query($conexion,"SELECT nombre FROM taller
where id_taller='$id_taller';");
$result = mysqli_num_rows($query);
if($result > 0) {
while ($dato = mysqli_fetch_array($query)) { 
    ?> <h1 class="card-title text-primary py-5 text-center"><?php echo $dato['nombre']; ?></h1>
<?php } 
}?>

                        </div>
                    </div>
                    <div class="col-sm-3" style="align-self: center;">
                        <div class="card-body px-md-4">
                        <img class="card-img img-fluid d-none d-md-inline-flex" src="../public/img/logo-alameda.jpg" alt="100% San Agustin">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <main style="margin-top: 5px; margin-bottom: 5px; margin-left: 0;">
        <div class="row container-fluid d-flex px-1">
            <div class="col-xl-5">
                <div class="control container">
                    <center>
                    <h2> <b> Lista de Estudiantes </b> </h2>
                    </center>
                </div>
            </div>
            <div class="col-xl-2">
            </div>
            <div class="col-xl-5">
                <div class="control">
                    <div class="row">

                        <div class="col-md-auto" style="display: flex; align-content: stretch; justify-content: space-evenly;">
                            <input class="searchText" type="text" placeholder="Buscar Taller" id="texto" style="width: 190px;">
                            <input class="searchSubmit" type="submit" value="Buscar" id="buscar">
                        </div>

                        <div class="col-md-auto" style="display: flex; align-items: center;">
                            <a class="btn btn-primary" data-bs-toggle="collapse" href="#collapseGraphic" role="button" aria-expanded="false" aria-controls="collapseExample">
                                Estatus General
                            </a>
                        </div> 

                        <div class="col-md-auto" style="display: flex; align-items: center;">
                            <a href="control-pago.php" class="btn btn-secondary">Atrás</a>
                        </div>  
                    </div>
                </div>
            </div>
        </div>


<div class="collapsing container" id="collapseGraphic">

    <h3 class="card-title control"> Pagos del Taller </h3>
    
    <!-- Graphics doughnut -->
    <center>

        <div style="background-color: white; padding-bottom: 15px;">
            <div style= "margin-top: 25px; margin-bottom: 5px; width: 500px !important; height: 500px !important;"> <!-- etiqueta que asigna el tamaño del grafico -->
                <canvas id="myChart-doughnut"> </canvas> <!-- se crea etiqueta canvas para mostrar el grafico -->
            </div>
        </div>

    </center>

<br>

</div>

<script src="../public/javascript/chartjs.min.js"></script> <!-- importante llamar al archivo chartjs.min.js para el grafico -->











































































        <div class="table-circle table-responsive text-nowrap">
            <table class="table table-hover table-bordered align-middle">

            <?php

            $query_register = mysqli_query($conexion,"SELECT COUNT(*) as total_registros FROM cursa WHERE id_taller='$id_taller';");
            $result_query = mysqli_fetch_array($query_register);
            $total_registros = $result_query['total_registros'];
            ?> <h5><figcaption class="figure-caption">Cantidad de estudiantes de este taller: <?php echo $total_registros; ?></figcaption></h5>
            <br>


                <thead class="table table-sm">
                    <tr>
                        
                        <th><b><center>Cédula</center></b></th>
                        <th><b><center>Estudiante</center></b></th>
                        <th><b><center>Estatus de Pago</center></b></th>
                        <th><b><center>Opciones</center></b></th>

                    </tr>
                </thead>

                <tbody>
<?php 
//Paginador
$indexModal=0;
$query_register = mysqli_query($conexion,"SELECT COUNT(*) as total_registro FROM estudiante");
$result_query = mysqli_fetch_array($query_register);
$total_registro = $result_query['total_registro'];

$por_pagina = 15;

if(empty($_GET['pagina']))
{
    $pagina = 1;
}else{
    $pagina = $_GET['pagina'];
}

$inicio_pag = ($pagina-1) * $por_pagina;
$total_pag = ceil($total_registro / $por_pagina);
?>


<?php               
$id_est_from_taller = [];
$index = 0;
$result = mysqli_query($conexion, "SELECT id_est FROM cursa WHERE id_taller=$id_taller;");
if($result)
{
    while ($row = mysqli_fetch_array($result)) {
        array_push($id_est_from_taller, $row[0]);
    }
}

foreach ($id_est_from_taller as $id_est) {
    $result = mysqli_query($conexion, "SELECT * FROM estudiante where id_est=$id_est");
    if($result){
        while ($data = mysqli_fetch_array($result)) { ?>
                    <tr id="num">
                        <td><?php echo $data['cedula']; ?></td>
                        <td><?php echo $data['primer_nombre']; echo " "; echo $data['primer_apellido']; ?></td>
                        <td style="padding:0px; display:flex; justify-content:center">
                            <ul style="" class="ul-mes list-group">
                                <li class="mes list-group-item">1</li>
                                <li class="mes list-group-item">2</li>
                                <li class="mes list-group-item">3</li>
                                <li class="mes list-group-item">4</li>
                                <li class="mes list-group-item">5</li>
                                <li class="mes list-group-item">6</li>
                                <li class="mes list-group-item">7</li>
                                <li class="mes list-group-item">8</li>
                                <li class="mes list-group-item">9</li>
                                <li class="mes list-group-item">10</li>
                                <li class="mes list-group-item">11</li>
                                <li class="mes list-group-item">12</li>
                            </ul>
                        </td>
                        <td>
<?php         
$mesesMarcados = [];
$query = "SELECT realiza.id_mes as mes from realiza, cursa WHERE cursa.id_est=$id_est and cursa.id_cursa=realiza.id_cursa and cursa.id_taller=$id_taller";
$result = mysqli_query($conexion, $query);
if ($result) {
    while ($row = mysqli_fetch_array($result)) { 
        $query = "SELECT min(realiza.id_mes) as fechaInscripcion from realiza, cursa where realiza.id_cursa=cursa.id_cursa and cursa.id_est=$id_est";
        $resultado = mysqli_query($conexion ,$query);
        if($resultado) {
            while ($fecha = mysqli_fetch_array($resultado)){
                $line = [$row['mes'], $fecha['fechaInscripcion']];
                array_push($mesesMarcados, $line);
            }
        }
    }
}
$fecha = true;
foreach($mesesMarcados as $row) {
    $mes = $row[0];
    echo "<div style='display:none;' class='valuesMonth$index'>$mes</div>";
    if ($fecha) {
        $fecha = $row[1];
        echo "<div style='display:none;' class='valuesDate$index'>$fecha</div>";
        $fecha = false;
    }
}
$index++;
$cedula = $data['cedula'];
$indexModal=$indexModal+1;
?>

 
 
                                                
                        <div type="button" class="btn btn-sm btn-outline-primary me-1" data-bs-toggle="modal" data-bs-target=<?php echo "#modalPage$indexModal";?>>
                        Registrar Pago
                        </div>
                        <a class="btn btn-sm btn-outline-primary me-1" href="../../models/eliminarRegistro.php?id_est=<?php echo $id_est;?>&id_taller=<?php echo $id_taller;?>">nuevo periodo</a>

                        <a href="../register/pay/history_pay.php?id_est=<?php echo $id_est ?>&id_taller=<?php echo $id_taller ?>" class="btn btn-sm btn-outline-primary me-1">
                        Historial
                        </a>


                    </td>
<?php 
include("../register/pay/config/modal_insert_pay.php"); 
}}}
?>

                </tbody>
                </table>                
            </div>
            <div>
                <ul style="display: inline-flex;">
<?php 
if($pagina != 1){
?>
                    <li class="table-number"><a href="?pagina=<?php echo 1; ?>">|<</a></li>
                    <li class="table-number"><a href="?pagina=<?php echo $pagina-1; ?>"><<</a></li>
<?php 
}
for ($i=1; $i <= $total_pag; $i++) { 
    if($i == $pagina)
    {
        echo '<li class="table-number">'.$i.'</li>';
    } else {
        echo '<li class="table-number"><a href="?pagina='.$i.'">'.$i.'</a></li>';
    }
}

if($pagina != $total_pag) {
?>
                    <li class="table-number"><a href="?pagina=<?php echo $pagina + 1; ?>">>></a></li>
                    <li class="table-number"><a href="?pagina=<?php echo $total_pag; ?> ">>|</a></li>
<?php 
} 
?>
                </ul>
            </div>
            <div class="wave"></div>
        </main>  
    </div>





<script src="../public/javascript/jquery-3.5.1.min.js"></script>



<!-- funcionamiento del boton buscar -->
<script>
    $(document).ready(() => {
        $('#buscar').click(function(evento) {
            evento.preventDefault();

            let clave = $('#texto').val().trim();

            if (clave) {
                $('table').find('tbody tr').hide();

                $('table tbody tr').each(function() {
                    let nombres = $(this).children();

                    if (nombres.text().toUpperCase().includes(clave.toUpperCase())) {
                        $(this).show();
                    }
                });
            }
        });
    });
</script>






















































<style>
.ul-mes {
    display:flex; 
    flex-flow:row; 
    width:100%; 
    height:100%; 
    padding: 2vh
}
.calendario {
  width: 400px;
  margin: 0 auto;
}

.list-group-item {
  padding: 10px 15px;
  background-color: #ffffff;
  border: 1px solid #ccc;
  border-radius: 5px;
}

.list-group-item.active {
  background-color: #1565C0;
  color: #ffffff;
}

.list-group-item.semana {
  background-color: #1565C0;
  color: #1565C0;
}

.mes {
    margin-left: .125vw;
    margin-right: .125vw;
    width: 90%;
    height: 100%;
}

.calendario {
  width: 400px;
  margin: 0 auto;
}

.meses li {
  list-style: none;
  display: inline-block;
  margin: 0 10px;
}

.meses li.marcado {
  background-color: red;
}

.moroso {
    background-color: #ff3548;
}

</style>
<script>
    const meses = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12];
const $num = document.querySelectorAll('#num');
function marcarMesesFunction(mesesMarcadosPorEstudiante, index, fecha,) {
    for (let value of mesesMarcadosPorEstudiante) {
        for (let mes of meses) {
            card = document.querySelectorAll(".list-group")[index].children[mes-1]
            if (value == mes) {
                classToAdd = "mark" + index
                card.classList.add(classToAdd);
                card.classList.add("active");
                card.classList.remove("moroso");
                $num[index].classList.remove('isMoroso');
            } 
            let now = new Date()
            fechaActual = now.getMonth()+1
            if (fechaActual > mes && mes > fecha && mesesMarcadosPorEstudiante[0] != '' && card.classList.contains('active') == false) {
                card.classList.add("moroso");
                $num[index].classList.add('isMoroso');
            } else {
                card.classList.remove("moroso");
            }
        }
    }
}

index = 0
while ( index < $num.length || index < 1) {
    let mesesMarcados = [];
    let $fechaInscripcion = document.querySelector(`.valuesDate${index}`);
    if ($fechaInscripcion != null) {
        $fechaInscripcion = Number($fechaInscripcion.textContent)
    }
    let $mesesMarcados = document.querySelectorAll(`.valuesMonth${index}`)
    for (value of $mesesMarcados){
        mesesMarcados.push(value.textContent);
    }
    console.log($mesesMarcados.length == 0)
    if ($mesesMarcados.length == 0) {
        $num[index].classList.add('esVacio');
    }

    marcarMesesFunction(mesesMarcados, index, $fechaInscripcion,)
    index++;
}

</script>

<script>

estudiantes = document.querySelectorAll('#num');

morosos = 0
alDia = 0
vacio = 0

estudiantes.forEach(estudiante => {
    if (estudiante.classList.contains('isMoroso')) {
        morosos++
    } else if (estudiante.classList.contains('esVacio')) {
        vacio++
    } else {
        alDia++
    }
  //  if (estudiante.classList.contains('isSolvente') == false and estudiante.classList.contains('isMoroso') == false) soloInscritos++
});







resultado = [alDia, morosos, vacio]













const ctx = document.getElementById('myChart-doughnut'); //hace referencia al id de la etiqueta canvas con el nombre myChart-doughnut

new Chart(ctx, { //instancia de la clase chart 
type: 'doughnut', // tipo de grafico
data: { //data del grafico
labels: ['Estudiantes al Dia', 'Estudiantes Morosos', 'Estudiantes solo Inscritos'], // data de la leyenda del grafico
datasets: [{
    label: 'Cantidad', //nombre que muestra cuando se pasa el click encima del grafico
    data: resultado, //data de la cantidad

    backgroundColor: [
        'rgb(21, 101, 192)',
        'rgb(255, 53, 12)',
        'rgba(0, 184, 12, 0.48)'
],

    borderColor: [
        'rgb(0, 0, 0)',
        'rgb(0, 0, 0)',
        'rgb(0, 0, 0)'
    ],
    
    borderWidth: 0.5

}]
},
options: {
    tooltips: {
        callbacks: {      
            label: function (value, context) {
                return value + "%"
            } 
        }
    }
}
    });

</script>

