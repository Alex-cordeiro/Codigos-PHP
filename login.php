<!DOCTYPE html>
<?php 
include 'db.php';
?>

<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="./scss/login.css">
</head>

<body>
    <div class="loginpage">
        
        
        <div class="loginform form-group">
        <center>
            <img src="./imagens/cadeado.png" style="width:200px; height:200px;">
        </center>
            <form class="form-group formlogin" method="POST" action="funcoes/processaLogin.php">
                <input class=" form-control" type="text" name="username" placeholder="Login"  required>
                <input class=" form-control" type="password" name="senha" placeholder="Password" autocomplete="off" required>
                <button class="form control btn bg-primary" type="submit" name="enviar">Enviar</button>
            </form>
        </div>
    </div>

    
</body>

</html>