<?php
include 'db.php';
include './script/password.php';


$nome = $_POST['nome'];
$nome_usuario = $_POST['nome_usuario'];
$senha = $_POST['nome_usuario'];
$nivel = $_POST['nivelusuario'];


$insereUser = "INSERT INTO td_user (nome, user, senha, nivel_login)
values ('$nome', '$nome_usuario', sha1('$senha'), $nivel)";


$result = mysqli_query($connect, $insereUser);

if(!$result){
    echo "<h3>NÃO FOI POSSIVEL INSERIR O USUARIO</h3>";
}
else{
    echo "<link rel='stylesheet' href='./scss/style.css'>
    <div class='container' style='width:400px;'>
        <center>
            <h3>Usuario adicionado com sucesso</h3>
            <div style='margin-top:10px'>
                <a href= 'cadastroUsuario.php' class='btn btn-sm btn-success'>Voltar</a>
    
            </div>
        </center>
    
    </div>";
}



?>


