<?php 
	
	session_start(); //método de inicio de sesión
	session_destroy(); //método para destruir sesión

	header('location: Index.php'); //método para ir al login despues de destruir la sesión

 ?>