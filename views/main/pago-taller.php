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
    <title>Control de Pago</title>
    <link rel="stylesheet" href="../public/bootstrap/CSS/bootstrap.css">
    <link rel="stylesheet" href="../public/css/navbar.css">
    <link rel="stylesheet" href="../public/css/color.css">
    <link rel="stylesheet" href="../public/css/styletable.css">
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
    <div class="col-12">
        <?php

            if(empty($_POST)) { // condición por si el método post esta vacio entonces	

                include '../register/pay/config/taller_pay.php';

            }else{ //en el caso contrario

                include '../register/pay/config/buscar_pay.php';
            }  

        ?>
    </div>
</div>

<div>

</div>
<div class="row">
    <div class="col-12">
        <?php
        include '../footer.php';
        ?>
    </div>
</div>


<script src="../public/bootstrap/JS/bootstrap.bundle.js"></script>
<script src="../public/javascript/linkListNavbar.js"></script> 

</body>
</html>