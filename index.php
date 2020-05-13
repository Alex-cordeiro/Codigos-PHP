<?php
    include 'db.php';
 
    include 'header.php';



    if(isset($_GET['pagina'])){
        $pagina = $_GET['pagina'];
    }
    else{
        $pagina = 'home';
    }


    switch($pagina){
        case 'cadastro': include 'cadastroUsuario.php'; break;
        case 'relatorio': include 'relatorioUsuario.php'; break;
        default: include 'home.php'; break;

    }
    


    



//include 'home.php';




?>