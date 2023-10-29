<?php

    $localhost = "localhost";
    $username = "root";
    $password = "";
    $database = 'banco-requerimento';

    $conexao = new mysqli($localhost,$username,$password,$database);

    if ($conexao->connect_errno) {

        echo "status : falha na conexao do banco";

    }

    else {

    echo "status : conectado ao banco";

    }
    
?>