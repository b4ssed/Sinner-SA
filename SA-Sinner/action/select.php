<?php

$conexao = mysqli_connect('localhost','root','root','database_sinner');

$pesquisa = $_POST['pesquisar'];
$resultado = "SELECT * FROM tb_usuario WHERE nome LIKE '$pesquisa'";

$acao = mysqli_query($conexao, $resultado;)


while ($rows = mysqli_fetch_array ($resultado)){
echo"JESUS ama:" . $rows['nome']

}







?>


// mysql_select_db($conexao);
// $consulta = mysqli_query($conexao,"SELECT nome FROM tb_usuario WHERE id_usuario = 1");
// mysqli_close($conexao)



