<?php

require_once "../config.php"; // metodo para llamar al archivo que nos da la conexión a la base de datos

$id_est = $_GET['id_est'];
$id_taller = $_GET['id_taller'];


$query = "SELECT realiza.id_realiza as id
from realiza, cursa
where realiza.id_cursa=cursa.id_cursa
and cursa.id_est=$id_est
and cursa.id_taller=$id_taller
";

$result = mysqli_query($conexion, $query);

while ($row = mysqli_fetch_array($result)) {
    $id = $row['id'];
    $query = "DELETE FROM realiza WHERE realiza.id_realiza = $id";
    $resultId = mysqli_query($conexion, $query);

}
echo "<script>
alert('se ha eliminado el registro')
window.location = '../views/main/pago-taller.php?id_taller=$id_taller';
</script>";


?>