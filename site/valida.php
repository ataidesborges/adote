<?php
include "conexao.php";
$email = $_POST['email'];
$comentario = $_POST['comentario'];

$sql = "SELECT * FROM logins WHERE email = '$email' AND comentario = '$comentario' ";

$res  =$con -> query($sql);
$linha =$res -> fetch_assoc();

$id = $linha['id'];
$nome = $linha['nome'];
$email = $linha['email'];
$comentario = $linha['comentario'];

if($email == $email && $comentario == $comentario && $id==1)
{
	session_start();
    
	$_SESSION['email']  = $email;
	$_SESSION['comentario']  = $comentario;
	  header('location: adm.php');
}
?>
