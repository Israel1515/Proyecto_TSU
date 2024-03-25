<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="views/public/bootstrap/CSS/bootstrap.css">
    <title>Inicio de Sesión</title>

    
    <link href="https://fonts.googleapis.com/css2? family= Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700; 1900 & mostrar=intercambiar"> <!--Esto es el link de Google Fonts por el tipo de letra-->
    <link rel="stylesheet" href="views/public/css/estilos_login.css"> <!--Aquí va el link del Css -->
 
</head>
<?php

require_once ('views/loader.php');

?>
<body>
    <main>
        <!--Aquí esta contenido el login el nombre que tenga es el que va a ir en el ccs para personalizarlo-->
        <div class="contenedor__todo">

            <div class="caja__trasera">
                <div class="caja__trasera-login">
                    <h3>¿Ya Tienes Cuenta?</h3>
                    <p>Inicia sesión para entrar a la página</p>
                    <button id="btn__inicar-sesion">Iniciar Sesión</button>
                </div>

                
                    <div class="caja__trasera-register">
                        <h3>¿Aún no tienes Cuenta?</h3>
                        <p>Regístrate para poder entrar en la página</p>
                        <button id="btn__registrarse">Registrarse</button>
                    </div>
            </div>


            <!--Formulario de Login y Registro-->
            <div class="contenedor__login-register">

                <!--Login-->
                <form action="models/login_model.php" method="POST" class="formulario__login">

                    <h2>Iniciar Sesión</h2>
                    <input class="form-control" type="text" placeholder="Nombre de Usuario" name="Usuario" required autofocus>
                    <input class="form-control" type="password" placeholder="Contraseña" name="Contrasena" required>
                    <button>Entrar</button>

                </form>


                <!--Registro-->
                <form action="models/registro_user_model.php" method="POST" class="formulario__register">

                    <h2>Registrarse</h2> <!--Aquí estoy diciendo que cuando se pulso el botón registarse haga referencia al archivo registro-->
                    <input class="form-control" type="text" placeholder="Nombre" name = "nombre" required> <!--Esto ultimo son los nombres exactos que estan el la BD-->
                    <input class="form-control" type="text" placeholder="Apellido" name = "apellido" required>
                    <input class="form-control" type="text" placeholder="Nombre de Usuario" name = "usuario" required>
                    <input class="form-control" type="password" placeholder="Contraseña" name = "contrasena" required>
                    <select id="rol" name="rol" class="select2 form-select form-control" style="margin-top: 20px; padding: 10px; border: none; background: #F2F2F2; font-size: 16px;">
                    <option value="Administrador"> Administrador </option>
                    <option value="Super Usuario">Super Usuario</option>
                     </select>
                     <button>Registrarse</button>

                </form>

            </div>
        </div> 
        
    </main>
    <script src="views/public/javascript/script_login.js"></script> <!--Esto es la vinculación con en archivo de Java-->
</body>
</html>