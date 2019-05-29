<?php
  include"conexao.php";
  session_start();
  if(!isset($_SESSION['']))
  {
    header('location:');
  }
  $sql = "SELECT * FROM logins";

  $res  =$con -> query($sql);
    $linha = $res ->fetch_assoc();
?>
<!DOCTYPE html>
<html>
<head>
  <link rel="shortcut icon" href="favicon.ico"  type="uemg.png">
<style>
* {
  box-sizing: border-box;
}

body {
  font-family: Arial;
  padding: 10px;
 background: -moz-linear-gradient(top,  #1e5799 0%, #2989d8 50%, #207cca 51%, #7db9e8 100%);
background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#1e5799), color-stop(50%,#2989d8), color-stop(51%,#207cca), color-stop(100%,#7db9e8));
background: -webkit-linear-gradient(top,  #1e5799 0%,#2989d8 50%,#207cca 51%,#7db9e8 100%);
background: -o-linear-gradient(top,  #1e5799 0%,#2989d8 50%,#207cca 51%,#7db9e8 100%);
background: -ms-linear-gradient(top,  #1e5799 0%,#2989d8 50%,#207cca 51%,#7db9e8 100%);


Read more: http://www.linhadecodigo.com.br/artigo/3603/css3-gradient-criando-planos-de-fundo-com-efeito-degrade.aspx#ixzz5ogBQ8zZ6
}



.header {
  padding: 30px;
  background: url(banner.png);
  text-align: center;  
   color: white;
   
}

.header h1 {
    
  font-size: 50px;
}


.topnav {
  overflow: hidden;
  background-color: #000000;
}


.topnav a {
  float: left;
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}


.topnav a:hover {
  
  color: #2989d8;
}


.leftcolumn {   
  float: left;
  width: 75%;
}


.rightcolumn {
  float: left;
  width: 25%;
  background-color: #4B0082;
  padding-left: 20px;
}


.fakeimg {
 
  width: 100%;
  padding: 20px;
}
.fakeimg1 {
 
  width: 120%;
  padding: 20px;
  position: relative;
  right: -400px;

}
.fakeimg2 {
 align-items: center;
}
 
.card {
  background-color: white;
  padding: 20px;
  margin-top: 20px;
  position: center;
}
.card2 {
  background-color: white;
  padding: 20px;
  margin-top: 20px;
  position: center;
}

.row:after {
  content: "";
  display: table;
  clear: both;
}


.footer {
  
  padding: 20px;
  
  text-align: center;
 background: -moz-linear-gradient(top,  #1e5799 0%, #2989d8 50%, #207cca 51%, #7db9e8 100%);
  margin-top: 20px;
}
.com{
  border: none;
    border-bottom: 1px solid #fff;
    background: transparent;
    outline: none;
    height:70px;
    color: #fff;
    font-size: 16px;
}
.com a{
  position: center;
}
.login-box input[type="text"], input[type="password"]
{
    border: none;
    border-bottom: 1px solid #fff;
    background: transparent;
    outline: none;
    height: 40px;
    color: #fff;
    font-size: 16px;
}
.login-box input[type="submit"]
{
    border: none;
    outline: none;
    height: 40px;
    background: white;
    color: #4B0082;
    font-size: 18px;
    border-radius: 30px;
    
}

.login-box input[type="submit"]:hover
{
    cursor: pointer;
    background:  #C0C0C0C0;
    color: #000;
}

.login-box a{
    text-decoration: none;
    font-size: 14px;
    color: #fff;
}
.login-box a:hover
{
  font : white;
    color: #39dc79;
}
.login-box input[type="submit"]
{
    align-items: center;  
    border: none;
    outline: none;
    height: 40px;
    background: #4B0082;
    color: #fff;
    font-size: 18px;
    border-radius: 20px;
}
.login-box input[type="submit"]:hover
{
    cursor: pointer;
    background: #2989d8;
    color: #000;
}
.textarea{
  color: white;
    font-family: Arial;
  background: transparent;
  padding: 30px;
border-bottom: 1px solid #fff;
}
/
@media screen and (max-width: 800px) {
  .leftcolumn, .rightcolumn {   
    width: 100%;
    padding: 0;
  }
}


@media screen and (max-width: 400px) {
  .topnav a {
    float: none;
    width: 100%;
  }
  
}

</style>

</head>
<body>

<title>Página Admin</title>
<div class="header">
  <h1>Não compre. Adote!</h1>
  <p>Esse site faz parte de um projeto interdisciplinar</p>
</div><font color="white"><h1 align="center"> Bem vindo, administrador</h1></font>
<div class="card">
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
    "<br><h3>Valida</h3>" .$linha["valida"] .
        
        "<br>";

    }
  } else {
    echo "Não há inscritos";
  }
    $con->close();
?>
</head>
<body>
  <form action="alterar.php"  id="form"  name="form"  method="post">
    
         <label><font color=""><h3 align="center">Deseja permitir que o cadastro a cima vá ao site?</label></h3>
        </td>
        <td width="200px">
          <select align="center" name="valida">
            <option  value="1">Permitir</option>
            <option value="0">Não Permitir</option>
          </select>
        </td>
      </tr>
      <tr>
        <td width="100px">
<div class="login-box"> <br>
          <input type="submit" name="Salvar">
        </div>
        </td>
      </tr>
</table>
</form>
</body>
</html>