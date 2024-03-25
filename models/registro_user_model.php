<?php 

    include '../config.php';

    $nombres = $_POST ['nombre']; //En estas variables se almacenaran los datos de los campos con el metodo POST
    $apellidos = $_POST ['apellido'];
    $usuario = $_POST ['usuario'];
    $contrasena = $_POST ['contrasena'];
    $rol = $_POST ['rol'];

    //Con esta variables se incertaran los datos ingresados a las tablas de la BD en localhost
    $query = "INSERT INTO usuarios(nombre, apellido, nombre_usuario, contrasena, rol)
                VALUES('$nombres', '$apellidos', '$usuario', '$contrasena', '$rol')";


    require_once('../controllers/registro_user_controller.php');
?>