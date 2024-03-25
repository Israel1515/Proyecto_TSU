<?php

session_start();
    
if(empty($_SESSION['active'])) { //inicio de la priemra condición del inicio de sesión, donde si la variable de sesión con su nombre active no esta vacia se cumple esta condición
	header('location: ../../'); //método de la ruta donde me enviará al sistema si la condición se cumple
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estadisticas</title>
    <link rel="stylesheet" href="../public/bootstrap/CSS/bootstrap.css">
    <link rel="stylesheet" href="../public/css/navbar.css">
    <link rel="stylesheet" href="../public/css/color.css">

</head>
<body>

<?php

require_once ('../loader.php');

?>

<div class="row">
    <div class="col-auto" style="padding: 0;">
        <?php
        include_once '../navbar.php';
        ?>
    </div>


    <div class="col" style="padding: 0;">
        <?php
        include_once '../header.php';
        ?>
    </div>
</div>


<div class="row">
    <div class="col-md-12">
        <div class="row">

            <div class="col-md-8 offset-md-2">
                <?php
                include_once '../graphics/bar.php';
                ?>
            </div>

        </div>
    </div>   
</div>

<nav aria-label="Page navigation" style="margin-top: 50px;">
  <ul class="pagination justify-content-center">
    <li class="page-item active"><a class="page-link" href="statistic.php">1</a></li>
    <li class="page-item active"><a class="page-link" href="statistic1.php">2</a></li>
    <li class="page-item active"><a class="page-link" href="statistic2.php">3</a></li>
  </ul>
</nav>


<div class="row">
    <div class="col-12">
        <?php
        include_once '../footer.php';
        ?>
    </div>
</div>


<script src="../public/bootstrap/JS/bootstrap.bundle.js"></script>
<script src="../public/javascript/linkListNavbar.js"></script> 

</body>
</html>