<?php 

if(mysqli_num_rows($sql) > 0){ // Esto es una condicional para que redirija a otra pagina si cumple con todo
    $data = mysqli_fetch_array($sql); // variable donde se guardará los datos de cada fila de la consulta a la datos de la base de datos
    $_SESSION['active'] = true; // variable de sesión con el nombre de active, se le asignará el valor de la palabra reserva de true para decir que esa la tendrá el valor de activo
    $_SESSION['user'] = $data['nombre_usuario']; // variable de sesión con el nombre de Nombres, donde se gurdará el nombre del usuario que acceda al sistema
    $_SESSION['nombre'] = $data['nombre']; // variable de sesión con el nombre de usuario, donde se gurdará el usuario que acceda al sistema
    $_SESSION['apellido'] = $data['apellido']; // variable de sesión con el nombre de usuario, donde se gurdará el usuario que acceda al sistema
    $_SESSION['contrasena'] = $data['contrasena']; // variable de sesión con el nombre de usuario, donde se gurdará el usuario que acceda al sistema
    $_SESSION['rol'] = $data['rol']; // variable de sesión con el nombre de tipo_usuario, donde se gurdará el usuario que acceda al sistema
    header("location: ../views/main/inicio.php"); // Se coloca ..// cuando el archivo esta en otra carpeta pero si no solo se coloca "location: nombre.php"

}else{
    echo '
    <script>
        alert("Usuario no registrado o contraseña incorrecta. Por favor revisa los datos");
        window.location = "../Index.php";
    </script>
';
    exit;
}
    

?>
