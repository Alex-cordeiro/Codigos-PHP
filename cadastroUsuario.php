<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./scss/style.css">
</head>

<body>

    <div class="container" style="width:400px;">
        <div style="text-align:right; margin-top:30px;">
            <a href="index.php" role="button" class="btn btn-primary btn-sm">Voltar</a>
        </div>
        <form method="post" action="cadastrarUsuario.php">
            <h2>Cadastro de Usuario</h2>
            <div class="form-group"><br><br>
                <input class="form-control" type="text" name="nome" placeholder="Insira o nome do Usuario"><br><br>
                <input class="form-control" type="text" name="nome_usuario" placeholder="Escolha seu user name para acessar"><br><br>
                <input class="form-control" type="password" name="senha" placeholder="Insira a senha"><br><br>

            </div>
            <div class="form-group">
                <label>Nivel de Acesso</label>
                <select name="nivelusuario">
                    <optgroup>
                        <option value= "1">ADMINISTRADOR</option>
                        <option value= "2">USUARIO PADRÃO</option>
                    </optgroup>
                </select>
            </div>
            <div style="text-align:right;">
                <button type="submit" class="btn btn-sm btn-success">Cadastrar</button>
            </div>
        </form>
    </div>



</body>

</html>