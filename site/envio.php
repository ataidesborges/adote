<?php

include_once "conexao.php";
$foto = $_POST["foto"];
$nome = $_POST["nome"];
$email = $_POST["email"];
$comentario = $_POST["comentario"];

$sql = "INSERT INTO logins(foto, nome,  email, comentario) VALUES ('$foto', '$nome', '$email', '$comentario')";


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
		alert("AU AU, Mais um Doguinho irá pra casa!!! Seus dados foram para a avaliação!");
		window.location="a.php";
	</script>