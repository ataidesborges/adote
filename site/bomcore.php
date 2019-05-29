<body>
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
h3{
  font-family: Arial;

} 
h4{
  font-family: arial;
  text-align: center;
 border-bottom: 1px solid #000000;
 border-left: 1px solid #000000;
 border-right: 1px solid #000000;
 border-top: 1px solid #000000;
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
.login-box input[type="button"]
{
    border: none;
    outline: none;
    height: 40px;
    background: #4B0082;
    color: #fff;
    font-size: 18px;
    border-radius: 20px;
}
.login-box input[type="button"]:hover
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

  
</body>
</style>
</head>
<body>
<title>Não Compre. Adote! - Os 22 motivos</title>
<div class="header">
  <h1>Não compre. Adote!</h1>
  <p>Esse site faz parte de um projeto interdisciplinar</p>
</div>

<div class="topnav">
 <a href="a.php">Inicio</a>
      <a href="22.php">22 Motivos para adotar</a>
      <a href="mercado.php">Bom coração</a>
       <a href="sobre.php">Sobre</a>
      <a href="ideia.php">Fontes</a>

  <a href="form.php" style="float:right">Faça seu cadastro para ajudar!</a>
</div>
<div class="card">
  </style><h1 align="center">Veja abaixo e confira, os petshops afiliados à nós!</h1></font>

<?php

include("conexao.php");

$sql = "SELECT foto, nome, comentario FROM logins WHERE valida=1";
$result = $con->query($sql);

if($result->num_rows > 0)
{
  while ($linha = $result->fetch_assoc()) 
  {
    echo "<br><h3> Foto</h3> "   . $linha["foto"] . 
    "<br><h3>Nome</h3> "    .$linha["nome"] .
    "<br><h3>Descrição</h3> ".$linha["comentario"]. 
    "<br><br><h4>Obrigado!</h4> ".
        "<br>";
  } 
} else {
  echo "<h2>Sem contribuintes</h2>";
}
$con->close();

?>
<script src="https://ajax.googleapis.com/ajax/libis/jquery/3.3.1/jquery.min.js"></script>

        <script>
          
          function previewImagem() {
            var foto = document.querySelector('input[name=foto]').files[0];
            var preview = document.querySelector('img');

            var reader = new FileReader();

            reader.onloadend = function(){
              preview.src = reader.result;
            }
            if(foto){
              reader.readAsDataURL(foto);
            }else{
              preview.src = "";
            }
          }

        </script>
</body>
<div class="login-box">
<input name=""  type="button" onclick="window.location.href='a.php' " value="Voltar">
 </div></div>
 <div class="footer">

  <h6><font color="">Criado por Pedro Lucas Silva Paula, Santhiago Santos Souza, Ataídes Borges alunos do curso sistemas de informções.</h6>
</font>
<h6><font color="">Universidade do Estado de Minas Gerais, Polo - Frutal.</h6>
</font>
<h6><font color="">Projeto interdisciplinar.</div></font></h6>
</font>
</body>
</html>