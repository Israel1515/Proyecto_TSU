<?php
require_once "../config.php"; // metodo para llamar al archivo que nos da la conexión a la base de datos
try {
	
	// variables que mandan por el metodo post
$f_pago = $_POST['forma_pago'];
$t_pago = $_POST['tipo_pago'];
$m_pago = $_POST['monto_pago'];
$c_pago = $_POST['concepto_pago'];
$id_cursa = $_POST['cursa'];
$id_taller = $_POST['taller'];









// con esto obtenemos los meses pagados de la base de datos
$meses_pagados = [];
$query = "SELECT * FROM `realiza` WHERE id_cursa=$id_cursa;";
$result = mysqli_query ($conexion, $query);
if ($result) 
{
	while ($row = mysqli_fetch_array($result)) 
	{
		array_push($meses_pagados, $row['id_mes']);
	}
}







// con esto obtenemos el mes que vamos a pagar
$meses_cliente = [];
foreach ($_POST as $key => $value) 
{
	if ($key != "cursa" 
	&& $key != "concepto_pago" 
	&& $key != "monto_pago" 
	&& $key != "tipo_pago" 
	&& $key != "forma_pago" 
	&& $key != "taller") 
	{
		array_push($meses_cliente, $_POST[$key]);
	}
}

if (count($meses_pagados) != 0) {
	if (intval(max($meses_pagados))+1 != intval(min($meses_cliente))) {
		$insertar_pay = 0;
		echo "<script>
		alert('Este estudiante tiene que estar solvente antes de realizar este pago   ')
		window.location = '../views/main/pago-taller.php?id_taller=$id_taller';
		</script>";
		throw new Exception();
	}
}





// con esto obtenemos los meses filtrados del cliente web con los meses pagados
$meses_para_add = [];
foreach ($meses_cliente as $mes_cliente) 
{
	if (!in_array($mes_cliente, $meses_pagados)) 
	{
		array_push($meses_para_add, $mes_cliente);
	}	
}













// aqui insertamos a la base de datos el nuevo pago con la informacion requerida de la tabla pago
$query = "INSERT INTO pago (monto, tipo, forma_pago, concepto)
VALUES('$m_pago', '$t_pago', '$f_pago', '$c_pago')";
$insertar_pay = mysqli_query($conexion, $query); 






// aqui obtenemos el id de pago mas reciente
$query = "SELECT MAX(id_pago) FROM `pago`;";
$result = mysqli_query ($conexion, $query);
if ($result) 
{
	while ($row = mysqli_fetch_array($result)) 
	{
		$id_pago = $row[0];
	}
}









/* 
aqui insertamos a la base de datos en la tabla realiza el nuevo pago por su id
relacionado con el taller, el estudiante y el mes que esta pagado el estudiante
todo estas columnas se llenan con sus id
*/
foreach ($meses_para_add as $mes) 
{
	$query = "INSERT INTO realiza (id_cursa, id_pago, id_mes)
	VALUES('$id_cursa', '$id_pago', '$mes')";
	mysqli_query($conexion, $query); 
}








require('../controllers/registro_pay_controller.php');
} catch (\Throwable $th) {
	throw $th;
}
?>