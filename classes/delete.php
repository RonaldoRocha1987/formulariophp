<?php

    if(!empty($_GET['id']))
    {
         include_once('../config/config.php');


        $id= $_GET['id'];

        $sqlSelect = "SELECT * FROM usuarios WHERE formulario_id=$id";

        $result = $conexao->query($sqlSelect);

        if($result->num_rows > 0)
        {   
           $sqlDelete = "DELETE FROM usuarios WHERE formulario_id=$id";
           $resultDelete = $conexao->query($sqlDelete);
        }
    }
    header('Location: sistema.php');  

?>