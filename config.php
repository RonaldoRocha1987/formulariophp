<?php

    $dbHost ="Localhost";
    $dbUsername = "root";
    $dbPassword = "mysql1987";
    $dbname = "formulario";

    $conexao = new mysqli($dbHost,$dbUsername,$dbPassword,$dbname);
    
   /* if($conexao->connect_errno)
    {
        echo "Erro";
    }
    else{
       echo "Conexão efetuada com sucesso";
    }*/

?>