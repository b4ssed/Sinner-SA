<?php
session_start();

$login = isset($_POST["login"]) ? $_POST["login"] : "";
$senha = isset($_POST["senha"]) ? $_POST["senha"] : "";

$conexao = mysqli_connect('localhost','root','','database_sinner');
$acao = mysqli_query($conexao, "SELECT * FROM usuario WHERE nome = '$login' AND senha = '$senha' " ); //Pesquisando no banco `-`




$array = mysqli_fetch_all($acao, MYSQLI_ASSOC);//Criando um array, formatando o sql para tabela `-`

if (!empty($array)) { // VERIFICA se tem algo dentro do array (se tiver dentro do array significa que ele achou o usuario dentro do banco)
    $_SESSION["usuario"]  = $array;//Inserindo os dados do usuário em uma sessão
    header("location:../index.php");
 } else {
    header("location:../pages/login.php?erro=100");
 }


mysqli_close($conexao);

?>