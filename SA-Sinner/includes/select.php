<?php
ini_set("upload_max_filesize", "200M");

$pesquisa = $_POST['pesquisar']; //Pegando o POST da pag teste.php `-`
select($pesquisa);
function select($pesquisa){
$conexao = mysqli_connect('localhost','root','','database_sinner');
$acao = mysqli_query($conexao, "SELECT * FROM usuario WHERE nome LIKE '%" . $pesquisa. "%'" ); //Pesquisando no banco `-`

$array = mysqli_fetch_all($acao, MYSQLI_ASSOC);//Criando um array `-`

foreach($array as $key =>$value) { //pegando TODOS os resultados da pesquisa `-`
 echo $value['nome'];
}

mysqli_close($conexao);

}

?>




