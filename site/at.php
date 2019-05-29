<?php
	include"conexao.php";
	session_start();
	$sql = "SELECT * FROM logins";

	$res  =$con -> query($sql);
    $linha = $res ->fetch_assoc();
?>
</head>
<body>
	<form action="alterar.php"  id="form"  name="form"  method="post">
		<table cellpadding="10px"  width="300px">
			<tr>
				<td width="100px">
					<label><font color="white">Foto:</label>
				</td>
				<td width="200px">
					<input type="text"  name="foto" value="<?php echo $linha['foto']?>" required>
				</td>
			</tr>
			<tr>
				<td width="100px">
					<label><font color="white">Nome:</label>
				</td>
			<td width="200px">
					<input type="text"  name="nome" value="<?php echo $linha['nome']?>" required>
				</td>
			</tr>
			<tr>
			  <td width="100px">
			  	
			  	<label><font color="white">Email:</label>
				</td>
				<td width="200px">
					<input type="text"  name="email" value="<?php echo $linha['email']?>" required>
				</td>
			</tr>
			<tr>
				<td width="100px">
				<label><font color="white">Comentario:</label>
				</td>
				<td width="200px">
					<input type="text"  name="comentario" value="<?php echo $linha['comentario']?>" required>
				</td>
			</tr>
			<tr>
				<td width="100px">
			   <label><font color="white">Valida:</label>
				</td>
				<td width="200px">
					<input type="text"  name="valida" value="<?php echo $linha['valida']?>" required>
				</td>
			</tr>
			<tr>
				<td width="100px">

			  	<input type="submit" name="Salvar">
			  
			  </td>
			</tr>
</table>
</form>
</body>
</html>