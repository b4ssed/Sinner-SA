<pre>
<?php
$conexao = mysqli_connect('localhost','root','root','database_sinner');

// mysql_select_db($conexao);


$consulta = mysqli_query($conexao,"SELECT nome FROM tb_usuario WHERE id_usuario = 1");

$flavio = $consulta;

print_r("$flavio");

mysqli_close($conexao)


?>
</pre>