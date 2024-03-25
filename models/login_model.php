<?php

session_start(); //Esto es para decirle al codigo que estamos trabajando con sesiones

if(!empty($_SESSION['active'])) { //inicio de la priemra condición del inicio de sesión, donde si la variable de sesión con su nombre active no esta vacia se cumple esta condición
	header('location: views/main/inicio.php'); //método de la ruta donde me enviará al sistema si la condición se cumple
}else{ //en el caso contrario

    if(!empty($_POST)) { // condición anidada por si el método post no esta vacio entonces

    $usuario = $_POST ['Usuario']; //Estas variables se guardaran los valores a instroducir
    $contrasena = $_POST ['Contrasena'];

    include_once '../config.php'; //Esta es la conexion a la BD 

    $sql = mysqli_query($conexion, "SELECT * FROM usuarios WHERE nombre_usuario='$usuario' 
    and contrasena='$contrasena'"); //Con la funcion mysqli_query se validan los datos que se colocan al iniciar sesión en el login

    require_once ('../controllers/login_controller.php');
    }
}
?>