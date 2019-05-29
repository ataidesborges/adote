<?php
$database  = "localhost";
$usuario = "root";
$senha = "";
$banco = "logins";

$con = new mysqli($database, $usuario, $senha, $banco);

if($con->connect_error)		
{
	die("Erro conexão " . $con->connect_error);
}

?>