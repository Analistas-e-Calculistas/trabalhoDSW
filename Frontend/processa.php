<?php
    include_once("conexao.php");

    $nome_cad = $_POST["nome_cad"];
    $email_cad = $_POST["email_cad"];
    $CPF_cad = $_POST["CPF_cad"];
    $senha_cad = $_POST["senha_cad"];

    $sql = "INSERT INTO usuarios (Nome,Email,CPF,Senha) VALUES ('$nome_cad','$email_cad','$CPF_cad','$senha_cad')";
    $salvar = mysqli_query($connect, $sql);

    mysqli_close($connect);

?>