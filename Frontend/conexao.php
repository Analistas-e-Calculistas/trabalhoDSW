<?php
    $hostname = "localhost";
    $username = "root";
    $password = "";
    $database = "bdcadastro";
    $connect = mysqli_connect($hostname, $username, $password, $database);

    if (!$connect){
        echo ("Falha na conexão com o banco de dados");
    }

?>