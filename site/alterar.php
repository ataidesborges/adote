<?php
include_once "conexao.php";

$sql = "UPDATE logins SET valida='1' WHERE valida=0 ";
if ($con->query($sql) == TRUE) {
	echo "Alterado com sucesso";
} else {
	echo "Erro ao alterar: " . $conn->error;
}
$con->close();

?>
<!DOCTYPE html>
<html>
<head>
	<title>Sucesso</title>
	<script type="text/javascript">
		alert("Alterado com sucesso!");
		window.location="adm.php";
	</script>