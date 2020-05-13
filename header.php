<!DOCTYPE html>
<?php
include'db.php';
?>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" type="text/css" href="./scss/style.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-primary">
        <a class="navbar-brand" href="#"><img src="./imagens/iconeprincipal.png" alt="Cadastramento"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ConteudosDaNav" aria-controls="#ConteudosDaNav" aria-expanded="false" aria-label="Botoes escondidos">
        <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="ConteudosDaNav">
            <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="index.php">Home<span class="sr-only">(Pagina inicial)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="?pagina=cadastro">Cadastro Usuário</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="?pagina=relatorio">Relatório de Usuários</a>

            </ul>
        </div>
    </nav>
   
    
    
<footer>
    <script src="node_modules/jquery/dist/jquery.js"></script>
    <script src="node_modules/popper.js/dist/umd/popper.js"></script>
    <script src="node_modules/bootstrap/dist/js/bootstrap.js"></script>
</footer>
</body>
</html> 