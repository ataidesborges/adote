<?php

include_once "conexao.php";
$nome = $_POST["nome"];
$email = $_POST["email"];
$cometario = $_POST["cometario"];


$sql = "INSERT INTO comentario(nome, email, comentario) VALUES ('$nome', '$email','$comentario')";


if ($con->query($sql) == TRUE) {
	echo "Registro inserido com sucesso";


} else {
	echo "Erro para inserir: " . $conn->error;
}
$con->close();

?>
<<!DOCTYPE html>
<html>
<head>
	<title>Sucesso</title>
	<script type="text/javascript">
		alert("Obrigado!!!");
		window.location="a.php";
	</script>