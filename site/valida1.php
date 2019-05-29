<?php
include "conexao.php";
$user = $_POST['user'];
$senha = $_POST['senha'];

$sql = "SELECT * FROM adm WHERE user = '$user' AND senha = '$senha' ";

$res  =$con -> query($sql);
$linha =$res -> fetch_assoc();

$id = $linha['id'];
$nome = $linha['nome'];
$user = $linha['user'];
$senha = $linha['senha'];

if($user == $user && $senha == $senha)
{
	session_start();
    
	$_SESSION['user']  = $user;
	$_SESSION['senha']  = $senha;
	  header('location: adm.php');
}
else
{
	header('location: login.php?info=1');
}
?>

?>
