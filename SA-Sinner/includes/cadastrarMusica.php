<?php
 $nmusica = $_POST['nmusica'];
 $duracao = $_POST['duracao'];
 $genero = $_POST['genero'];
 $album = $_POST['album'];

$conexao = mysqli_connect('localhost','root','root','database_sinner');
$query_insert = mysqli_query($conexao,"INSERT INTO musica VALUES(DEFAULT, '$nmusica', '$duracao', 'a', $album, $genero)");


?>