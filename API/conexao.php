
<?php 

//CONECTAR NO BANCO
$host1 = '@';
$user = '@';
$senha = '@';
$base = '@';
$con = array("Database" => "$base", "UID" => "$user", "PWD" => "$senha");
$conn1 = sqlsrv_connect($host1, $con);

?>
