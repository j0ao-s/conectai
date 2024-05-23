<?php

    $dbHost = 'Localhost';
    $dbUsername = 'root';
    $dbPassword = '';
    $dbName = 'form_cad';

    // Efetua a conexão com o banco de dados
    $conn = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

    // if($conn -> connect_errno)
    // {
    //     echo "Erro";
    // }
    // else
    // {
    //     echo "Conexão efetuada com sucesso";
    // }

?>