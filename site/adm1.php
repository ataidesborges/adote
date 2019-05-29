<?php
  include"conexao.php";

  $sql = "SELECT foto,nome, comentario, valida FROM logins";
  $result  =$con -> query($sql);

  if($result->num_rows>0)
  {
  	while ( $linha = $result ->fetch_assoc())
  	 {

 echo "<br><h3> Foto</h3> "   . $linha["foto"] . 
    "<br><h3>Nome</h3> "    .$linha["nome"] .
    "<br><h3>Descrição</h3> ".$linha["comentario"]. 
        "<br>";

  	}
  } else {
  	echo "Não há inscritos";
  }
    $con->close();
?>
<title>Página Admin</title>
<div class="header">
  <h1>Não compre. Adote!</h1>
  <p>Esse site faz parte de um projeto interdisciplinar</p>
</div><font color="white"><h1 align="center"> Bem vindo, administrador</h1></font>
<div class="card">

</head>
<body>
  <form action="alterar.php"  id="form"  name="form"  method="post">
    
         <label><font color="">Valida:</label>
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