<?php

    $server = "localhost";
    $user = "root";
    $pws = "";
    $database = "cadastro";

    $connect = mysqli_connect($server,$user,$pws,$database);

    if(!$connect){
        echo "Não foi possivel conectar ao banco!". PHP_EOL;
        exit;
    }

    

    /*Return list of registered access level of users*/
    $checkAccessLevel = "SELECT * FROM td_nivel_login";
    $returnAccess = mysqli_query($connect,$checkAccessLevel);