<?php
  if (isset($_POST["id_musica"])) {
    //Cria a conexão com o banco de dados
    $connect = mysqli_connect("localhost","root","","dados");
    //Variaveis que recebem os dados do orçamento para edição
    $nmusica = $_POST['name'];
    $duracao = $_POST['duracao'];
    $genero = $_POST['genero'];
    $album = $_POST['album'];
    //Alteração do orçamento no banco de dados
    $query = mysqli_query($connect, "UPDATE musica SET dsmusica='$nmusica', duracao=$duracao, genero=$genero, album=$album WHERE id_musica='$id_musica'") or DIE(mysqli_error($connect));
    //Fechamento da conexão com o banco de dados
    mysqli_close($connect);

?>