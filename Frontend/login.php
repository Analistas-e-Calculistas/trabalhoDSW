<?php
session_start();

include_once('conexao.php');

if(empty($_POST['cpf_login']) || empty($_POST['senha_login'])){
    header('location; processa.php');
    exit();
}

$cpf_login = mysqli_real_escape_string($connect, $_POST['cpf_login']);
$senha_login = mysqli_real_escape_string($connect, $_POST['senha_login']);

$query = "SELECT * FROM usuarios WHERE CPF = '{$cpf_login}' and Senha = md5('{$senha_login}')";
$result = mysqli_query($connect, $query);
$row = mysqli_num_row($result);

if($row = 1){
    $_SESSION['cpflogin'] = $cpf_login;
    header('location : painel.php');
    exit();


}   else{
    header('location: login.php');
    exit();

}
?>