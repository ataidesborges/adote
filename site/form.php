
<!DOCTYPE html>
<html>
<head>
  <link rel="shortcut icon" href="favicon.ico"  type="uemg.png/icon">
  <title>Formulário</title>
<style>
        body{
          text-align: center;
    margin: 0;
    padding: 0;
 font-family: Arial;
   
 background: -moz-linear-gradient(top,  #1e5799 0%, #2989d8 50%, #207cca 51%, #7db9e8 100%);
background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#1e5799), color-stop(50%,#2989d8), color-stop(51%,#207cca), color-stop(100%,#7db9e8));
background: -webkit-linear-gradient(top,  #1e5799 0%,#2989d8 50%,#207cca 51%,#7db9e8 100%);
background: -o-linear-gradient(top,  #1e5799 0%,#2989d8 50%,#207cca 51%,#7db9e8 100%);
background: -ms-linear-gradient(top,  #1e5799 0%,#2989d8 50%,#207cca 51%,#7db9e8 100%);

}
.box{
    width: 380px;
    height: 720px;
    
    color: #fff;
    top: 50%;
    left: 50%;
    position: absolute;
    transform: translate(-50%,-50%);
    box-sizing: border-box;
    padding: 70px 30px;
}

h2{
    margin: 0;
    padding: -10px -10px 20px;
    text-align: center;
    font-size: 22px;
}
.box p{
    margin: 0;
    padding: 0;
    font-weight: bold;
     

}
.box input{
    width: 100%;
    margin-bottom: 20px;

}
.box input[type="text"], input[type="cometario"]
{

    border: none;
    border-bottom: 1px solid #fff;
    background: transparent;
    outline: none;
    height: 40px;
    color: #fff;
    font-size: 16px;
}
.box input[type="submit"]
{

    border: none;
    outline: none;
    height: 40px;
    background: white;
    color: #000000;
    font-size: 18px;
    border-radius: 20px;
}
.box input[type="submit"]:hover
{
    cursor: pointer;
    background: #C0C0C0C0;
    color: #000;
}
.box input[type="button"]
{

    border: none;
    outline: none;
    height: 40px;
    background: white;
    color: #000000;
    font-size: 18px;
    border-radius: 20px;
}
.box input[type="button"]:hover
{
    cursor: pointer;
    background: #C0C0C0C0;
    color: #000;
}
.box a{
    text-decoration: none;
    font-size: 14px;
    color: #fff;

}
.login-box a:hover
{
    color: #39dc79;
}
.fakeimg2 {
 
  width: 150px;
   height: 150px
  padding: 20px;
  position: center;
  

}
.textarea{
  color: white;
    font-family: Arial;
  background: transparent;
  text-align: top;
  padding: 80px;
border-bottom: 1px solid #fff;
}
.file{
  width: 150px; 
  height: 150px;
   background: url(uemg.png);
}
    </style>

    <link rel="stylesheet" type="text/css" href="style2.css">   

</head>
<body bgcolor="#000000">
  <form action="envio.php"  id="form"  name="form"  method="post">
     <div class=" box">
       
      <tr>
        <label> Foto(png) </label>
        </td>
      <td width="200px">
          <input type="file"  name="foto" onchange="previewImagem()"><br><br>
          <img  color="white" style="width: 150px; height: 150px;"><br><br>
        </td>
      </tr>
      <tr>
        
        <td width="100px">
         
          <label><font color="white"> Nome</label>
        </td>
      <td width="200px">
          <input type="text"  name="nome" placeholder="Digite seu nome, ou nome da empresa">
        </td>
      </tr>
      <tr>
        <td width="100px">
          
          <label><font color="white">Email</label>
        </td>
        <td width="200px">
          <input type="text"  name="email" placeholder="Digite seu email">
        </td>
      </tr>
      <tr>
        <td width="100px">
        <label><font color="white">Comentario</label></font>
        </td><br><br>
         
         
          <textarea  div class="textarea" name="comentario" div></textarea><br>
       
           <input type="submit"  name="enviar">
           <input name=""  type="button" onclick="window.location.href='a.php' " value="Cancelar">


        </td>
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

      </tr>
    </table>
  </form>
 