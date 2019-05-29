<html>
<head>
    <style>body{
    margin: 0;
    padding: 0;
    background: black;
    background-size: cover;
    background-position: center;
    font-family: sans-serif;
}
.login-box{
    width: 320px;
    height: 420px;
    background: rgba(0, 0, 0, 0.5);
    color: #fff;
    top: 50%;
    left: 50%;
    position: absolute;
    transform: translate(-50%,-50%);
    box-sizing: border-box;
    padding: 70px 30px;
}
.avatar{
    width: 100px;
    height: 100px;
    border-radius: 50%;
    position: absolute;
    top: -50px;
    left: calc(50% - 50px);
}
h1{
    margin: 0;
    padding: 0 0 20px;
    text-align: center;
    font-size: 22px;
}
.login-box p{
    margin: 0;
    padding: 0;
    font-weight: bold;
}
.login-box input{
    width: 100%;
    margin-bottom: 20px;
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
    background: #1c8adb;
    color: #fff;
    font-size: 18px;
    border-radius: 20px;
}
.login-box input[type="submit"]:hover
{
    cursor: pointer;
    background: #C0C0C0C0;
    color: #000;
}

.login-box a{
    text-decoration: none;
    font-size: 14px;
    color: #fff;
}
.login-box a:hover
{
    color: #39dc79;
}

</style>
    <title> Login </title>
    
</head>
    <body>

        
        <form id="form1" action="valida1.php" method="post">
    <div class="login-box">
    <img src="avatar.png" class="avatar">
        <h1>Login</h1>
            <form><BR>
            <p align="center">User</p>
            <input type="text" name="user" placeholder="Digite seu nome de usuário">
            <p align="center">Senha</p>
            <input type="password" name="comentario" placeholder="Digite sua senha">
            <input type="submit" name="submit" value="Login">
               
            </form>
         <font color="white"><h2 align="center"> Faça o login com a conta de ADM</h2>
        
        </div>
    
    </body>
</html>
<?php
            if(isset($_GET['info']) == 1)
            {
                echo"<p style='color : red;'>Usuario ou senha incorretos</p>";
            }
            ?>
    </form>

</body>
</html>
<?php
            if(isset($_GET['info']) == 1)
            {
                echo"<p style='color : red;'>Usuario ou senha incorretos</p>";
            }
            ?>