<?php
    $servidor = "localhost";
    $usuario = "root";
    $senha = "";
    $banco = "bdcadastro";
    $conexao = mysqli_connect($servidor, $usuario, $senha, $banco);

    if (!$conexao){
        print "Falha na conexão com o banco de dados";
    }

?>