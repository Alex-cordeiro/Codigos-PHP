
<?php 
include 'db.php';

?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./scss/style.css">
</head>

<body>
    <table class="table table-hover table-striped" id="alunos">
        <thead>
            <tr>
                <th>Nome usuario</th>
                <th>User Name</th>
                <th>Tipo de acesso</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $buscaUsuario = "SELECT * FROM td_user";

             $returnUser = mysqli_query($connect, $buscaUsuario); 

            while($row = mysqli_fetch_array($returnUser)){
                echo '<tr><td>'.$row['nome'].'</td>';
                echo '<td>'.$row['user'].'</td>';
                if($row['nivel_login'] == 1){
                    echo'<td>ADMINISTRADOR</td>';
                }else{
                    echo '<td>USUARIO</td>';
                }
        ?>
            </tr>


            <?php 
            } 
            
            ?>


        </tbody>
    </table>

</body>

</html>