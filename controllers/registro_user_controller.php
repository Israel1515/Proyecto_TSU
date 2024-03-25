<?php

$registrar_usuario = mysqli_query($conexion, "SELECT* FROM usuarios");
$verificar_usuario = mysqli_query($conexion, "SELECT * FROM usuarios WHERE nombre_usuario='$usuario' ");


if(mysqli_num_rows($verificar_usuario) > 0){ //Esto es una condicional para que los usuarios no se repitan en la BD
    echo '
        <script>
            alert("Este usuario ya está registrado.");
            window.location = "../Index.php";
        </script>
    ';
    exit ();

  
}

$ejecutar = mysqli_query($conexion, $query); //Esto es para activar la variable query

if(mysqli_num_rows($registrar_usuario) > 0){
    echo '
    <script>
        alert("Usuario registrado exitosamente");
        window.location = "../Index.php";
    </script>
';
exit ();
}

?>